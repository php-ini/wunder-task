<?php


namespace App\Domains\User\Services;


use App\Domains\User\Repositories\Address;
use App\Domains\User\Repositories\Repository;
use App\Domains\User\Repositories\PaymentInfo;
use App\Domains\User\Repositories\User;

class RepositoryService
{

    private $formName;
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

    public function updateUserSteps($userId, $step)
    {
        $userRepo = new User();
        return $userRepo->update($userId, ['completed_step', $step]);
    }

}
