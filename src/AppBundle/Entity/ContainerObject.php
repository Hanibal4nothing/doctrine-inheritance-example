<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 *
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="class_name", type="string")
 * @ORM\DiscriminatorMap({
 *  "AppBundle\Entity\Customer" = "AppBundle\Entity\Customer",
 *  "AppBundle\Entity\Lead"     = "AppBundle\Entity\Lead",
 *  "AppBundle\Entity\Dealer"   = "AppBundle\Entity\Dealer"
 * })
 */
abstract class ContainerObject
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="ProcessContainer", inversedBy="objects")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    protected $container;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    protected $lastUpdate;

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
     * @param  int $id
     *
     * @return $this Returns the instance of this class.
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The getter function for the property <em>$lastUpdate</em>.
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * @ORM\PrePersist
     *
     * @return $this
     */
    public function prePersistUpdate()
    {
        $this->lastUpdate = new \DateTime();

        return $this;
    }

    /**
     * The getter function for the property <em>$container</em>.
     *
     * @return mixed
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * The setter function for the property <em>$container</em>.
     *
     * @param  mixed $container
     *
     * @return $this Returns the instance of this class.
     */
    public function setContainer($container)
    {
        $this->container = $container;

        return $this;
    }
}