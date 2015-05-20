<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hebergement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Entity\HebergementRepository")
 */
class Hebergement
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
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Datecreation", type="datetime")
     */
    private $datecreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Dateexpiration", type="datetime")
     */
    private $dateexpiration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Daterenouv", type="datetime", nullable=true)
     */
    private $daterenouv;
    /**
     * @var integer
     *
     * @ORM\Column(name="Notified", type="integer",nullable=true)
     */
    private $notified;
    /**
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;
    
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
     * Set nom
     *
     * @param string $nom
     * @return Hebergement
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Hebergement
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Hebergement
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set dateexpiration
     *
     * @param \DateTime $dateexpiration
     * @return Hebergement
     */
    public function setDateexpiration($dateexpiration)
    {
        $this->dateexpiration = $dateexpiration;

        return $this;
    }

    /**
     * Get dateexpiration
     *
     * @return \DateTime 
     */
    public function getDateexpiration()
    {
        return $this->dateexpiration;
    }

    /**
     * Set daterenouv
     *
     * @param \DateTime $daterenouv
     * @return Hebergement
     */
    public function setDaterenouv($daterenouv)
    {
        $this->daterenouv = $daterenouv;

        return $this;
    }

    /**
     * Get daterenouv
     *
     * @return \DateTime 
     */
    public function getDaterenouv()
    {
        return $this->daterenouv;
    }

    /**
     * Set client
     *
     * @param \BackOfficeBunlde\Entity\Client $client
     * @return Hebergement
     */
    public function setClient(Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \BackOfficeBunlde\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set notified
     *
     * @param integer $notified
     * @return Hebergement
     */
    public function setNotified($notified)
    {
        $this->notified = $notified;

        return $this;
    }

    /**
     * Get notified
     *
     * @return integer 
     */
    public function getNotified()
    {
        return $this->notified;
    }
}
