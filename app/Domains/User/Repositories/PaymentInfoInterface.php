<?php
/**
 * Repository interface.
 * Interface for setting the main functions will be used during
 * the getting of the User payments information
 * @author Mahmoud Mostafa <jinkazama_m@yahoo.com>
 */

namespace App\Domains\User\Repositories;


interface PaymentInfoInterface
{

    public function getById(int $user_id) : array;

    public function getByUserId(int $user_id) : array;

}
