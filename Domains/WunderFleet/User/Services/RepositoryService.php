<?php
declare(strict_types=1);

namespace Domains\WunderFleet\User\Services;

use Domains\WunderFleet\User\Repositories\User;
use Domains\WunderFleet\User\Repositories\Address;
use Domains\WunderFleet\User\Repositories\Repository;
use Domains\WunderFleet\User\Repositories\PaymentInfo;

/**
 * Class RepositoryService
 * @package Domains\WunderFleet\User\Services
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
     * @param int $userId
     * @return bool
     */
    public function updateUserSteps(int $userId)
    {
        $userRepo = new User();

        return $userRepo->update($userId, ['completed_step' => self::STEP_MAPPING[$this->formName]]);
    }

}
