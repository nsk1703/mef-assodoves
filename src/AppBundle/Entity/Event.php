<?php

namespace AppBundle\Entity;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
 */
class Event
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Image", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;
    

    /**
     * @ORM\ManyToOne(targetEntity="User\UserBundle\Entity\User", inversedBy="event")
     * @ORM\JoinColumn(nullable=true)
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
     * @var integer
     *
     * @ORM\Column(name="recalCountdownWeeks", type="integer", length=255)
     */
    private $recalCountdownWeeks;


    /**
     * @var \Date
     * 
     * @ORM\COlumn(name="date_begin",type="date") 
     */
    private $date_begin;    


    /**
     * @var \Date
     * 
     * @ORM\COlumn(name="date_end",type="date") 
     */
    private $date_end;    


    /**
     * @var \DateTime
     * 
     * @ORM\COlumn(name="date",type="datetime") 
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="emailCatchFormDisplay", type="boolean")
     */
    private $emailCatchFormDisplay;





    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set slug.
     *
     * @param string $slug
     *
     * @return Event
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Event
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set titleEn.
     *
     * @param string $titleEn
     *
     * @return Event
     */
    public function setTitleEn($titleEn)
    {
        $this->title_en = $titleEn;

        return $this;
    }

    /**
     * Get titleEn.
     *
     * @return string
     */
    public function getTitleEn()
    {
        return $this->title_en;
    }

    /**
     * Set content.
     *
     * @param string $content
     *
     * @return Event
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set contentEn.
     *
     * @param string $contentEn
     *
     * @return Event
     */
    public function setContentEn($contentEn)
    {
        $this->content_en = $contentEn;

        return $this;
    }

    /**
     * Get contentEn.
     *
     * @return string
     */
    public function getContentEn()
    {
        return $this->content_en;
    }

    /**
     * Set recalCountdownWeeks.
     *
     * @param int $recalCountdownWeeks
     *
     * @return Event
     */
    public function setRecalCountdownWeeks($recalCountdownWeeks)
    {
        $this->recalCountdownWeeks = $recalCountdownWeeks;

        return $this;
    }

    /**
     * Get recalCountdownWeeks.
     *
     * @return int
     */
    public function getRecalCountdownWeeks()
    {
        return $this->recalCountdownWeeks;
    }

    /**
     * Set dateBegin.
     *
     * @param \DateTime $dateBegin
     *
     * @return Event
     */
    public function setDateBegin($dateBegin)
    {
        $this->date_begin = $dateBegin;

        return $this;
    }

    /**
     * Get dateBegin.
     *
     * @return \DateTime
     */
    public function getDateBegin()
    {
        return $this->date_begin;
    }

    /**
     * Set dateEnd.
     *
     * @param \DateTime $dateEnd
     *
     * @return Event
     */
    public function setDateEnd($dateEnd)
    {
        $this->date_end = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd.
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set emailCatchFormDisplay.
     *
     * @param bool $emailCatchFormDisplay
     *
     * @return Event
     */
    public function setEmailCatchFormDisplay($emailCatchFormDisplay)
    {
        $this->emailCatchFormDisplay = $emailCatchFormDisplay;

        return $this;
    }

    /**
     * Get emailCatchFormDisplay.
     *
     * @return bool
     */
    public function getEmailCatchFormDisplay()
    {
        return $this->emailCatchFormDisplay;
    }

    /**
     * Set image.
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return Event
     */
    public function setImage(\AppBundle\Entity\Image $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return \AppBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set user.
     *
     * @param \User\UserBundle\Entity\User $user
     *
     * @return Event
     */
    public function setUser(\User\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \User\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
