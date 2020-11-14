<?php


namespace App\Domains\User\Services;


use App\Domains\User\Repositories\User;
use App\Domains\User\Repositories\Address;
use App\Domains\User\Repositories\Repository;
use App\Domains\User\Repositories\PaymentInfo;

/**
 * Class RepositoryService
 * @package App\Domains\User\Services
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class RepositoryService
{

    /**
     * @var string
     */
    private $formName;

    /**
     *
     */
    const STEP_MAPPING = ['User' => 1, 'Address' => 2, 'Payment' => 3];
    /**
     * RepositoryService constructor.
     */
    public function __construct(string $formName)
    {
        $this->formName = $formName;
    }

    /**
     * @return Address|PaymentInfo|User
     */
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

    /**
     * @param $userId
     * @return bool
     */
    public function updateUserSteps($userId)
    {
        $userRepo = new User();

        return $userRepo->update($userId, ['completed_step' => self::STEP_MAPPING[$this->formName]]);
    }

}
