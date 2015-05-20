<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tache
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Entity\TacheRepository")
 */
class Tache
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
     * @ORM\Column(name="Titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text")
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
     * @ORM\Column(name="Datedebut", type="datetime", nullable=true)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefinprevis", type="datetime")
     */
    private $datefinprevis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefinreel", type="datetime", nullable=true)
     */
    private $datefinreel;

    /**
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $projet;
    /**
     * @ORM\ManyToOne(targetEntity="StatutTache")
     * @ORM\JoinColumn(nullable=false)
     */
    private $statuttache;
    public function __construct()
  {
    $this->datecreation = new \Datetime();
  }


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
     * Set titre
     *
     * @param string $titre
     * @return Tache
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Tache
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
     * Set datemessage
     *
     * @param \DateTime $datecreation
     * @return Tache
     */
    public function setDatemessage($datecreation)
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
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Tache
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefinprevis
     *
     * @param \DateTime $datefinprevis
     * @return Tache
     */
    public function setDatefinprevis($datefinprevis)
    {
        $this->datefinprevis = $datefinprevis;

        return $this;
    }

    /**
     * Get datefinprevis
     *
     * @return \DateTime 
     */
    public function getDatefinprevis()
    {
        return $this->datefinprevis;
    }

    /**
     * Set datefinreel
     *
     * @param \DateTime $datefinreel
     * @return Tache
     */
    public function setDatefinreel($datefinreel)
    {
        $this->datefinreel = $datefinreel;

        return $this;
    }

    /**
     * Get datefinreel
     *
     * @return \DateTime 
     */
    public function getDatefinreel()
    {
        return $this->datefinreel;
    }
    

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Tache
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Set projet
     *
     * @param \BackOfficeBunlde\Entity\Projet $projet
     * @return Tache
     */
    public function setProjet(Projet $projet)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \BackOfficeBunlde\Entity\Projet 
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * Set statuttache
     *
     * @param \BackOfficeBunlde\Entity\StatutTache $statuttache
     * @return Tache
     */
    public function setStatuttache(StatutTache $statuttache)
    {
        $this->statuttache = $statuttache;

        return $this;
    }

    /**
     * Get statuttache
     *
     * @return \BackOfficeBunlde\Entity\StatutTache 
     */
    public function getStatuttache()
    {
        return $this->statuttache;
    }

}
