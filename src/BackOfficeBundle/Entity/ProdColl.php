<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProdColl
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Entity\ProdCollRepository")
 */
class ProdColl
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
     * @var \DateTime
     *
     * @ORM\Column(name="DateAffectation", type="datetime")
     */
    private $dateAffectation;
    /**
     * @ORM\ManyToOne(targetEntity="Tache")
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $tache;
    /**
     * @ORM\ManyToOne(targetEntity="Collaborateur")
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $collaborateur;
    /**
     * @var integer
     *
     * @ORM\Column(name="Notified", type="integer",nullable=true)
     */
    private $notified;
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
     * Set dateAffectation
     *
     * @param \DateTime $dateAffectation
     * @return ProdColl
     */
    public function setDateAffectation($dateAffectation)
    {
        $this->dateAffectation = $dateAffectation;

        return $this;
    }

    /**
     * Get dateAffectation
     *
     * @return \DateTime 
     */
    public function getDateAffectation()
    {
        return $this->dateAffectation;
    }

    /**
     * Set tache
     *
     * @param \BackOfficeBunlde\Entity\Tache $tache
     * @return ProdColl
     */
    public function setTache(Tache $tache)
    {
        $this->tache = $tache;

        return $this;
    }

    /**
     * Get tache
     *
     * @return \BackOfficeBunlde\Entity\Tache 
     */
    public function getTache()
    {
        return $this->tache;
    }

    /**
     * Set collaborateur
     *
     * @param \BackOfficeBunlde\Entity\Collaborateur $collaborateur
     * @return ProdColl
     */
    public function setCollaborateur(Collaborateur $collaborateur)
    {
        $this->collaborateur = $collaborateur;

        return $this;
    }

    /**
     * Get collaborateur
     *
     * @return \BackOfficeBunlde\Entity\Collaborateur 
     */
    public function getCollaborateur()
    {
        return $this->collaborateur;
    }

    /**
     * Set notified
     *
     * @param integer $notified
     * @return ProdColl
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
