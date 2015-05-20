<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * FichierTache
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Entity\FichierTacheRepository")
 */
/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class FichierTache
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
     * @ORM\Column(name="Fichier", type="string", length=255, nullable=true)
     */
    private $fichier;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Datefichier", type="datetime")
     */
    private $datefichier;

    /**
     * @var integer
     *
     * @ORM\Column(name="Notified", type="integer")
     */
    private $notified;
    /**
     * @ORM\ManyToOne(targetEntity="Tache")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tache;
    /**
     * @ORM\ManyToOne(targetEntity="Collaborateur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $collaborateur;
    public function __construct()
  {
    $this->datefichier = new \Datetime();
  }
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $path;

    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'files';
    }
    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;

    private $temp;

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // check if we have an old image path
        if (isset($this->path)) {
            // store the old name to delete after the update
            $this->temp = $this->path;
            $this->path = null;
        } else {
            $this->path = 'initial';
        }
    }
    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
            // do whatever you want to generate a unique name
            $this->path =$this->getFile()->getClientOriginalName();
            $this->fichier=$this->getFile()->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->getFile()->move($this->getUploadRootDir(), $this->path);

        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->temp);
            // clear the temp image path
            $this->temp = null;
        }
        $this->file = null;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        $file = $this->getAbsolutePath();
        if ($file) {
            unlink($file);
        }
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
     * Set libelle
     *
     * @param string $libelle
     * @return FichierTache
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
     * Set fichier
     *
     * @param string $fichier
     * @return FichierTache
     */
    public function setFichier($fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return string 
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Set datefichier
     *
     * @param \DateTime $datefichier
     * @return FichierTache
     */
    public function setDatefichier($datefichier)
    {
        $this->datefichier = $datefichier;

        return $this;
    }

    /**
     * Get datefichier
     *
     * @return \DateTime 
     */
    public function getDatefichier()
    {
        return $this->datefichier;
    }

    /**
     * Set notified
     *
     * @param integer $notified
     * @return FichierTache
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
     * @return FichierTache
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
     * @return FichierTache
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
     * Set path
     *
     * @param string $path
     * @return FichierTache
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
}
