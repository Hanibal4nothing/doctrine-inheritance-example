<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContainerRepository")
 */
class ProcessContainer
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="ContainerObject", mappedBy="container", cascade={"persist", "remove"})
     */
    protected $objects;

    /**
     * ProcessContainer constructor.
     */
    public function __construct()
    {
        $this->objects = new ArrayCollection();
    }

    /**
     * Return Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id to this object
     *
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Return ObjectType
     *
     * @return Collection
     */
    public function getObjects()
    {
        return $this->objects;
    }

    /**
     * Set ObjectType to this object
     *
     * @param mixed $objects
     *
     * @return $this
     */
    public function setObjects($objects)
    {
        $this->objects = $objects;

        return $this;
    }

    public function addObject(ContainerObject $object)
    {
        $object->setContainer($this);
        $this->objects->add($object);

        return $this;
    }


}

