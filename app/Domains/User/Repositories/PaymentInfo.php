<?php


namespace App\Domains\User\Repositories;


/**
 * Class PaymentInfo
 * @package App\Domains\User\Repositories
 */
class PaymentInfo extends AbstractRepository implements RepositoryInterface
{
    protected $table_name = 'user_payment_info';

    public function hasRecord($data): bool
    {
        return $this->exists('user_id', $data['user_id']);
    }
    public function getRecord($data): array
    {
        return $this->where('user_id', $data['user_id']);
    }

    public function getPaymentCode(int $user_id): ?string
    {
        $record = $this->where('user_id', $user_id);
        return $record['payment_data'];
    }
}
