<?php
/**
 * Repository interface.
 * Interface for setting the main functions will be used during
 * the getting of the User addresses information
 * @author Mahmoud Mostafa <jinkazama_m@yahoo.com>
 */

namespace App\Domains\User\Repositories;


interface RepositoryInterface
{

    public function find(int $id) : array;

    public function create(array $data) : int;

    public function update(int $id, array $data) : bool;

}
