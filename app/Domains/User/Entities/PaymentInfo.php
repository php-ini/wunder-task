<?php
declare(strict_types=1);

namespace App\Domains\User\Entities;


/**
 * Class PaymentInfo
 * @package App\Domains\User\Entities
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class PaymentInfo implements \JsonSerializable
{
    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    private $user_id;

    /**
     * @var
     */
    private $account_owner_name;

    /**
     * @var
     */
    private $iban;

    /**
     * @var
     */
    private $status;

    /**
     * @var
     */
    private $payment_data;

    /**
     * @var
     */
    private $is_primary;

    /**
     * @var
     */
    private $response;

    /**
     * @var
     */
    private $created_at;

    /**
     * PaymentInfo constructor.
     * @param $id
     * @param $user_id
     * @param $account_owner_name
     * @param $iban
     * @param $status
     * @param $is_primary
     * @param $response
     * @param $created_at
     */
    public function __construct($id, $user_id, $account_owner_name, $iban, $payment_data, $status, $is_primary, $response, $created_at)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->account_owner_name = $account_owner_name;
        $this->iban = $iban;
        $this->payment_data = $payment_data;
        $this->status = $status;
        $this->is_primary = $is_primary;
        $this->response = $response;
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAccountOwnerName()
    {
        return $this->account_owner_name;
    }

    /**
     * @return mixed
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getIsPrimary()
    {
        return $this->is_primary;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getPaymentData()
    {
        return $this->payment_data;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}
