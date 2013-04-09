<?php

namespace Wbi\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wbi\ForumBundle\Entity\Type
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Wbi\ForumBundle\Entity\TypeRepository")
 */
class Type
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $labeltype
     *
     * @ORM\Column(name="labeltype", type="string", length=255)
     */
    private $labeltype;

          /**
	   * @ORM\ManyToOne(targetEntity="Wbi\ForumBundle\Entity\Underdomain", inversedBy="types")
	   * @ORM\JoinColumn(nullable=false)
	   */
	  private $underdomain;
   
          /**
            * @ORM\OneToMany(targetEntity="Wbi\ForumBundle\Entity\Posts", mappedBy="type")
            */
	  private $posts; 
          
                
          
          
          
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
     * Set labeltype
     *
     * @param string $labeltype
     * @return Type
     */
    public function setLabeltype($labeltype)
    {
        $this->labeltype = $labeltype;
    
        return $this;
    }

    /**
     * Get labeltype
     *
     * @return string 
     */
    public function getLabeltype()
    {
        return $this->labeltype;
    }

    /**
     * Set underdomain
     *
     * @param Wbi\ForumBundle\Entity\Underdomain $underdomain
     * @return Type
     */
    public function setUnderdomain(\Wbi\ForumBundle\Entity\Underdomain $underdomain)
    {
        $this->underdomain = $underdomain;
    
        return $this;
    }

    /**
     * Get underdomain
     *
     * @return Wbi\ForumBundle\Entity\Underdomain 
     */
    public function getUnderdomain()
    {
        return $this->underdomain;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add posts
     *
     * @param Wbi\ForumBundle\Entity\Posts $posts
     * @return Type
     */
    public function addPost(\Wbi\ForumBundle\Entity\Posts $posts)
    {
        $this->posts[] = $posts;
        $posts->setType($this);
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
}