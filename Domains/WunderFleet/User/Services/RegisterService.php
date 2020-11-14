<?php
declare(strict_types=1);

namespace Domains\WunderFleet\User\Services;

use Illuminate\Http\Request;
use Domains\WunderFleet\User\Helpers\Arrays;
use Domains\WunderFleet\Payment\Services\PaymentService;
use Symfony\Component\HttpFoundation\Cookie;
use Domains\WunderFleet\User\Repositories\Repository;
use Domains\WunderFleet\User\ViewModels\StepInterface;
use Domains\WunderFleet\User\Validators\ValidatorInterface;
use Domains\WunderFleet\User\Repositories\RepositoryInterface;


/**
 * Class RegisterService
 * @package Domains\WunderFleet\User\Services
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class RegisterService
{
    /**
     * @var ValidatorInterface
     */
    private $validator;
    /**
     * @var string
     */
    private $formName;
    /**
     * @var mixed
     */
    private $data;
    /**
     * @var RepositoryInterface
     */
    private $repository;
    /**
     * @var Request
     */
    private $request;
    /**
     * @var \Domains\WunderFleet\API\Formatters\FormatterInterface
     */
    private $formatterClass;
    /**
     * @var \Domains\WunderFleet\API\Sites\CrawlerInterface
     */
    private $paymentClass;


    const KEYS_TO_EXCLUDE = ['_token', 'form'];
    const COOKIE_NAME = 'wunder-register';
    const COOKIE_INTERVAL = 600;
    const USER_STEP = 'User';
    const ADDRESS_STEP = 'Address';
    const PAYMENT_STEP = 'Payment';


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

    /**
     * @param $data
     * @return mixed
     */
    public function prepareData($data)
    {
        if ($this->formName !== self::USER_STEP) {
            $data = array_merge($data, ['user_id' => $this->getUserIdFromCookie()]);
        }

        return Arrays::arrayExcept(self::KEYS_TO_EXCLUDE, $data);
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return array
     */
    public function setData(array $data): array
    {
        return $this->data = $data;
    }

    /**
     * @return ValidatorInterface
     */
    public function getValidator(): ValidatorInterface
    {
        return $this->validator;
    }

    /**
     * @return int
     */
    public function createData(): int
    {
        return $this->repository->create($this->getData());
    }

    /**
     * @param int $value
     * @return \Illuminate\Cookie\CookieJar|Cookie
     */
    public function setCookie(int $value): Cookie
    {

        return cookie(self::COOKIE_NAME, $value, self::COOKIE_INTERVAL);
    }

    /**
     * @return array|string|null
     */
    public function getUserIdFromCookie()
    {
        return $this->request->cookie(self::COOKIE_NAME);
    }

    /**
     * @return bool
     */
    public function hasCookie()
    {
        return !empty($this->getUserIdFromCookie());
    }

    /**
     * @return int
     */
    public function updateData(): int
    {
        $recordId = $this->repository->getRecord($this->getData())['id'];
        $this->repository->update(
            $recordId,
            $this->getData()
        );

        return $recordId;
    }


    /**
     * @return bool
     */
    public function isDataValid(): bool
    {
        return $this->validator->validate($this->getData());
    }

    /**
     * @return bool
     */
    public function isDataCreatedAlready(): bool
    {
        return $this->hasCookie()
            && $this->checkIfRecordExists();
    }

    /**
     * @return bool
     */
    public function checkIfRecordExists(): bool
    {
        return $this->repository->hasRecord($this->data);
    }

    /**
     * @return int
     */
    public function startProcess(): int
    {
        $result = 0;
        $repositoryService = new RepositoryService($this->formName);
        if ($this->isDataValid()) {
            if ($this->isDataCreatedAlready()) {
                $result = $this->updateData();
            } else {
                if ($this->isPaymentInfoStep()) {
                    $this->setPaymentClasses();
                    if ($response = $this->addPaymentInfo()) {
                        $this->setData(
                            $this->formatterClass->prepareOutput(
                                [
                                    'response' => $response,
                                    'data' => $this->getData()
                                ]
                            )
                        );
                        $result = $this->createData();
                        $userId = !empty($this->getUserIdFromCookie()) ? (int)$this->getUserIdFromCookie() : (int)$result;
                        $repositoryService->updateUserSteps($userId);
                    }
                } else {
                    $result = $this->createData();
                    $userId = !empty($this->getUserIdFromCookie()) ? (int)$this->getUserIdFromCookie() : (int)$result;
                    $repositoryService->updateUserSteps($userId);
                }
            }
        }

        return $result;
    }

    /**
     * @return bool
     */
    public function isPaymentInfoStep(): bool
    {
        return $this->formName === self::PAYMENT_STEP;
    }

    /**
     * @return mixed
     */
    public function addPaymentInfo()
    {
        return $this->paymentClass->sendRequest(
            $this->formatterClass->format($this->getData())
        );
    }

    /**
     *
     */
    public function setPaymentClasses(): void
    {
        $paymentService = new PaymentService();
        $paymentClass = $paymentService->getPaymentSiteClass();
        $formatterClass = $paymentService->getFormatterClass();

        $this->paymentClass = $paymentClass;
        $this->formatterClass = $formatterClass;
    }

    public function getPaymentClass()
    {
        return $this->paymentClass;
    }


}
