<?php


namespace App\Domains\User\Repositories;
use DB;

/**
 * Class User
 * @package App\Domains\User\Repositories
 */
class User extends AbstractRepository implements RepositoryInterface
{
    protected $table_name = 'user';

    public function hasRecord($data): bool
    {
        return $this->exists('email', $data['email']);
    }
    public function getRecord($data): array
    {
        return $this->where('email', $data['email']);
    }
}
