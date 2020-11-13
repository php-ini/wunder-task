<?php


namespace App\Domains\User\Services;


use App\Domains\User\Repositories\Repository;
use App\Domains\User\Repositories\PaymentInfo;
use App\Domains\User\Repositories\RepositoryInterface;
use App\Domains\User\Repositories\User;
use App\Domains\User\Validators\ValidatorInterface;
use App\Domains\User\ViewModels\StepInterface;
use App\Domains\User\Helpers\Arrays;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;


class RegisterService
{
    private $validator;
    private $formName;
    private $data;
    private $repository;
    private $request;

    const KEYS_TO_EXCLUDE = ['_token', 'form'];
    const COOKIE_NAME = 'wunder-register';
    const COOKIE_INTERVAL = 600;

    /**
     * RegisterService constructor.
     * @param ValidatorInterface $validator
     * @param RepositoryInterface $repository
     * @param string $formName
     * @param $request
     */
    public function __construct(ValidatorInterface $validator, RepositoryInterface $repository, string $formName, Request $request)
    {
        $this->validator = $validator;
        $this->formName = $formName;
        $this->request = $request;
        $this->data = $this->prepareData($request->input());
        $this->repository = $repository;

    }

    public function prepareData($data)
    {
        if($this->formName !== 'User'){
            $data = array_merge($data, ['user_id' => $this->getCookie()]);
        }

        return Arrays::arrayExcept(self::KEYS_TO_EXCLUDE, $data);
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getValidator(): ValidatorInterface
    {
        return $this->validator;
    }

    public function createData(): int
    {
        return $this->repository->create($this->getData());
    }

    public function setCookie(int $value)
    {

        return cookie(self::COOKIE_NAME, $value, self::COOKIE_INTERVAL);
    }

    public function getCookie()
    {
        return $this->request->cookie(self::COOKIE_NAME);
    }

    public function hasCookie()
    {
        return !empty($this->getCookie());
    }

    public function updateData(): int
    {
        $recordId = $this->repository->getRecord($this->getData())['id'];
         $this->repository->update(
            $recordId,
            $this->getData()
        );

         return $recordId;
    }

    public function getRecordId(): int
    {
        if($this->formName !== 'User'){

        }
    }

    public function isDataValid(): bool
    {
        return $this->validator->validate($this->getData());
    }

    public function isDataCreatedAlready(): bool
    {
        return $this->hasCookie()
            && $this->checkIfRecordExists();
    }

    public function checkIfRecordExists(): bool
    {
        return $this->repository->hasRecord($this->data);
    }

    public function startProcess(): int
    {
        $result = 0;
        if ($this->isDataValid()) {
            if ($this->isDataCreatedAlready()) {
                $result = $this->updateData();
//                dd($result . ' ==');
            } else {
                $result = $this->createData();
//                dd($result . ' ======');
            }
        }
        return $result;
    }



}
