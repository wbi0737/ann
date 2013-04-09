<?php

namespace Proxies\__CG__\Wbi\ForumBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Domain extends \Wbi\ForumBundle\Entity\Domain implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setLabel($label)
    {
        $this->__load();
        return parent::setLabel($label);
    }

    public function getLabel()
    {
        $this->__load();
        return parent::getLabel();
    }

    public function addUnderdomain(\Wbi\ForumBundle\Entity\Underdomain $underdomain)
    {
        $this->__load();
        return parent::addUnderdomain($underdomain);
    }

    public function removeUnderdomain(\Wbi\ForumBundle\Entity\Underdomain $underdomain)
    {
        $this->__load();
        return parent::removeUnderdomain($underdomain);
    }

    public function getUnderdomains()
    {
        $this->__load();
        return parent::getUnderdomains();
    }

    public function addPost(\Wbi\ForumBundle\Entity\Posts $posts)
    {
        $this->__load();
        return parent::addPost($posts);
    }

    public function removePost(\Wbi\ForumBundle\Entity\Posts $posts)
    {
        $this->__load();
        return parent::removePost($posts);
    }

    public function getPosts()
    {
        $this->__load();
        return parent::getPosts();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'label', 'underdomains', 'posts');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}