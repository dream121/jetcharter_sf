<?php

namespace Proxies\__CG__\JetCharters\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AircraftModel extends \JetCharters\AppBundle\Entity\AircraftModel implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'name', 'hasLavatory', 'numberOfSeats', 'maxRange', 'maxAirSpeed', 'description', 'isFeaturedAC', 'featuredACRank', 'slug', 'type', 'charterAircraft', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\AircraftModel' . "\0" . 'images', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\AircraftModel' . "\0" . 'videos', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\AircraftModel' . "\0" . 'alternateNames');
        }

        return array('__isInitialized__', 'id', 'name', 'hasLavatory', 'numberOfSeats', 'maxRange', 'maxAirSpeed', 'description', 'isFeaturedAC', 'featuredACRank', 'slug', 'type', 'charterAircraft', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\AircraftModel' . "\0" . 'images', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\AircraftModel' . "\0" . 'videos', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\AircraftModel' . "\0" . 'alternateNames');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AircraftModel $proxy) {
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setHasLavatory($hasLavatory)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHasLavatory', array($hasLavatory));

        return parent::setHasLavatory($hasLavatory);
    }

    /**
     * {@inheritDoc}
     */
    public function getHasLavatory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHasLavatory', array());

        return parent::getHasLavatory();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumberOfSeats($numberOfSeats)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumberOfSeats', array($numberOfSeats));

        return parent::setNumberOfSeats($numberOfSeats);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberOfSeats()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumberOfSeats', array());

        return parent::getNumberOfSeats();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxRange($maxRange)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxRange', array($maxRange));

        return parent::setMaxRange($maxRange);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxRange()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxRange', array());

        return parent::getMaxRange();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxAirSpeed($maxAirSpeed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxAirSpeed', array($maxAirSpeed));

        return parent::setMaxAirSpeed($maxAirSpeed);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxAirSpeed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxAirSpeed', array());

        return parent::getMaxAirSpeed();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsFeaturedAC($isFeaturedAC)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsFeaturedAC', array($isFeaturedAC));

        return parent::setIsFeaturedAC($isFeaturedAC);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsFeaturedAC()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsFeaturedAC', array());

        return parent::getIsFeaturedAC();
    }

    /**
     * {@inheritDoc}
     */
    public function setFeaturedACRank($featuredACRank)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFeaturedACRank', array($featuredACRank));

        return parent::setFeaturedACRank($featuredACRank);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeaturedACRank()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeaturedACRank', array());

        return parent::getFeaturedACRank();
    }

    /**
     * {@inheritDoc}
     */
    public function addCharterAircraft(\JetCharters\AppBundle\Entity\CharterAircraft $charterAircraft)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCharterAircraft', array($charterAircraft));

        return parent::addCharterAircraft($charterAircraft);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCharterAircraft(\JetCharters\AppBundle\Entity\CharterAircraft $charterAircraft)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCharterAircraft', array($charterAircraft));

        return parent::removeCharterAircraft($charterAircraft);
    }

    /**
     * {@inheritDoc}
     */
    public function getCharterAircraft()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCharterAircraft', array());

        return parent::getCharterAircraft();
    }

    /**
     * {@inheritDoc}
     */
    public function addImage(\JetCharters\AppBundle\Entity\AircraftModelImage $images)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addImage', array($images));

        return parent::addImage($images);
    }

    /**
     * {@inheritDoc}
     */
    public function removeImage(\JetCharters\AppBundle\Entity\AircraftModelImage $images)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeImage', array($images));

        return parent::removeImage($images);
    }

    /**
     * {@inheritDoc}
     */
    public function getImages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', array());

        return parent::getImages();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', array($slug));

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', array());

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function updateSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateSlug', array());

        return parent::updateSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function addVideo(\JetCharters\AppBundle\Entity\Video $videos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVideo', array($videos));

        return parent::addVideo($videos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVideo(\JetCharters\AppBundle\Entity\Video $videos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVideo', array($videos));

        return parent::removeVideo($videos);
    }

    /**
     * {@inheritDoc}
     */
    public function getVideos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideos', array());

        return parent::getVideos();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlternateNames($alternateNames)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlternateNames', array($alternateNames));

        return parent::setAlternateNames($alternateNames);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlternateNames()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlternateNames', array());

        return parent::getAlternateNames();
    }

}
