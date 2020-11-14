<?php
declare(strict_types=1);

namespace Domains\WunderFleet\User\Repositories;


/**
 * Class Repository
 * @package App\WunderFleet\User\Repositories
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class Address extends AbstractRepository implements RepositoryInterface
{
    /**
     * @var string
     */
    protected $table_name = 'user_address';

    /**
     * @param $data
     * @return bool
     */
    public function hasRecord($data): bool
    {
        return $this->exists('user_id', $data['user_id']);
    }

    /**
     * @param $data
     * @return array
     */
    public function getRecord($data): array
    {
        return $this->where('user_id', $data['user_id']);
    }
}
