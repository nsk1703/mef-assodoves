<?php

namespace AppBundle\Entity;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Catalogue
 *
 * @ORM\Table(name="catalogue")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CatalogueRepository")
 */
class Catalogue
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
     * @Gedmo\Slug(fields={"name"})
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="name_en", type="string", length=255)
     */
    private $name_en;


    /**
     * @var \DateTime
     * 
     * @ORM\COlumn(name="date",type="datetime") 
     */
    private $date;




    /**
     * Get id
     *
     * @return int
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
     * @return Catalogue
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
     * Set nameEn
     *
     * @param string $nameEn
     *
     * @return Catalogue
     */
    public function setNameEn($name_en)
    {
        $this->name_en = $name_en;

        return $this;
    }

    /**
     * Get nameEn
     *
     * @return string
     */
    public function getNameEn()
    {
        return $this->name_en;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Catalogue
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }



    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Catalogue
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



}
