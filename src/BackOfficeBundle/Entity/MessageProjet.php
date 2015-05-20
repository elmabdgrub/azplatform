<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageProjet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Entity\MessageProjetRepository")
 */
class MessageProjet
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
     * @ORM\Column(name="Message", type="text")
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Datemessage", type="datetime")
     */
    private $datemessage;

    /**
     * @var integer
     *
     * @ORM\Column(name="Notified", type="integer")
     */
    private $notified;
    /**
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $projet;
    /**
     * @ORM\ManyToOne(targetEntity="Collaborateur")
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE")
     */
    private $collaborateur;
    public function __construct()
  {
    $this->datemessage = new \Datetime();
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
     * Set message
     *
     * @param string $message
     * @return MessageProjet
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set datemessage
     *
     * @param \DateTime $datemessage
     * @return MessageProjet
     */
    public function setDatemessage($datemessage)
    {
        $this->datemessage = $datemessage;

        return $this;
    }

    /**
     * Get datemessage
     *
     * @return \DateTime 
     */
    public function getDatemessage()
    {
        return $this->datemessage;
    }

    /**
     * Set notified
     *
     * @param integer $notified
     * @return MessageProjet
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
     * Set projet
     *
     * @param \BackOfficeBunlde\Entity\Projet $projet
     * @return MessageProjet
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
     * Set collaborateur
     *
     * @param \BackOfficeBunlde\Entity\Collaborateur $collaborateur
     * @return MessageProjet
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
}
