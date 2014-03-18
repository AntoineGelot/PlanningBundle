<?php

namespace IUT\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DateHeure
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class DateHeure
{

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateHeure", type="datetime")
     */
    private $dateHeure;


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
     * Set dateHeure
     *
     * @param \DateTime $dateHeure
     * @return DateHeure
     */
    public function setDateHeure($dateHeure)
    {
        $this->dateHeure = $dateHeure;

        return $this;
    }

    /**
     * Get dateHeure
     *
     * @return \DateTime 
     */
    public function getDateHeure()
    {
        return $this->dateHeure;
    }
}
