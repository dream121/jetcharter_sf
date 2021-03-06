<?php

namespace Proxies\__CG__\JetCharters\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class BlogPost extends \JetCharters\AppBundle\Entity\BlogPost implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'id', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'postTitle', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'postBody', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'postSlug', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'createdOn', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'updatedOn', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'isPublish', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'views', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'category', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'user', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'image');
        }

        return array('__isInitialized__', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'id', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'postTitle', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'postBody', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'postSlug', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'createdOn', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'updatedOn', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'isPublish', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'views', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'category', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'user', '' . "\0" . 'JetCharters\\AppBundle\\Entity\\BlogPost' . "\0" . 'image');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (BlogPost $proxy) {
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
    public function onPrePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPrePersist', array());

        return parent::onPrePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function onPreUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPreUpdate', array());

        return parent::onPreUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function clean($string)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clean', array($string));

        return parent::clean($string);
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
    public function setPostTitle($postTitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostTitle', array($postTitle));

        return parent::setPostTitle($postTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostTitle', array());

        return parent::getPostTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostBody($postBody)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostBody', array($postBody));

        return parent::setPostBody($postBody);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostBody()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostBody', array());

        return parent::getPostBody();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostSlug($postSlug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostSlug', array($postSlug));

        return parent::setPostSlug($postSlug);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostSlug', array());

        return parent::getPostSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedOn($createdOn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedOn', array($createdOn));

        return parent::setCreatedOn($createdOn);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedOn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedOn', array());

        return parent::getCreatedOn();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedOn($updatedOn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedOn', array($updatedOn));

        return parent::setUpdatedOn($updatedOn);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedOn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedOn', array());

        return parent::getUpdatedOn();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublish($isPublish)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublish', array($isPublish));

        return parent::setIsPublish($isPublish);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublish()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublish', array());

        return parent::getIsPublish();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\JetCharters\AppBundle\Entity\BlogPostCategory $category = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', array($category));

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', array());

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', array($image));

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', array());

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\JetCharters\AppBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setViews($views)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setViews', array($views));

        return parent::setViews($views);
    }

    /**
     * {@inheritDoc}
     */
    public function getViews()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getViews', array());

        return parent::getViews();
    }

}
