<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The  statistical of a person.
 *
 * @ORM\Entity
 */
class Stats
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
     * @var int The points earned by a person.
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $points = 0;
    /**
     * @var float The total km traveled by the person.
     *
     * @ORM\Column(type="decimal", precision=15, scale=2, nullable=false)
     */
    protected $totalKmTraveled = 0;
    /**
     * @var float The km traveled by the person on foot.
     *
     * @ORM\Column(type="decimal", precision=15, scale=2, nullable=false)
     */
    protected $kmWalk = 0;
    /**
     * @var float The km traveled by the person on bicycle.
     *
     * @ORM\Column(type="decimal", precision=15, scale=2, nullable=false)
     */
    protected $kmBicycle = 0;
    /**
     * @var float The km traveled by the person with other transport.
     *
     * @ORM\Column(type="decimal", precision=15, scale=2, nullable=false)
     */
    protected $kmOther = 0;
    /**
     * @var int The number of session do by the person.
     *
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\Type(type="integer")
     */
    protected $nbSession = 0;
    /**
     * @var float The longest session in km do by the person.
     *
     * @ORM\Column(type="decimal", precision=15, scale=2, nullable=false)
     */
    protected $longestSession = 0;
    /**
     * @var float The total of CO2 economised by the person.
     *
     * @ORM\Column(type="decimal", precision=15, scale=2, nullable=false)
     */
    protected $carbonEco = 0;

    /**
     * @var Person The owner of the stats.
     *
     * @ORM\OneToOne(targetEntity="Person", mappedBy="stats")
     */
    protected $owner;

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
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param int $points
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * @return float
     */
    public function getCarbonEco()
    {
        return $this->carbonEco;
    }

    /**
     * @param float $carbonEco
     *
     * @return $this
     */
    public function setCarbonEco($carbonEco)
    {
        $this->carbonEco = $carbonEco;

        return $this;
    }

    /**
     * @return float
     */
    public function getLongestSession()
    {
        return $this->longestSession;
    }

    /**
     * @param float $longestSession
     *
     * @return $this
     */
    public function setLongestSession($longestSession)
    {
        $this->longestSession = $longestSession;

        return $this;
    }

    /**
     * @return int
     */
    public function getNbSession()
    {
        return $this->nbSession;
    }

    /**
     * @param int $nbSession
     *
     * @return $this
     */
    public function setNbSession($nbSession)
    {
        $this->nbSession = $nbSession;

        return $this;
    }

    /**
     * @return float
     */
    public function getKmOther()
    {
        return $this->kmOther;
    }

    /**
     * @param float $kmOther
     *
     * @return $this
     */
    public function setKmOther($kmOther)
    {
        $this->kmOther = $kmOther;

        return $this;
    }

    /**
     * @return float
     */
    public function getKmBicycle()
    {
        return $this->kmBicycle;
    }

    /**
     * @param float $kmBicycle
     *
     * @return $this
     */
    public function setKmBicycle($kmBicycle)
    {
        $this->kmBicycle = $kmBicycle;

        return $this;
    }

    /**
     * @return float
     */
    public function getKmWalk()
    {
        return $this->kmWalk;
    }

    /**
     * @param float $kmWalk
     *
     * @return $this
     */
    public function setKmWalk($kmWalk)
    {
        $this->kmWalk = $kmWalk;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalKmTraveled()
    {
        return $this->totalKmTraveled;
    }

    /**
     * @param float $totalKmTraveled
     *
     * @return $this
     */
    public function setTotalKmTraveled($totalKmTraveled)
    {
        $this->totalKmTraveled = $totalKmTraveled;

        return $this;
    }

    /**
     * @return Person
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param Person $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }
}
