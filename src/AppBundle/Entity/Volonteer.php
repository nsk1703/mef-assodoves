<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Volonteer
 *
 * @ORM\Table(name="volonteer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VolonteerRepository")
 */
class Volonteer
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
     * @ORM\JoinColumn(nullable=true)
     */
    private $image;
    

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * @var string
     *
     * @ORM\Column(name="email",  type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone",  type="string", length=255 , nullable=true)
     */
    private $phone;




    /**
     * @var string
     *
     * @ORM\Column(name="country",  type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="town",  type="string", length=255 , nullable=true)
     */
    private $town;


    /**
     * @var string
     *
     * @ORM\Column(name="work", type="string", length=255, nullable=true )
     */
    private $work;

    
    /**
     * @var boolean
     *
     * @ORM\Column(name="confirmation_status", type="boolean")
     */
    private $confirmation_status;



    /**
     * @var \DateTime
     * 
     * @ORM\COlumn(name="date",type="datetime") 
     */
    private $date;



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
     * Set name
     *
     * @param string $name
     *
     * @return Volonteer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }



    /**
     * Set email
     *
     * @param string $email
     *
     * @return Volonteer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Volonteer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Volonteer
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set town
     *
     * @param string $town
     *
     * @return Volonteer
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Volonteer
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set work
     *
     * @param string $work
     *
     * @return Volonteer
     */
    public function setWork($work)
    {
        $this->work = $work;

        return $this;
    }

    /**
     * Get work
     *
     * @return string
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     * Set confirmationStatus
     *
     * @param boolean $confirmationStatus
     *
     * @return Volonteer
     */
    public function setConfirmationStatus($confirmationStatus)
    {
        $this->confirmation_status = $confirmationStatus;

        return $this;
    }

    /**
     * Get confirmationStatus
     *
     * @return boolean
     */
    public function getConfirmationStatus()
    {
        return $this->confirmation_status;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Volonteer
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
     * @return Volonteer
     */
    public function setImage(\AppBundle\Entity\Image $image = null)
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
}
