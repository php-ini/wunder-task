<?php
declare(strict_types=1);

namespace Domains\WunderFleet\User\Repositories;

use DB;

/**
 * Class User
 * @package Domains\WunderFleet\User\Repositories
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class User extends AbstractRepository implements RepositoryInterface
{
    /**
     * @var string
     */
    protected $table_name = 'user';

    /**
     * @param $data
     * @return bool
     */
    public function hasRecord($data): bool
    {
        return $this->exists('email', $data['email']);
    }

    /**
     * @param $data
     * @return array
     */
    public function getRecord($data): array
    {
        return $this->where('email', $data['email']);
    }
}
