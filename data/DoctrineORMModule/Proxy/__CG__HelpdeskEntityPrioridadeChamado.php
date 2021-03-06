<?php

namespace DoctrineORMModule\Proxy\__CG__\Helpdesk\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class PrioridadeChamado extends \Helpdesk\Entity\PrioridadeChamado implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function populate(array $data)
    {
        $this->__load();
        return parent::populate($data);
    }

    public function getIdprioridade()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idprioridade"];
        }
        $this->__load();
        return parent::getIdprioridade();
    }

    public function setIdprioridade($idprioridade)
    {
        $this->__load();
        return parent::setIdprioridade($idprioridade);
    }

    public function getPrioridade()
    {
        $this->__load();
        return parent::getPrioridade();
    }

    public function setPrioridade($prioridade)
    {
        $this->__load();
        return parent::setPrioridade($prioridade);
    }

    public function getDias()
    {
        $this->__load();
        return parent::getDias();
    }

    public function setDias($dias)
    {
        $this->__load();
        return parent::setDias($dias);
    }

    public function getDescricao()
    {
        $this->__load();
        return parent::getDescricao();
    }

    public function setDescricao($descricao)
    {
        $this->__load();
        return parent::setDescricao($descricao);
    }

    public function getSubmit()
    {
        $this->__load();
        return parent::getSubmit();
    }

    public function setSubmit($submit)
    {
        $this->__load();
        return parent::setSubmit($submit);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'idprioridade', 'prioridade', 'dias', 'descricao');
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