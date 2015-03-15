<?php

namespace OCP\AppliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lavage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCP\AppliBundle\Entity\LavageRepository")
 */
class Lavage
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
     * @ORM\OneToMany(targetEntity="OCP\AppliBundle\Entity\destockage",mappedBy="date",cascade={"persist"})
     */
    private $destockage;

    /**
     * @ORM\OneToOne(targetEntity="OCP\AppliBundle\Entity\Analyse",cascade={"persist"})
     */
    private $analyse;


   

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
     * @return Lavage
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
     * Set destockage
     *
     * @param \OCP\AppliBundle\Entity\destockage $destockage
     * @return Lavage
     */
    public function setDestockage(\OCP\AppliBundle\Entity\destockage $destockage = null)
    {
        $this->destockage = $destockage;

        return $this;
    }

    /**
     * Get destockage
     *
     * @return \OCP\AppliBundle\Entity\destockage 
     */
    public function getDestockage()
    {
        return $this->destockage;
    }

    /**
     * Set analyse
     *
     * @param \OCP\AppliBundle\Entity\Analyse $analyse
     * @return Lavage
     */
    public function setAnalyse(\OCP\AppliBundle\Entity\Analyse $analyse = null)
    {
        $this->analyse = $analyse;

        return $this;
    }

    /**
     * Get analyse
     *
     * @return \OCP\AppliBundle\Entity\Analyse 
     */
    public function getAnalyse()
    {
        return $this->analyse;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->destockage = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add destockage
     *
     * @param \OCP\AppliBundle\Entity\destockage $destockage
     * @return Lavage
     */
    public function addDestockage(\OCP\AppliBundle\Entity\destockage $destockage)
    {
        $this->destockage[] = $destockage;

        return $this;
    }

    /**
     * Remove destockage
     *
     * @param \OCP\AppliBundle\Entity\destockage $destockage
     */
    public function removeDestockage(\OCP\AppliBundle\Entity\destockage $destockage)
    {
        $this->destockage->removeElement($destockage);
    }
}
