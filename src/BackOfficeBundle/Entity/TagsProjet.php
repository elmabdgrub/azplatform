<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TagsProjet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Entity\TagsProjetRepository")
 */
class TagsProjet
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
     * @ORM\Column(name="tag", type="string", length=255)
     */
    private $tag;

    /**
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $projet;

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
     * Set tag
     *
     * @param string $tag
     * @return TagsProjet
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set projet
     *
     * @param \BackOfficeBundle\Entity\Projet $projet
     * @return TagsProjet
     */
    public function setProjet(Projet $projet)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \BackOfficeBundle\Entity\Projet 
     */
    public function getProjet()
    {
        return $this->projet;
    }
}
