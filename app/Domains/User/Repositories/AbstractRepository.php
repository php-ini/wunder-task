<?php


namespace App\Domains\User\Repositories;

use DB;

/**
 * Class AbstractRepository
 * @package App\Domains\User\Repositories
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
abstract class AbstractRepository
{
    /**
     * @param int $id
     * @return array
     */
    public function find(int $id): array
    {
        return (array)DB::table($this->table_name)->find($id);
    }

    /**
     * @param array $data
     * @return int
     */
    public function create(array $data): int
    {
        return DB::table($this->table_name)->insertGetId($data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        return DB::table($this->table_name)
            ->where('id', $id)
            ->update($data);
    }

    /**
     * @param string $column
     * @param $value
     * @return bool
     */
    public function exists(string $column, $value): bool
    {
        return DB::table($this->table_name)->where($column, $value)->count() > 0;
    }

    /**
     * @param string $column
     * @param $value
     * @return array
     */
    public function where(string $column, $value): array
    {
        return (array)DB::table($this->table_name)->where($column, $value)->first();
    }
}
