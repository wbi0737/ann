<?php

namespace Wbi\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wbi\ForumBundle\Entity\Underdomain
 *
 * @ORM\Table(name="underdomain")
 * @ORM\Entity
 */
class Underdomain
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $label
     *
     * @ORM\Column(name="label", type="string", length=45, nullable=true)
     */
    private $label;

 
	/**
	   * @ORM\ManyToOne(targetEntity="Wbi\ForumBundle\Entity\Domain", inversedBy="underdomains")
	   * @ORM\JoinColumn(nullable=false)
	   */
	  private $domain;
  
          /**
            * @ORM\OneToMany(targetEntity="Wbi\ForumBundle\Entity\Type", mappedBy="underdomain")
            */
           private $types; // Ici underdomains prend un « s », car un underdomain a plusieurs types !
          
	  /**
        * @ORM\OneToMany(targetEntity="Wbi\ForumBundle\Entity\Posts", mappedBy="underdomain")
        */
	  private $posts; // Ici commentaires prend un "s", car un article a plusieurs commentaires !

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
     * Set label
     *
     * @param string $label
     * @return Underdomain
     */
    public function setLabel($label)
    {
        $this->label = $label;
    
        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

 

    /**
     * Set domain
     *
     * @param Wbi\ForumBundle\Entity\Domain $domain
     * @return Underdomain
     */
    public function setDomain(\Wbi\ForumBundle\Entity\Domain $domain)
    {
        $this->domain = $domain;
    
        return $this;
    }

    /**
     * Get domain
     *
     * @return Wbi\ForumBundle\Entity\Domain 
     */
    public function getDomain()
    {
        return $this->domain;
    }
   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
         $this->types = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add posts
     *
     * @param Wbi\ForumBundle\Entity\Posts $posts
     * @return Underdomain
     */
    public function addPost(\Wbi\ForumBundle\Entity\Posts $posts)
    {
        $this->posts[] = $posts;
       $posts->setUnderdomain($this);
        return $this;
    }

    /**
     * Remove posts
     *
     * @param Wbi\ForumBundle\Entity\Posts $posts
     */
    public function removePost(\Wbi\ForumBundle\Entity\Posts $posts)
    {
        $this->posts->removeElement($posts);
    }

    /**
     * Get posts
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Add types
     *
     * @param Wbi\ForumBundle\Entity\Type $types
     * @return Underdomain
     */
    public function addType(\Wbi\ForumBundle\Entity\Type $types)
    {
        $this->types[] = $types;
        $types->setUnderdomain($this);
        return $this;
    }

    /**
     * Remove types
     *
     * @param Wbi\ForumBundle\Entity\Type $types
     */
    public function removeType(\Wbi\ForumBundle\Entity\Type $types)
    {
        $this->types->removeElement($types);
    }

    /**
     * Get types
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTypes()
    {
        return $this->types;
    }
}