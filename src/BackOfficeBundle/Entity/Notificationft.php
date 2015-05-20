<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notificationft
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Entity\NotificationftRepository")
 */
class Notificationft
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
     * @var integer
     *
     * @ORM\Column(name="notified", type="integer")
     */
    private $notified;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    /**
     * @ORM\ManyToOne(targetEntity="FichierTache")
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $fichiertache;
    /**
     * @ORM\ManyToOne(targetEntity="Collaborateur")
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE")
     */
    private $collaborateur;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Datenotif", type="datetime")
     */
    private $datenotif;


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
     * Set notified
     *
     * @param integer $notified
     * @return Notificationt
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

    /**
     * Set type
     *
     * @param integer $type
     * @return Notificationt
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Notificationt
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
     * Set collaborateur
     *
     * @param \BackOfficeBundle\Entity\Collaborateur $collaborateur
     * @return Notificationt
     */
    public function setCollaborateur(Collaborateur $collaborateur = null)
    {
        $this->collaborateur = $collaborateur;

        return $this;
    }

    /**
     * Get collaborateur
     *
     * @return \BackOfficeBundle\Entity\Collaborateur 
     */
    public function getCollaborateur()
    {
        return $this->collaborateur;
    }

    /**
     * Set datenotif
     *
     * @param \DateTime $datenotif
     * @return Notificationt
     */
    public function setDatenotif($datenotif)
    {
        $this->datenotif = $datenotif;

        return $this;
    }

    /**
     * Get datenotif
     *
     * @return \DateTime 
     */
    public function getDatenotif()
    {
        return $this->datenotif;
    }



    /**
     * Set fichiertache
     *
     * @param \BackOfficeBundle\Entity\FichierTache $fichiertache
     * @return Notificationft
     */
    public function setFichiertache(FichierTache $fichiertache)
    {
        $this->fichiertache = $fichiertache;

        return $this;
    }

    /**
     * Get fichiertache
     *
     * @return \BackOfficeBundle\Entity\FichierTache 
     */
    public function getFichiertache()
    {
        return $this->fichiertache;
    }
}
