<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LeadRepository")
 */
class Lead extends ContainerObject
{

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    protected $createDate;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    protected $withDelivery;

    /**
     * @var float
     * @ORM\Column(type="float")
     */
    protected $monthlyRate;

    /**
     * The getter function for the property <em>$createDate</em>.
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * The setter function for the property <em>$createDate</em>.
     *
     * @param  \DateTime $createDate
     *
     * @return $this Returns the instance of this class.
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * The getter function for the property <em>$withDelivery</em>.
     *
     * @return boolean
     */
    public function getWithDelivery()
    {
        return $this->withDelivery;
    }

    /**
     * The setter function for the property <em>$withDelivery</em>.
     *
     * @param  boolean $withDelivery
     *
     * @return $this Returns the instance of this class.
     */
    public function setWithDelivery($withDelivery)
    {
        $this->withDelivery = $withDelivery;

        return $this;
    }

    /**
     * The getter function for the property <em>$monthlyRate</em>.
     *
     * @return float
     */
    public function getMonthlyRate()
    {
        return $this->monthlyRate;
    }

    /**
     * The setter function for the property <em>$monthlyRate</em>.
     *
     * @param  float $monthlyRate
     *
     * @return $this Returns the instance of this class.
     */
    public function setMonthlyRate($monthlyRate)
    {
        $this->monthlyRate = $monthlyRate;

        return $this;
    }

}