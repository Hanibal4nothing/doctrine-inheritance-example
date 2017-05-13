<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DealerRepository")
 */
class Dealer extends ContainerObject
{

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\ManyToMany(targetEntity="Address", cascade={"persist", "remove"})
     * @ORM\JoinTable(joinColumns={@ORM\JoinColumn(referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(referencedColumnName="id")}
     *      )
     */
    protected $addresses;

    /**
     * Customer constructor.
     */
    public function __construct()
    {
        $this->addresses = new ArrayCollection();
    }

    /**
     * The getter function for the property <em>$name</em>.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The setter function for the property <em>$name</em>.
     *
     * @param  string $name
     *
     * @return $this Returns the instance of this class.
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The getter function for the property <em>$addresses</em>.
     *
     * @return mixed
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * The setter function for the property <em>$addresses</em>.
     *
     * @param  mixed $addresses
     *
     * @return $this Returns the instance of this class.
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * @param Address $address
     *
     * @return $this
     */
    public function addAddress(Address $address)
    {
        $this->addresses->add($address);

        return $this;
    }

    
}