<?php

namespace OCP\AppliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * recu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCP\AppliBundle\Entity\recuRepository")
 */
class recu
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
     * @var integer
     *
     * @ORM\Column(name="tonnage", type="integer")
     */
    private $tonnage;

    /**
    
     * @ORM\ManyToOne(targetEntity="OCP\AppliBundle\Entity\train",cascade={"persist"})
     */
    private $train;

    /**

     * @ORM\OneToOne(targetEntity="OCP\AppliBundle\Entity\analyse",cascade={"persist"})
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
     * @return recu
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
     * Set tonnage
     *
     * @param integer $tonnage
     * @return recu
     */
    public function setTonnage($tonnage)
    {
        $this->tonnage = $tonnage;

        return $this;
    }

    /**
     * Get tonnage
     *
     * @return integer 
     */
    public function getTonnage()
    {
        return $this->tonnage;
    }


    /**
     * Set train
     *
     * @param \OCP\AppliBundle\Entity\train $train
     * @return recu
     */
    public function setTrain(\OCP\AppliBundle\Entity\train $train = null)
    {
        $this->train = $train;

        return $this;
    }

    /**
     * Get train
     *
     * @return \OCP\AppliBundle\Entity\train 
     */
    public function getTrain()
    {
        return $this->train;
    }

    /**
     * Set analyse
     *
     * @param \OCP\AppliBundle\Entity\analyse $analyse
     * @return recu
     */
    public function setAnalyse(\OCP\AppliBundle\Entity\analyse $analyse = null)
    {
        $this->analyse = $analyse;

        return $this;
    }

    /**
     * Get analyse
     *
     * @return \OCP\AppliBundle\Entity\analyse 
     */
    public function getAnalyse()
    {
        return $this->analyse;
    }
}
