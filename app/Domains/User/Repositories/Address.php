<?php


namespace App\Domains\User\Repositories;


/**
 * Class Repository
 * @package App\Domains\User\Repositories
 */
class Address extends AbstractRepository implements RepositoryInterface
{
    protected $table_name = 'user_address';

    public function hasRecord($data): bool
    {
        return $this->exists('user_id', $data['user_id']);
    }
    public function getRecord($data): array
    {
        return $this->where('user_id', $data['user_id']);
    }
}
