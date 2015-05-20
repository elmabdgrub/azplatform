<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageTache
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Entity\MessageTacheRepository")
 */
class MessageTache
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
     * @ORM\ManyToOne(targetEntity="Tache")
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $tache;
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
     * @return MessageTache
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
     * @return MessageTache
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
     * @return MessageTache
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
     * Set tache
     *
     * @param \BackOfficeBunlde\Entity\Tache $tache
     * @return MessageTache
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
     * @return MessageTache
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
