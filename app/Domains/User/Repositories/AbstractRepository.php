<?php


namespace App\Domains\User\Repositories;

use DB;

abstract class AbstractRepository
{
    public function find(int $id): array
    {
        return (array)DB::table($this->table_name)->find($id);
    }

    public function create(array $data): int
    {
        return DB::table($this->table_name)->insertGetId($data);
    }

    public function update(int $id, array $data): bool
    {
        return DB::table($this->table_name)
            ->where('id', $id)
            ->update($data);
    }

    public function exists(string $column, $value): bool
    {
        return DB::table($this->table_name)->where($column, $value)->count() > 0;
    }

    public function where(string $column, $value): array
    {
        return (array)DB::table($this->table_name)->where($column, $value)->first();
    }
}
