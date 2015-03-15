<?php

namespace Proxies\__CG__\OCP\AppliBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class analyse extends \OCP\AppliBundle\Entity\analyse implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'OCP\\AppliBundle\\Entity\\analyse' . "\0" . 'id', '' . "\0" . 'OCP\\AppliBundle\\Entity\\analyse' . "\0" . 'h2o', '' . "\0" . 'OCP\\AppliBundle\\Entity\\analyse' . "\0" . 'p2o5', '' . "\0" . 'OCP\\AppliBundle\\Entity\\analyse' . "\0" . 'mgo', '' . "\0" . 'OCP\\AppliBundle\\Entity\\analyse' . "\0" . 'sio2', '' . "\0" . 'OCP\\AppliBundle\\Entity\\analyse' . "\0" . 'cl', '' . "\0" . 'OCP\\AppliBundle\\Entity\\analyse' . "\0" . 'cd');
        }

        return array('__isInitialized__', '' . "\0" . 'OCP\\AppliBundle\\Entity\\analyse' . "\0" . 'id', '' . "\0" . 'OCP\\AppliBundle\\Entity\\analyse' . "\0" . 'h2o', '' . "\0" . 'OCP\\AppliBundle\\Entity\\analyse' . "\0" . 'p2o5', '' . "\0" . 'OCP\\AppliBundle\\Entity\\analyse' . "\0" . 'mgo', '' . "\0" . 'OCP\\AppliBundle\\Entity\\analyse' . "\0" . 'sio2', '' . "\0" . 'OCP\\AppliBundle\\Entity\\analyse' . "\0" . 'cl', '' . "\0" . 'OCP\\AppliBundle\\Entity\\analyse' . "\0" . 'cd');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (analyse $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setH2o($h2o)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setH2o', array($h2o));

        return parent::setH2o($h2o);
    }

    /**
     * {@inheritDoc}
     */
    public function getH2o()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getH2o', array());

        return parent::getH2o();
    }

    /**
     * {@inheritDoc}
     */
    public function setP2o5($p2o5)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setP2o5', array($p2o5));

        return parent::setP2o5($p2o5);
    }

    /**
     * {@inheritDoc}
     */
    public function getP2o5()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getP2o5', array());

        return parent::getP2o5();
    }

    /**
     * {@inheritDoc}
     */
    public function setMgo($mgo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMgo', array($mgo));

        return parent::setMgo($mgo);
    }

    /**
     * {@inheritDoc}
     */
    public function getMgo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMgo', array());

        return parent::getMgo();
    }

    /**
     * {@inheritDoc}
     */
    public function setSio2($sio2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSio2', array($sio2));

        return parent::setSio2($sio2);
    }

    /**
     * {@inheritDoc}
     */
    public function getSio2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSio2', array());

        return parent::getSio2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCl($cl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCl', array($cl));

        return parent::setCl($cl);
    }

    /**
     * {@inheritDoc}
     */
    public function getCl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCl', array());

        return parent::getCl();
    }

    /**
     * {@inheritDoc}
     */
    public function setCd($cd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCd', array($cd));

        return parent::setCd($cd);
    }

    /**
     * {@inheritDoc}
     */
    public function getCd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCd', array());

        return parent::getCd();
    }

}