<?php

namespace User\UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="User\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
	/**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Article", mappedBy="user", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */

    private $article;










	public function __construct()
    {
        parent::__construct();
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();

        // Add role
        $this->addRole("ROLE_USER");
      
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
     * Add article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return User
     */
    public function addArticle(\AppBundle\Entity\Article $article)
    {
        $this->article[] = $article;

        return $this;
    }

    
}
