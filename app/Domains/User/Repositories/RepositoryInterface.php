<?php
/**
 * Repository interface.
 * Interface for setting the main functions will be used during
 * the getting of the User addresses information
 * @author Mahmoud Mostafa <jinkazama_m@yahoo.com>
 */

namespace App\Domains\User\Repositories;


/**
 * Interface RepositoryInterface
 * @package App\Domains\User\Repositories
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
interface RepositoryInterface
{

    /**
     * @param int $id
     * @return array
     */
    public function find(int $id) : array;

    /**
     * @param array $data
     * @return int
     */
    public function create(array $data) : int;

    /**
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data) : bool;

}
