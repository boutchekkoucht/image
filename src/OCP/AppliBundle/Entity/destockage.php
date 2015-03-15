<?php

namespace OCP\AppliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * destockage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCP\AppliBundle\Entity\destockageRepository")
 */
class destockage
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
     /**
     * @ORM\OneToOne(targetEntity="OCP\AppliBundle\Entity\analyse",cascade={"persist"})
     */
    private $Analyse;
    /**
     * @ORM\OneToMany(targetEntity="OCP\AppliBundle\Entity\Melange",mappedBy="id",cascade={"persist"})
     */
    private $melange;
    /**
     * @ORM\OneToOne(targetEntity="OCP\AppliBundle\Entity\CorDes",cascade={"persist"} )
     */
    private $coordonnee;
 /**
     * @var \boolean
     *
     * @ORM\Column(name="iswashed", type="boolean")
     * 
     */
    private $iswashed;

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
     * Set date
     *
     * @param \DateTime $date
     * @return destockage
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
     * Set Analyse
     *
     * @param \OCP\AppliBundle\Entity\Analyse $analyse
     * @return destockage
     */
    public function setAnalyse(\OCP\AppliBundle\Entity\analyse $analyse = null)
    {
        $this->Analyse = $analyse;

        return $this;
    }

    /**
     * Get Analyse
     *
     * @return \OCP\AppliBundle\Entity\Analyse 
     */
    public function getAnalyse()
    {
        return $this->Analyse;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recu = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add recu
     *
     * @param \OCP\AppliBundle\Entity\recu $recu
     * @return destockage
     */
    public function addRecu(\OCP\AppliBundle\Entity\recu $recu)
    {
        $this->recu[] = $recu;

        return $this;
    }

    /**
     * Remove recu
     *
     * @param \OCP\AppliBundle\Entity\recu $recu
     */
    public function removeRecu(\OCP\AppliBundle\Entity\recu $recu)
    {
        $this->recu->removeElement($recu);
    }

    /**
     * Get recu
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecu()
    {
        return $this->recu;
    }

    /**
     * Set coordonnee
     *
     * @param \OCP\AppliBundle\Entity\CorDes $coordonnee
     * @return destockage
     */
    public function setCoordonnee(\OCP\AppliBundle\Entity\CorDes $coordonnee = null)
    {
        $this->coordonnee = $coordonnee;

        return $this;
    }

    /**
     * Get coordonnee
     *
     * @return \OCP\AppliBundle\Entity\CorDes 
     */
    public function getCoordonnee()
    {
        return $this->coordonnee;
    }

    /**
     * Add melange
     *
     * @param \OCP\AppliBundle\Entity\Melange $melange
     * @return destockage
     */
    public function addMelange(\OCP\AppliBundle\Entity\Melange $melange)
    {
        $this->melange[] = $melange;

        return $this;
    }

    /**
     * Remove melange
     *
     * @param \OCP\AppliBundle\Entity\Melange $melange
     */
    public function removeMelange(\OCP\AppliBundle\Entity\Melange $melange)
    {
        $this->melange->removeElement($melange);
    }

    /**
     * Get melange
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMelange()
    {
        return $this->melange;
    }

    /**
     * Set iswashed
     *
     * @param boolean $iswashed
     * @return destockage
     */
    public function setIswashed($iswashed)
    {
        $this->iswashed = $iswashed;

        return $this;
    }

    /**
     * Get iswashed
     *
     * @return boolean 
     */
    public function getIswashed()
    {
        return $this->iswashed;
    }
}
