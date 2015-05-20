<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depense
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Entity\DepenseRepository")
 */
class Depense
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
     * @ORM\Column(name="Libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Datedepense", type="datetime")
     */
    private $datedepense;
    /**
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $projet;
    /**
     * @ORM\ManyToOne(targetEntity="TypeDepense")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typedepense;
    /**
     * @var float
     *
     * @ORM\Column(name="Montant", type="float")
     */
    private $montant;
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
     * Set libelle
     *
     * @param string $libelle
     * @return Depense
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Depense
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
     * Set datedepense
     *
     * @param \DateTime $datedepense
     * @return Depense
     */
    public function setDatedepense($datedepense)
    {
        $this->datedepense = $datedepense;

        return $this;
    }

    /**
     * Get datedepense
     *
     * @return \DateTime 
     */
    public function getDatedepense()
    {
        return $this->datedepense;
    }

    /**
     * Set projet
     *
     * @param \BackOfficeBunlde\Entity\Projet $projet
     * @return Depense
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
     * Set typedepense
     *
     * @param \BackOfficeBunlde\Entity\TypeDepense $typedepense
     * @return Depense
     */
    public function setTypedepense(TypeDepense $typedepense)
    {
        $this->typedepense = $typedepense;

        return $this;
    }

    /**
     * Get typedepense
     *
     * @return \BackOfficeBunlde\Entity\TypeDepense 
     */
    public function getTypedepense()
    {
        return $this->typedepense;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Depense
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
}
