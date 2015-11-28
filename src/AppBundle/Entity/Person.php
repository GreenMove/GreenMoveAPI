<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A person.
 * 
 * @ORM\Entity
 */
class Person
{
    /**
     * @var int
     * 
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string The name of the person.
     *
     * @ORM\Column(nullable=false)
     * @Assert\Type(type="string")
     */
    private $name;
    /**
     * @var \DateTime Date of birth.
     * 
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date
     */
    private $birthDate;
    /**
     * @var string Email address.
     * 
     * @ORM\Column(nullable=false)
     * @Assert\Email
     */
    private $email;
    /**
     * @var string Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the name property.
     * 
     * @ORM\Column(nullable=false)
     * @Assert\Type(type="string")
     */
    private $familyName;
    /**
     * @var string User password.
     *
     * @ORM\Column(type="string", length=64, nullable=false)
     * @Assert\Type(type="string")
     */
    private $password;
    /**
     * @var \DateTime Date of registration.
     *
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date
     */
    private $registrationDate;
    /**
     * @var Stats The statistical of the person.
     *
     * @ORM\OneToOne(targetEntity="Stats", cascade={"persist"})
     */
    private $stats;

    public function __construct() {
        $this->stats = new Stats();
    }

    /**
     * Sets id.
     * 
     * @param int $id
     * 
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets id.
     * 
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets birthDate.
     * 
     * @param \DateTime $birthDate
     * 
     * @return $this
     */
    public function setBirthDate(\DateTime $birthDate = null)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Gets birthDate.
     * 
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets email.
     * 
     * @param string $email
     * 
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets email.
     * 
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets familyName.
     * 
     * @param string $familyName
     * 
     * @return $this
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;

        return $this;
    }

    /**
     * Gets familyName.
     * 
     * @return string
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * Sets registrationDate.
     *
     * @param \DateTime $registrationDate
     *
     * @return $this
     */
    public function setRegistrationDate(\DateTime $registrationDate = null)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Gets registrationDate.
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Sets password.
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Gets password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return Stats
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @param Stats $stats
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->stats = $stats;

        return $this;
    }

    /**
     * Sets name.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
