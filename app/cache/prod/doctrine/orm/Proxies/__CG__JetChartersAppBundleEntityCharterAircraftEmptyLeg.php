<?php

namespace Proxies\__CG__\JetCharters\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CharterAircraftEmptyLeg extends \JetCharters\AppBundle\Entity\CharterAircraftEmptyLeg implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'aircraft', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'operator', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'id', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'origin', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'destination', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'fromDate', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'toDate', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'contact', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'phone', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'email', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'dateCreated');
        }

        return array('__isInitialized__', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'aircraft', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'operator', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'id', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'origin', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'destination', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'fromDate', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'toDate', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'contact', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'phone', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'email', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\CharterAircraftEmptyLeg' . "\0" . 'dateCreated');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CharterAircraftEmptyLeg $proxy) {
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
    public function setOrigin(\JetCharters\AppBundle\Entity\Airport $origin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrigin', array($origin));

        return parent::setOrigin($origin);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrigin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrigin', array());

        return parent::getOrigin();
    }

    /**
     * {@inheritDoc}
     */
    public function setDestination(\JetCharters\AppBundle\Entity\Airport $destination)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDestination', array($destination));

        return parent::setDestination($destination);
    }

    /**
     * {@inheritDoc}
     */
    public function getDestination()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDestination', array());

        return parent::getDestination();
    }

    /**
     * {@inheritDoc}
     */
    public function setFromDate($fromDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFromDate', array($fromDate));

        return parent::setFromDate($fromDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getFromDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFromDate', array());

        return parent::getFromDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setToDate($toDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToDate', array($toDate));

        return parent::setToDate($toDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getToDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToDate', array());

        return parent::getToDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setContact($contact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContact', array($contact));

        return parent::setContact($contact);
    }

    /**
     * {@inheritDoc}
     */
    public function getContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContact', array());

        return parent::getContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', array($phone));

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', array());

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreated($dateCreated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreated', array($dateCreated));

        return parent::setDateCreated($dateCreated);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreated', array());

        return parent::getDateCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setAircraft(\JetCharters\AppBundle\Entity\CharterAircraft $aircraft = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAircraft', array($aircraft));

        return parent::setAircraft($aircraft);
    }

    /**
     * {@inheritDoc}
     */
    public function getAircraft()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAircraft', array());

        return parent::getAircraft();
    }

    /**
     * {@inheritDoc}
     */
    public function setOperator(\JetCharters\AppBundle\Entity\Operator $operator = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOperator', array($operator));

        return parent::setOperator($operator);
    }

    /**
     * {@inheritDoc}
     */
    public function getOperator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOperator', array());

        return parent::getOperator();
    }

}
