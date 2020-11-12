<?php


namespace App\Domains\User\Entities;


/**
 * Class User
 * @package App\Domains\User\Entities
 */
class User implements \JsonSerializable
{
    /**
     * @var
     */
    private $id;

    /**
     * @var string|string
     */
    private $email;

    /**
     * @var string|string
     */
    private $first_name;

    /**
     * @var string|string
     */
    private $last_name;

    /**
     * @var string|string
     */
    private $telephone;

    /**
     * @var int|int
     */
    private $completed_step;

    /**
     * @var bool|bool
     */
    private $is_active;

    /**
     * @var string|string
     */
    private $token;

    /**
     * @var string|string
     */
    private $created_at;

    /**
     * User constructor.
     * @param id $id
     * @param string $email
     * @param string $first_name
     * @param string $last_name
     * @param string $telephone
     * @param int $completed_step
     * @param bool $is_active
     * @param string $token
     * @param string $created_at
     */
    public function __construct(
        id $id,
        string $email,
        string $first_name,
        string $last_name,
        string $telephone,
        int $completed_step,
        bool $is_active,
        string $token,
        string $created_at
    )
    {
        $this->email = $email;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->telephone = $telephone;
        $this->completed_step = $completed_step;
        $this->is_active = $is_active;
        $this->token = $token;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getCompletedStep()
    {
        return $this->completed_step;
    }

    /**
     * @param mixed $completed_step
     */
    public function setCompletedStep($completed_step)
    {
        $this->completed_step = $completed_step;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * @param mixed $is_active
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
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
