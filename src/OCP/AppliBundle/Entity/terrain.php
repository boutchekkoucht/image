<?php

namespace OCP\AppliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * terrain
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCP\AppliBundle\Entity\terrainRepository")
 */
class terrain
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
     * @var integer
     *
     * @ORM\Column(name="p1debut", type="integer")
     */
    private $p1debut;

    /**
     * @var integer
     *
     * @ORM\Column(name="p1fin", type="integer")
     */
    private $p1fin;
    /**
     * @var integer
     *
     * @ORM\Column(name="p2debut", type="integer")
     */
    private $p2debut;
    /**
     * @var integer
     *
     * @ORM\Column(name="p2fin", type="integer")
     */
    private $p2fin;

    /**
     * @var integer
     *
     * @ORM\Column(name="hauteur", type="integer")
     */
    private $hauteur;

    /**
     * @ORM\ManyToOne(targetEntity="OCP\AppliBundle\Entity\recu",cascade={"persist"})
     */
    private $recu;

    /**
     *
     * @ORM\ManyToOne(targetEntity="OCP\AppliBundle\Entity\Parc",cascade={"persist"})
     */
    private $Parc;
     /**
     * @var boolean
     *
     * @ORM\Column(name="des", type="boolean")
     */
    private $des;
    public function __construct() {
        $this->des=true;
        //$this->Parcs=new \Symfony\Component\Validator\Constraints\Collection();
        
    }

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
     * Set p1debut
     *
     * @param integer $p1debut
     * @return terrain
     */
    public function setP1debut($p1debut)
    {
        $this->p1debut = $p1debut;

        return $this;
    }

    /**
     * Get p1debut
     *
     * @return integer 
     */
    public function getP1debut()
    {
        return $this->p1debut;
    }

    /**
     * Set p1fin
     *
     * @param integer $p1fin
     * @return terrain
     */
    public function setP1fin($p1fin)
    {
        $this->p1fin = $p1fin;

        return $this;
    }

    /**
     * Get p1fin
     *
     * @return integer 
     */
    public function getP1fin()
    {
        return $this->p1fin;
    }

    /**
     * Set p2fin
     *
     * @param integer $p2fin
     * @return terrain
     */
    public function setP2fin($p2fin)
    {
        $this->p2fin = $p2fin;

        return $this;
    }

    /**
     * Get p2fin
     *
     * @return integer 
     */
    public function getP2fin()
    {
        return $this->p2fin;
    }

    /**
     * Set p2debut
     *
     * @param integer $p2debut
     * @return terrain
     */
    public function setP2debut($p2debut)
    {
        $this->p2debut = $p2debut;

        return $this;
    }

    /**
     * Get p2debut
     *
     * @return integer 
     */
    public function getP2debut()
    {
        return $this->p2debut;
    }

    /**
     * Set hauteur
     *
     * @param integer $hauteur
     * @return terrain
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get hauteur
     *
     * @return integer 
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    

    /**
     * Set recu
     *
     * @param \OCP\AppliBundle\Entity\recu $recu
     * @return terrain
     */
    public function setRecu(\OCP\AppliBundle\Entity\recu $recu = null)
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
     * Set Parc
     *
     * @param \OCP\AppliBundle\Entity\parc $parc
     * @return terrain
     */
    public function setParc(\OCP\AppliBundle\Entity\parc $parc = null)
    {
        $this->Parc = $parc;

        return $this;
    }

    /**
     * Get Parc
     *
     * @return \OCP\AppliBundle\Entity\parc 
     */
    public function getParc()
    {
        return $this->Parc;
    }

    /**
     * Set des
     *
     * @param boolean $des
     * @return terrain
     */
    public function setDes($des)
    {
        $this->des = $des;

        return $this;
    }

    /**
     * Get des
     *
     * @return boolean 
     */
    public function getDes()
    {
        return $this->des;
    }
}
