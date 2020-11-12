<?php


namespace App\Domains\User\Repositories;


/**
 * Class User
 * @package App\Domains\User\Repositories
 */
class User implements UserInterface
{

    /**
     * @param int $user_id
     * @return array
     */
    public function getById(int $user_id): array
    {
        // TODO: Implement getById() method.
    }

    /**
     * @param string $token
     * @return array
     */
    public function getByUserToken(string $token): array
    {
        // TODO: Implement getByUserToken() method.
    }
}
