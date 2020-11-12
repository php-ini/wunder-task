<?php
/**
 * Repository interface.
 * Interface for setting the main functions will be used during
 * the getting of the User information
 * @author Mahmoud Mostafa <jinkazama_m@yahoo.com>
 */

namespace App\Domains\User\Repositories;


interface UserInterface
{

    public function getById(int $user_id) : array;

    public function getByUserToken(string $token) : array;

}
