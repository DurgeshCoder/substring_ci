<?php

namespace App\Models;

class Emp
{

    private $id;

    private $name;

    private $phone;

    private $city;

    /**
     * @param $id
     * @param $name
     * @param $phone
     * @param $city
     */
    public function __construct($id, $name, $phone, $city)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->city = $city;
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
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
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
    public function setCity($city): void
    {
        $this->city = $city;
    }



}