<?php


namespace App\Domains\User\ViewModels;


use App\Domains\User\Entities\User as UserEntity;
use App\Domains\User\Repositories\User as UserRepo;
use App\Domains\User\Entities\Address as AddressEntity;
use App\Domains\User\Repositories\Address as AddressRepo;
use App\Domains\User\Entities\PaymentInfo as PaymentEntity;
use App\Domains\User\Repositories\PaymentInfo as PaymentRepo;

/**
 * Class Step
 * @package App\Domains\User\ViewModels
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
final class Step implements ViewModelInterface
{

    /**
     * @var
     */
    private $userId;
    /**
     * @var UserRepo
     */
    private $userRepo;
    /**
     * @var AddressRepo
     */
    private $addressRepo;
    /**
     * @var PaymentRepo
     */
    private $paymentRepo;

    /**
     * Step constructor.
     * @param $userId
     * @param $userRepo
     * @param $addressRepo
     * @param $paymentRepo
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
        $this->userRepo = new UserRepo();
        $this->addressRepo = new AddressRepo();
        $this->paymentRepo = new PaymentRepo();
    }


    /**
     * @return \stdClass
     */
    public function build(): \stdClass
    {
        $data = $this->buildStepData();
        return $data;
    }

    /**
     * @return \stdClass
     */
    private function buildStepData(): \stdClass
    {
        $all = new \stdClass();
        $all->user = $this->getUserStepData();
        $all->address = $this->getAddressStepData();
        $all->payment = $this->getPaymentStepData();

        return $all;
    }

    /**
     * @return UserEntity|null
     */
    private function getUserStepData(): ?UserEntity
    {
        $modelData = $this->userRepo->find($this->userId);
        if(empty($modelData)){
            return null;
        }

        return new UserEntity(
            $modelData['id'],
            $modelData['email'],
            $modelData['first_name'],
            $modelData['last_name'],
            $modelData['telephone'],
            $modelData['completed_step'],
            $modelData['is_active'],
            $modelData['created_at']
        );

    }

    /**
     * @return AddressEntity|null
     */
    private function getAddressStepData(): ?AddressEntity
    {
        $modelData = $this->addressRepo->where('user_id', $this->userId);
        if(empty($modelData)){
            return null;
        }

        return new AddressEntity(
            $modelData['id'],
            $modelData['user_id'],
            $modelData['street'],
            $modelData['house_number'],
            $modelData['zip_code'],
            $modelData['city'],
            $modelData['country'],
            $modelData['created_at']
        );

    }

    /**
     * @return PaymentEntity|null
     */
    private function getPaymentStepData(): ?PaymentEntity
    {
        $modelData = $this->paymentRepo->where('user_id', $this->userId);
        if(empty($modelData)){
            return null;
        }

        return new PaymentEntity(
            $modelData['id'],
            $modelData['user_id'],
            $modelData['account_owner_name'],
            $modelData['iban'],
            $modelData['payment_data'],
            $modelData['status'],
            $modelData['is_primary'],
            $modelData['response'],
            $modelData['created_at']
        );

    }

    /**
     * @return bool
     */
    public function hasData(): bool
    {
        return $this->userRepo->exists('id', $this->userId);
    }
}
