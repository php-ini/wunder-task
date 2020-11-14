<?php


namespace App\Domains\User\Services;


use App\Domains\User\Repositories\Address;
use App\Domains\User\Repositories\Repository;
use App\Domains\User\Repositories\PaymentInfo;
use App\Domains\User\Repositories\User;

class RepositoryService
{

    private $formName;

    const STEP_MAPPING = ['User' => 1, 'Address' => 2, 'Payment' => 3];
    /**
     * RepositoryService constructor.
     */
    public function __construct(string $formName)
    {
        $this->formName = $formName;
    }

    public function getRepository()
    {
        switch ($this->formName) {
            case 'Address':
                return new Address();
            case 'Payment':
                return new PaymentInfo();
            default:
                return new User();
        }
    }

    public function updateUserSteps($userId)
    {
        $userRepo = new User();
//dd($userId);
//        echo $userId . '<br>';
//        echo self::STEP_MAPPING[$this->formName] . '<br>';
//        exit;
        return $userRepo->update($userId, ['completed_step' => self::STEP_MAPPING[$this->formName]]);
    }

}
