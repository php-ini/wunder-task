<?php


namespace App\Domains\User\Entities;


/**
 * Class PaymentInfo
 * @package App\Domains\User\Entities
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
     * @param $account_owner_name
     * @param $iban
     * @param $status
     * @param $is_primary
     * @param $response
     * @param $created_at
     */
    public function __construct($id, $account_owner_name, $iban, $status, $is_primary, $response, $created_at)
    {
        $this->id = $id;
        $this->account_owner_name = $account_owner_name;
        $this->iban = $iban;
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
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAccountOwnerName()
    {
        return $this->account_owner_name;
    }

    /**
     * @param mixed $account_owner_name
     */
    public function setAccountOwnerName($account_owner_name)
    {
        $this->account_owner_name = $account_owner_name;
    }

    /**
     * @return mixed
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param mixed $iban
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getIsPrimary()
    {
        return $this->is_primary;
    }

    /**
     * @param mixed $is_primary
     */
    public function setIsPrimary($is_primary)
    {
        $this->is_primary = $is_primary;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}
