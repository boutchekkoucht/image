<?php

namespace OCP\AppliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sockactu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCP\AppliBundle\Entity\SotckactuRepository")
 */
class Stockactu
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
     *
     * @ORM\ManyToOne(targetEntity="OCP\AppliBundle\Entity\Parc")
     */
    private $parc;

   /**
     *
     * @ORM\OneToOne(targetEntity="OCP\AppliBundle\Entity\terrain")
     */
    private $terrain;

    /**
     * @var float
     *
     * @ORM\Column(name="coordonnee", type="float")
     */
    private $coordonnee;


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
     * Set coordonnee
     *
     * @param float $coordonnee
     * @return Stockactu
     */
    public function setCoordonnee($coordonnee)
    {
        $this->coordonnee = $coordonnee;

        return $this;
    }

    /**
     * Get coordonnee
     *
     * @return float 
     */
    public function getCoordonnee()
    {
        return $this->coordonnee;
    }

    /**
     * Set parc
     *
     * @param \OCP\AppliBundle\Entity\Parc $parc
     * @return Stockactu
     */
    public function setParc(\OCP\AppliBundle\Entity\Parc $parc = null)
    {
        $this->parc = $parc;

        return $this;
    }

    /**
     * Get parc
     *
     * @return \OCP\AppliBundle\Entity\Parc 
     */
    public function getParc()
    {
        return $this->parc;
    }

    /**
     * Set terrain
     *
     * @param \OCP\AppliBundle\Entity\terrain $terrain
     * @return Stockactu
     */
    public function setTerrain(\OCP\AppliBundle\Entity\terrain $terrain = null)
    {
        $this->terrain = $terrain;

        return $this;
    }

    /**
     * Get terrain
     *
     * @return \OCP\AppliBundle\Entity\terrain 
     */
    public function getTerrain()
    {
        return $this->terrain;
    }
}
