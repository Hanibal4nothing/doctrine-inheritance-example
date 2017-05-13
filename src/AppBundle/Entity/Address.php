<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AddressRepository")
 */
class Address
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $street;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    protected $streetNumber;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $zipCode;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $city;

    /**
     * The getter function for the property <em>$id</em>.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The setter function for the property <em>$id</em>.
     *
     * @param  mixed $id
     *
     * @return $this Returns the instance of this class.
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The getter function for the property <em>$street</em>.
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * The setter function for the property <em>$street</em>.
     *
     * @param  string $street
     *
     * @return $this Returns the instance of this class.
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * The getter function for the property <em>$streetNumber</em>.
     *
     * @return int
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * The setter function for the property <em>$streetNumber</em>.
     *
     * @param  int $streetNumber
     *
     * @return $this Returns the instance of this class.
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * The getter function for the property <em>$zipCode</em>.
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * The setter function for the property <em>$zipCode</em>.
     *
     * @param  string $zipCode
     *
     * @return $this Returns the instance of this class.
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * The getter function for the property <em>$city</em>.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * The setter function for the property <em>$city</em>.
     *
     * @param  string $city
     *
     * @return $this Returns the instance of this class.
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }
}