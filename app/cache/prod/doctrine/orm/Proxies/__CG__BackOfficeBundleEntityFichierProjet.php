<?php

namespace Proxies\__CG__\BackOfficeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class FichierProjet extends \BackOfficeBundle\Entity\FichierProjet implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'id', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'libelle', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'fichier', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'datefichier', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'notified', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'projet', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'collaborateur', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'path', 'file', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'temp');
        }

        return array('__isInitialized__', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'id', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'libelle', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'fichier', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'datefichier', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'notified', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'projet', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'collaborateur', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'path', 'file', '' . "\0" . 'BackOfficeBundle\\Entity\\FichierProjet' . "\0" . 'temp');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (FichierProjet $proxy) {
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
    public function getAbsolutePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsolutePath', array());

        return parent::getAbsolutePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebPath', array());

        return parent::getWebPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', array($file));

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', array());

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpload', array());

        return parent::preUpload();
    }

    /**
     * {@inheritDoc}
     */
    public function upload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', array());

        return parent::upload();
    }

    /**
     * {@inheritDoc}
     */
    public function removeUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUpload', array());

        return parent::removeUpload();
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
    public function setLibelle($libelle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelle', array($libelle));

        return parent::setLibelle($libelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelle', array());

        return parent::getLibelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setFichier($fichier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFichier', array($fichier));

        return parent::setFichier($fichier);
    }

    /**
     * {@inheritDoc}
     */
    public function getFichier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFichier', array());

        return parent::getFichier();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatefichier($datefichier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatefichier', array($datefichier));

        return parent::setDatefichier($datefichier);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatefichier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatefichier', array());

        return parent::getDatefichier();
    }

    /**
     * {@inheritDoc}
     */
    public function setNotified($notified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotified', array($notified));

        return parent::setNotified($notified);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotified', array());

        return parent::getNotified();
    }

    /**
     * {@inheritDoc}
     */
    public function setProjet(\BackOfficeBundle\Entity\Projet $projet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProjet', array($projet));

        return parent::setProjet($projet);
    }

    /**
     * {@inheritDoc}
     */
    public function getProjet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProjet', array());

        return parent::getProjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setCollaborateur(\BackOfficeBundle\Entity\Collaborateur $collaborateur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCollaborateur', array($collaborateur));

        return parent::setCollaborateur($collaborateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getCollaborateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCollaborateur', array());

        return parent::getCollaborateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', array($path));

        return parent::setPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', array());

        return parent::getPath();
    }

}
