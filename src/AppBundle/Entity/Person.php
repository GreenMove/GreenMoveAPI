<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A person.
 * 
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class Person extends BaseUser
{
    /**
     * @var int
     * 
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \DateTime Date of birth.
     * 
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date
     */
    protected $birthDate;

    /**
     * @var \DateTime Date of registration.
     *
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date
     */
    protected $registrationDate;
    /**
     * @var Stats The statistical of the person.
     *
     * @ORM\OneToOne(targetEntity="Stats", inversedBy="owner", cascade={"persist"}, fetch="EAGER")
     * @ORM\JoinColumn(name="stats_id", referencedColumnName="id")
     */
    protected $stats;

    public function __construct() {
        parent::__construct();
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
}
