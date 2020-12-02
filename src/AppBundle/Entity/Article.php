<?php

namespace AppBundle\Entity;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticleRepository")
 */
class Article
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Image", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;
    
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Catalogue", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $catalogue;

    /**
     * @ORM\ManyToOne(targetEntity="User\UserBundle\Entity\User", inversedBy="article")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;	


    /**
     * @Gedmo\Slug(fields={"title"})
     * @ORM\column(length=128)
     */
    private $slug;

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="title_en", type="string", length=255)
     */
    private $title_en;


    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="content_en", type="text")
     */
    private $content_en;


    /**
     * @var \DateTime
     * 
     * @ORM\COlumn(name="date",type="datetime") 
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="seenCount", type="integer")
     */
    private $seenCount;


   /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean")
     */

    private $visible;

   /**
     * @var boolean
     *
     * @ORM\Column(name="softDelete", type="boolean", nullable=true)
     */

    private $softDelete;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }




    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set titleEn
     *
     * @param string $titleEn
     *
     * @return Article
     */
    public function setTitleEn($titleEn)
    {
        $this->title_en = $titleEn;

        return $this;
    }

    /**
     * Get titleEn
     *
     * @return string
     */
    public function getTitleEn()
    {
        return $this->title_en;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set contentEn
     *
     * @param string $contentEn
     *
     * @return Article
     */
    public function setContentEn($contentEn)
    {
        $this->content_en = $contentEn;

        return $this;
    }

    /**
     * Get contentEn
     *
     * @return string
     */
    public function getContentEn()
    {
        return $this->content_en;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set image
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return Article
     */
    public function setImage(\AppBundle\Entity\Image $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \AppBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

   
    /**
     * Set user
     *
     * @param \User\UserBundle\Entity\User $user
     *
     * @return Article
     */
    public function setUser(\User\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \User\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set catalogue
     *
     * @param \AppBundle\Entity\Catalogue $catalogue
     *
     * @return Article
     */
    public function setCatalogue(\AppBundle\Entity\Catalogue $catalogue)
    {
        $this->catalogue = $catalogue;

        return $this;
    }

    /**
     * Get catalogue
     *
     * @return \AppBundle\Entity\Catalogue
     */
    public function getCatalogue()
    {
        return $this->catalogue;
    }

    /**
     * Set seenCount.
     *
     * @param int $seenCount
     *
     * @return Article
     */
    public function setSeenCount($seenCount)
    {
        $this->seenCount = $seenCount;

        return $this;
    }

    /**
     * Get seenCount.
     *
     * @return int
     */
    public function getSeenCount()
    {
        return $this->seenCount;
    }

    /**
     * Set visible.
     *
     * @param bool $visible
     *
     * @return Article
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible.
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set softDelete.
     *
     * @param bool|null $softDelete
     *
     * @return Article
     */
    public function setSoftDelete($softDelete = null)
    {
        $this->softDelete = $softDelete;

        return $this;
    }

    /**
     * Get softDelete.
     *
     * @return bool|null
     */
    public function getSoftDelete()
    {
        return $this->softDelete;
    }
}
