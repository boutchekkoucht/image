<?php

namespace OCP\AppliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorDes
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CorDes
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
     * @ORM\Column(name="a", type="float", length=255)
     */
    private $a;
    
    /**
     * @var float
     *
     * @ORM\Column(name="b", type="float", length=255)
     */
    private $b;
    
    
    /**
     * @var float
     *
     * @ORM\Column(name="c", type="float", length=255)
     */
    private $c;
    
    /**
     * @var float
     *
     * @ORM\Column(name="d", type="float", length=255)
     */
    private $d;
    
    /**
     * @var float
     *
     * @ORM\Column(name="e", type="float", length=255)
     */
    private $e;
    
    /**
     * @var float
     *
     * @ORM\Column(name="f", type="float", length=255)
     */
    private $f;
    
    
    /**
     * @var float
     *
     * @ORM\Column(name="g", type="float", length=255)
     */
    private $g;
    
    /**
     * @var float
     *
     * @ORM\Column(name="h", type="float", length=255)
     */
    private $h;   

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
     * Set a
     *
     * @param float $a
     * @return CorDes
     */
    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    /**
     * Get a
     *
     * @return float 
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * Set b
     *
     * @param float $b
     * @return CorDes
     */
    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }

    /**
     * Get b
     *
     * @return float 
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * Set c
     *
     * @param float $c
     * @return CorDes
     */
    public function setC($c)
    {
        $this->c = $c;

        return $this;
    }

    /**
     * Get c
     *
     * @return float 
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * Set d
     *
     * @param float $d
     * @return CorDes
     */
    public function setD($d)
    {
        $this->d = $d;

        return $this;
    }

    /**
     * Get d
     *
     * @return float 
     */
    public function getD()
    {
        return $this->d;
    }

    /**
     * Set e
     *
     * @param float $e
     * @return CorDes
     */
    public function setE($e)
    {
        $this->e = $e;

        return $this;
    }

    /**
     * Get e
     *
     * @return float 
     */
    public function getE()
    {
        return $this->e;
    }

    /**
     * Set f
     *
     * @param float $f
     * @return CorDes
     */
    public function setF($f)
    {
        $this->f = $f;

        return $this;
    }

    /**
     * Get f
     *
     * @return float 
     */
    public function getF()
    {
        return $this->f;
    }

    /**
     * Set g
     *
     * @param float $g
     * @return CorDes
     */
    public function setG($g)
    {
        $this->g = $g;

        return $this;
    }

    /**
     * Get g
     *
     * @return float 
     */
    public function getG()
    {
        return $this->g;
    }

    /**
     * Set h
     *
     * @param float $h
     * @return CorDes
     */
    public function setH($h)
    {
        $this->h = $h;

        return $this;
    }

    /**
     * Get h
     *
     * @return float 
     */
    public function getH()
    {
        return $this->h;
    }
}
