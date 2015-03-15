<?php

namespace OCP\AppliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCP\AppliBundle\Entity\ImageRepository")
 */
class Image
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    /**
     *
     * @ORM\OneToOne(targetEntity="OCP\AppliBundle\Entity\Stockactu")
     */
    private $stock;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Image
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Image
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set stock
     *
     * @param \OCP\AppliBundle\Entity\Stockactu $stock
     * @return Image
     */
    public function setStock(\OCP\AppliBundle\Entity\Stockactu $stock = null)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return \OCP\AppliBundle\Entity\Stockactu 
     */
    public function getStock()
    {
        return $this->stock;
    }
}
