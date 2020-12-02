<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Status
 *
 * @ORM\Table("status")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatusRepository")
 */
class Status
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    
  /**
     * @var boolean
     *
     * @ORM\Column(name="companyNameShow", type="boolean")
     */
    private $companyNameShow;


   /**
     * @var boolean
     *
     * @ORM\Column(name="companyWebsiteShow", type="boolean")
     */
    private $companyWebsiteShow;


   /**
     * @var boolean
     *
     * @ORM\Column(name="companyLogoShow", type="boolean")
     */

    private $companyLogoShow;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->getName();
    }



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Country
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
     * Set price
     *
     * @param integer $price
     *
     * @return Status
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set companyNameValid
     *
     * @param boolean $companyNameValid
     *
     * @return Status
     */
    public function setCompanyNameValid($companyNameValid)
    {
        $this->companyNameValid = $companyNameValid;

        return $this;
    }

    /**
     * Get companyNameValid
     *
     * @return boolean
     */
    public function getCompanyNameValid()
    {
        return $this->companyNameValid;
    }

    /**
     * Set companyLinkValid
     *
     * @param boolean $companyLinkValid
     *
     * @return Status
     */
    public function setCompanyLinkValid($companyLinkValid)
    {
        $this->companyLinkValid = $companyLinkValid;

        return $this;
    }

    /**
     * Get companyLinkValid
     *
     * @return boolean
     */
    public function getCompanyLinkValid()
    {
        return $this->companyLinkValid;
    }

    /**
     * Set companyLogoValid
     *
     * @param boolean $companyLogoValid
     *
     * @return Status
     */
    public function setCompanyLogoValid($companyLogoValid)
    {
        $this->companyLogoValid = $companyLogoValid;

        return $this;
    }

    /**
     * Get companyLogoValid
     *
     * @return boolean
     */
    public function getCompanyLogoValid()
    {
        return $this->companyLogoValid;
    }

    /**
     * Set companyNameShow.
     *
     * @param bool $companyNameShow
     *
     * @return Status
     */
    public function setCompanyNameShow($companyNameShow)
    {
        $this->companyNameShow = $companyNameShow;

        return $this;
    }

    /**
     * Get companyNameShow.
     *
     * @return bool
     */
    public function getCompanyNameShow()
    {
        return $this->companyNameShow;
    }

    /**
     * Set companyWebsiteShow.
     *
     * @param bool $companyWebsiteShow
     *
     * @return Status
     */
    public function setCompanyWebsiteShow($companyWebsiteShow)
    {
        $this->companyWebsiteShow = $companyWebsiteShow;

        return $this;
    }

    /**
     * Get companyWebsiteShow.
     *
     * @return bool
     */
    public function getCompanyWebsiteShow()
    {
        return $this->companyWebsiteShow;
    }

    /**
     * Set companyLogoShow.
     *
     * @param bool $companyLogoShow
     *
     * @return Status
     */
    public function setCompanyLogoShow($companyLogoShow)
    {
        $this->companyLogoShow = $companyLogoShow;

        return $this;
    }

    /**
     * Get companyLogoShow.
     *
     * @return bool
     */
    public function getCompanyLogoShow()
    {
        return $this->companyLogoShow;
    }
}
