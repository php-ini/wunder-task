<?php


namespace App\Domains\User\Repositories;


/**
 * Class PaymentInfo
 * @package App\Domains\User\Repositories
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class PaymentInfo extends AbstractRepository implements RepositoryInterface
{
    /**
     * @var string
     */
    protected $table_name = 'user_payment_info';

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

    /**
     * @param int $user_id
     * @return string|null
     */
    public function getPaymentCode(int $user_id): ?string
    {
        $record = $this->where('user_id', $user_id);
        return $record['payment_data'];
    }
}
