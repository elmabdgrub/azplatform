<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notificationfp
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Entity\NotificationfpRepository")
 */
class Notificationfp
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
     * @ORM\ManyToOne(targetEntity="FichierProjet")
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $fichierprojet;
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
     * @return Notificationp
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
     * @return Notificationp
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
     * @return Notificationp
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
     * @return Notificationp
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
     * @return Notificationp
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
     * Set fichierprojet
     *
     * @param \BackOfficeBundle\Entity\FichierProjet $fichierprojet
     * @return Notificationfp
     */
    public function setFichierprojet(FichierProjet $fichierprojet)
    {
        $this->fichierprojet = $fichierprojet;

        return $this;
    }

    /**
     * Get fichierprojet
     *
     * @return \BackOfficeBundle\Entity\FichierProjet 
     */
    public function getFichierprojet()
    {
        return $this->fichierprojet;
    }
}
