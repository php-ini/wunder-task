<?php
declare(strict_types=1);

namespace Domains\WunderFleet\User\Entities;


/**
 * Class User
 * @package App\WunderFleet\User\Entities
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
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
     * @param string $created_at
     */
    public function __construct(
        int $id,
        string $email,
        string $first_name,
        string $last_name,
        string $telephone,
        int $completed_step,
        int $is_active,
        string $created_at
    )
    {
        $this->id = $id;
        $this->email = $email;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->telephone = $telephone;
        $this->completed_step = $completed_step;
        $this->is_active = $is_active;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @return mixed
     */
    public function getCompletedStep()
    {
        return $this->completed_step;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}
