<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Pays
 *
 * @ORM\Table("country")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CountryRepository")
 */
class Country
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
     * @ORM\Column(name="iso", type="string", length=2)
     */
    private $iso;



    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    

    /**
     * @var string
     *
     * @ORM\Column(name="nicename", type="string", length=80)
     */
    private $nicename;


    /**
     * @var string
     *
     * @ORM\Column(name="iso3", type="string", length=3, nullable=true)
     */
    private $iso3;


    /**
     * @var string
     *
     * @ORM\Column(name="numcode", type="string", length=6)
     */
    private $numcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="phonecode", type="integer", length=3)
     */
    private $phonecode;




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
     * Set iso.
     *
     * @param string $iso
     *
     * @return Country
     */
    public function setIso($iso)
    {
        $this->iso = $iso;

        return $this;
    }

    /**
     * Get iso.
     *
     * @return string
     */
    public function getIso()
    {
        return $this->iso;
    }

    /**
     * Set nicename.
     *
     * @param string $nicename
     *
     * @return Country
     */
    public function setNicename($nicename)
    {
        $this->nicename = $nicename;

        return $this;
    }

    /**
     * Get nicename.
     *
     * @return string
     */
    public function getNicename()
    {
        return $this->nicename;
    }

    /**
     * Set numcode.
     *
     * @param string $numcode
     *
     * @return Country
     */
    public function setNumcode($numcode)
    {
        $this->numcode = $numcode;

        return $this;
    }

    /**
     * Get numcode.
     *
     * @return string
     */
    public function getNumcode()
    {
        return $this->numcode;
    }

    /**
     * Set phonecode.
     *
     * @param int $phonecode
     *
     * @return Country
     */
    public function setPhonecode($phonecode)
    {
        $this->phonecode = $phonecode;

        return $this;
    }

    /**
     * Get phonecode.
     *
     * @return int
     */
    public function getPhonecode()
    {
        return $this->phonecode;
    }

    /**
     * Set iso3.
     *
     * @param string $iso3
     *
     * @return Country
     */
    public function setIso3($iso3)
    {
        $this->iso3 = $iso3;

        return $this;
    }

    /**
     * Get iso3.
     *
     * @return string
     */
    public function getIso3()
    {
        return $this->iso3;
    }
}
