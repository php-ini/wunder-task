<?php


namespace App\Domains\User\Entities;


/**
 * Class Repository
 * @package App\Domains\User\Entities
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
     * Repository constructor.
     * @param int $id
     * @param int $user_id
     * @param string $street
     * @param int $house_number
     * @param string $zip_code
     * @param string $city
     * @param string $country
     * @param string $created_at
     */
    public function __construct(
        int $id,
        int $user_id,
        string $street,
        int $house_number,
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
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getHouseNumber()
    {
        return $this->house_number;
    }

    /**
     * @param mixed $house_number
     */
    public function setHouseNumber($house_number)
    {
        $this->house_number = $house_number;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * @param mixed $zip_code
     */
    public function setZipCode($zip_code)
    {
        $this->zip_code = $zip_code;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @var
     */
    private $updated_at;

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}
