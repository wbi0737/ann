<?php

namespace Wbi\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wbi\ForumBundle\Entity\Posts
 *
 * @ORM\Table(name="posts")
 * @ORM\Entity
 */
class Posts
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
     * @var string $postTitle
     *
     * @ORM\Column(name="post_title", type="string", length=45, nullable=true)
     */
    private $postTitle;

    /**
     * @var string $postDescription
     *
     * @ORM\Column(name="post_description", type="text", nullable=true)
     */
    private $postDescription;

    /**
     * @var string $postAdresse
     *
     * @ORM\Column(name="post_adresse", type="string", length=255, nullable=true)
     */
    private $postAdresse;
    
    /**
     * @var string $postPays
     *
     * @ORM\Column(name="post_pays", type="string", length=100, nullable=true)
     */
    private $postPays;

    /**
     * @var string $postVille
     *
     * @ORM\Column(name="post_ville", type="string", length=100, nullable=true)
     */
    private $postVille;
    
    /**
     * @var string $postRegion
     *
     * @ORM\Column(name="post_region", type="string", length=100, nullable=true)
     */
    private  $postRegion;
    
    
     /**
     * @var string $postPrice
     *
     * @ORM\Column(name="post_price", type="integer", nullable=true)
     */
    private  $postPrice;
    
    
    /**
     * @var string $postPhone
     *
     * @ORM\Column(name="post_phone", type="integer", nullable=true)
     */
    private  $postPhone;
    
    /**
     * @var \DateTime $postDate
     *
     * @ORM\Column(name="post_date", type="datetime", nullable=true)
     */
    private $postDate;

 
  /**
   * @ORM\ManyToOne(targetEntity="Wbi\UserBundle\Entity\user")
   * @ORM\JoinColumn(nullable=false)
   */
   private $user;
   
    /**
   * @ORM\ManyToOne(targetEntity="Wbi\ForumBundle\Entity\underdomain")
   * @ORM\JoinColumn(nullable=false)
   */
   private $underdomain;
   
          /**
	   * @ORM\ManyToOne(targetEntity="Wbi\ForumBundle\Entity\Type", inversedBy="posts")
	   * @ORM\JoinColumn(nullable=false)
	   */
	  private $type;
   

 
	 /**
        * @ORM\OneToMany(targetEntity="Wbi\ForumBundle\Entity\Comments", mappedBy="posts")
        */
	  private $comments; 

	 /**
	   * @ORM\ManyToOne(targetEntity="Wbi\ForumBundle\Entity\Domain", inversedBy="posts")
	   * @ORM\JoinColumn(nullable=false)
	   */
	  private $domain;
   
	
	
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
     * Set postTitle
     *
     * @param string $postTitle
     * @return Posts
     */
    public function setPostTitle($postTitle)
    {
        $this->postTitle = $postTitle;
    
        return $this;
    }

    /**
     * Get postTitle
     *
     * @return string 
     */
    public function getPostTitle()
    {
        return $this->postTitle;
    }

    

    /**
     * Set postDate
     *
     * @param \DateTime $postDate
     * @return Posts
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;
    
        return $this;
    }

    /**
     * Get postDate
     *
     * @return \DateTime 
     */
    public function getPostDate()
    {
        return $this->postDate;
    }


    /**
     * Set user
     *
     * @param Wbi\UserBundle\Entity\user $user
     * @return Posts
     */
    public function setUser(\Wbi\UserBundle\Entity\user $user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return Wbi\UserBundle\Entity\user 
     */
    public function getUser()
    {
        return $this->user;
    }
   


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->postDate = new \DateTime(); 
   }
    
    /**
     * Add comments
     *
     * @param Wbi\ForumBundle\Entity\Comments $comments
     * @return Posts
     */
    public function addComment(\Wbi\ForumBundle\Entity\Comments $comments)
    {
        $this->comments[] = $comments;
        $comments->setPosts($this);
        return $this;
    }

    /**
     * Remove comments
     *
     * @param Wbi\ForumBundle\Entity\Comments $comments
     */
    public function removeComment(\Wbi\ForumBundle\Entity\Comments $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set postDescription
     *
     * @param string $postDescription
     * @return Posts
     */
    public function setPostDescription($postDescription)
    {
        $this->postDescription = $postDescription;
    
        return $this;
    }

    /**
     * Get postDescription
     *
     * @return string 
     */
    public function getPostDescription()
    {
        return $this->postDescription;
    }

    /**
     * Set postAdresse
     *
     * @param string $postAdresse
     * @return Posts
     */
    public function setPostAdresse($postAdresse)
    {
        $this->postAdresse = $postAdresse;
    
        return $this;
    }

    /**
     * Get postAdresse
     *
     * @return string 
     */
    public function getPostAdresse()
    {
        return $this->postAdresse;
    }

    /**
     * Set postPays
     *
     * @param string $postPays
     * @return Posts
     */
    public function setPostPays($postPays)
    {
        $this->postPays = $postPays;
    
        return $this;
    }

    /**
     * Get postPays
     *
     * @return string 
     */
    public function getPostPays()
    {
        return $this->postPays;
    }

    /**
     * Set postVille
     *
     * @param string $postVille
     * @return Posts
     */
    public function setPostVille($postVille)
    {
        $this->postVille = $postVille;
    
        return $this;
    }

    /**
     * Get postVille
     *
     * @return string 
     */
    public function getPostVille()
    {
        return $this->postVille;
    }

    /**
     * Set postRegion
     *
     * @param string $postRegion
     * @return Posts
     */
    public function setPostRegion($postRegion)
    {
        $this->postRegion = $postRegion;
    
        return $this;
    }

    /**
     * Get postRegion
     *
     * @return string 
     */
    public function getPostRegion()
    {
        return $this->postRegion;
    }

    /**
     * Set postPrice
     *
     * @param integer $postPrice
     * @return Posts
     */
    public function setPostPrice($postPrice)
    {
        $this->postPrice = $postPrice;
    
        return $this;
    }

    /**
     * Get postPrice
     *
     * @return integer 
     */
    public function getPostPrice()
    {
        return $this->postPrice;
    }

   

    /**
     * Set postPhone
     *
     * @param integer $postPhone
     * @return Posts
     */
    public function setPostPhone($postPhone)
    {
        $this->postPhone = $postPhone;
    
        return $this;
    }

    /**
     * Get postPhone
     *
     * @return integer 
     */
    public function getPostPhone()
    {
        return $this->postPhone;
    }

    /**
     * Set type
     *
     * @param Wbi\ForumBundle\Entity\Type $type
     * @return Posts
     */
    public function setType(\Wbi\ForumBundle\Entity\Type $type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return Wbi\ForumBundle\Entity\Type 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set underdomain
     *
     * @param Wbi\ForumBundle\Entity\underdomain $underdomain
     * @return Posts
     */
    public function setUnderdomain(\Wbi\ForumBundle\Entity\underdomain $underdomain)
    {
        $this->underdomain = $underdomain;
    
        return $this;
    }

    /**
     * Get underdomain
     *
     * @return Wbi\ForumBundle\Entity\underdomain 
     */
    public function getUnderdomain()
    {
        return $this->underdomain;
    }

  

    /**
     * Set domain
     *
     * @param Wbi\ForumBundle\Entity\Domain $domain
     * @return Posts
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
}