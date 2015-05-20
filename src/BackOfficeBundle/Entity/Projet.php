<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Entity\ProjetRepository")
 */
class Projet
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
     * @ORM\Column(name="Datedebut", type="datetime")
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Datefin", type="datetime")
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="Datelivraison", type="datetime")
     */
    private $datelivraison;

    /**
     * @var float
     *
     * @ORM\Column(name="Montant", type="float")
     */
    private $montant;

    /**
   * @ORM\ManyToOne(targetEntity="StatutProjet")
   * @ORM\JoinColumn(nullable=false)
   */
  private $statutprojet;

   /**
   * @ORM\ManyToOne(targetEntity="TypeProjet")
   * @ORM\JoinColumn(nullable=false)
   */
  private $typeprojet;

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
     * Set titre
     *
     * @param string $titre
     * @return Projet
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
     * @return Projet
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
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Projet
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
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Projet
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set datelivraison
     *
     * @param string $datelivraison
     * @return Projet
     */
    public function setDatelivraison($datelivraison)
    {
        $this->datelivraison = $datelivraison;

        return $this;
    }

    /**
     * Get datelivraison
     *
     * @return string 
     */
    public function getDatelivraison()
    {
        return $this->datelivraison;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Projet
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set statutprojet
     *
     * @param \BackOfficeBunlde\Entity\StatutProjet $statutprojet
     * @return Projet
     */
    public function setStatutprojet(StatutProjet $statutprojet)
    {
        $this->statutprojet = $statutprojet;

        return $this;
    }

    /**
     * Get statutprojet
     *
     * @return \BackOfficeBunlde\Entity\StatutProjet 
     */
    public function getStatutprojet()
    {
        return $this->statutprojet;
    }

    /**
     * Set typeprojet
     *
     * @param \BackOfficeBunlde\Entity\TypeProjet $typeprojet
     * @return Projet
     */
    public function setTypeprojet(TypeProjet $typeprojet)
    {
        $this->typeprojet = $typeprojet;

        return $this;
    }

    /**
     * Get typeprojet
     *
     * @return \BackOfficeBunlde\Entity\TypeProjet 
     */
    public function getTypeprojet()
    {
        return $this->typeprojet;
    }

    /**
     * Set client
     *
     * @param \BackOfficeBunlde\Entity\Client $client
     * @return Projet
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
}
