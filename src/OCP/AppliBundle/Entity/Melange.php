<?php

namespace OCP\AppliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Melange
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Melange
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
     * @ORM\ManyToOne(targetEntity="OCP\AppliBundle\Entity\terrain",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $terrain;
     /**
     * @ORM\ManyToOne(targetEntity="OCP\AppliBundle\Entity\destockage",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $des;

    /**
     * @var float
     *
     * @ORM\Column(name="pourcentage", type="float", length=255)
     */
    private $pourcentage;


   

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
     * Set pourcentage
     *
     * @param float $pourcentage
     * @return Melange
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    /**
     * Get pourcentage
     *
     * @return float 
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * Set recu
     *
     * @param \OCP\AppliBundle\Entity\recu $recu
     * @return Melange
     */
    public function setRecu(\OCP\AppliBundle\Entity\recu $recu)
    {
        $this->recu = $recu;

        return $this;
    }

    /**
     * Get recu
     *
     * @return \OCP\AppliBundle\Entity\recu 
     */
    public function getRecu()
    {
        return $this->recu;
    }

    /**
     * Set des
     *
     * @param \OCP\AppliBundle\Entity\destockage $des
     * @return Melange
     */
    public function setDes(\OCP\AppliBundle\Entity\destockage $des)
    {
        $this->des = $des;

        return $this;
    }

    /**
     * Get des
     *
     * @return \OCP\AppliBundle\Entity\destockage 
     */
    public function getDes()
    {
        return $this->des;
    }

    /**
     * Set terrain
     *
     * @param \OCP\AppliBundle\Entity\terrain $terrain
     * @return Melange
     */
    public function setTerrain(\OCP\AppliBundle\Entity\terrain $terrain)
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
