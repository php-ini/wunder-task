<?php
declare(strict_types=1);

namespace App\Domains\User\Entities;


/**
 * Class Repository
 * @package App\Domains\User\Entities
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class Address implements \JsonSerializable
{
    /**
     * @var int|int
     */
    private $id;

    /**
     * @var
     */
    private $user_id;

    /**
     * @var
     */
    private $street;

    /**
     * @var
     */
    private $house_number;

    /**
     * @var
     */
    private $zip_code;

    /**
     * @var
     */
    private $city;

    /**
     * @var
     */
    private $country;

    /**
     * @var
     */
    private $is_primary;

    /**
     * @var
     */
    private $created_at;

    /**
     * @var
     */
    private $updated_at;

    /**
     * Repository constructor.
     * @param int $id
     * @param int $user_id
     * @param string $street
     * @param string $house_number
     * @param string $zip_code
     * @param string $city
     * @param string $country
     * @param string $created_at
     */
    public function __construct(
        int $id,
        int $user_id,
        string $street,
        string $house_number,
        string $zip_code,
        string $city,
        string $country,
        string $created_at
    )
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->street = $street;
        $this->house_number = $house_number;
        $this->zip_code = $zip_code;
        $this->city = $city;
        $this->country = $country;
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
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @return mixed
     */
    public function getHouseNumber()
    {
        return $this->house_number;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
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
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}
