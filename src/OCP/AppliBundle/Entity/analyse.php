<?php

namespace OCP\AppliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * analyse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCP\AppliBundle\Entity\analyseRepository")
 */
class analyse
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
     * @var float
     *
     * @ORM\Column(name="h2o", type="float")
     */
    private $h2o;

    /**
     * @var float
     *
     * @ORM\Column(name="p2o5", type="float")
     */
    private $p2o5;

    /**
     * @var float
     *
     * @ORM\Column(name="mgo", type="float")
     */
    private $mgo;

    /**
     * @var float
     *
     * @ORM\Column(name="sio2", type="float")
     */
    private $sio2;

    /**
     * @var float
     *
     * @ORM\Column(name="cl", type="float")
     */
    private $cl;

    /**
     * @var float
     *
     * @ORM\Column(name="cd", type="float")
     */
    private $cd;


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
     * Set h2o
     *
     * @param float $h2o
     * @return float
     */
    public function setH2o($h2o)
    {
        $this->h2o = $h2o;

        return $this;
    }

    /**
     * Get h2o
     *
     * @return float 
     */
    public function getH2o()
    {
        return $this->h2o;
    }

    /**
     * Set p2o5
     *
     * @param float $p2o5
     * @return analyse
     */
    public function setP2o5($p2o5)
    {
        $this->p2o5 = $p2o5;

        return $this;
    }

    /**
     * Get p2o5
     *
     * @return float 
     */
    public function getP2o5()
    {
        return $this->p2o5;
    }

    /**
     * Set mgo
     *
     * @param float $mgo
     * @return analyse
     */
    public function setMgo($mgo)
    {
        $this->mgo = $mgo;

        return $this;
    }

    /**
     * Get mgo
     *
     * @return float 
     */
    public function getMgo()
    {
        return $this->mgo;
    }

    /**
     * Set sio2
     *
     * @param float $sio2
     * @return analyse
     */
    public function setSio2($sio2)
    {
        $this->sio2 = $sio2;

        return $this;
    }

    /**
     * Get sio2
     *
     * @return float 
     */
    public function getSio2()
    {
        return $this->sio2;
    }

    /**
     * Set cl
     *
     * @param float $cl
     * @return analyse
     */
    public function setCl($cl)
    {
        $this->cl = $cl;

        return $this;
    }

    /**
     * Get cl
     *
     * @return float 
     */
    public function getCl()
    {
        return $this->cl;
    }

    /**
     * Set cd
     *
     * @param float $cd
     * @return analyse
     */
    public function setCd($cd)
    {
        $this->cd = $cd;

        return $this;
    }

    /**
     * Get cd
     *
     * @return float 
     */
    public function getCd()
    {
        return $this->cd;
    }
}
