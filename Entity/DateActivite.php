<?php

namespace IUT\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DateActivite
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class DateActivite
{
     /**
     * @orm:ManyToOne(targetEntity="Activite")
     * @orm:JoinColumn(name="idAct", referencedColumnName="id")
     */
    private $idAct;

	 /**
     * @orm:ManyToOne(targetEntity="DateHeure")
     * @orm:JoinColumn(name="dateHeureAct", referencedColumnName="dateHeure")
     */
     private $dateHeureAct;


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
     * Set idAct
     *
     * @param string $idAct
     * @return DateActivite
     */
    public function setIdAct($idAct)
    {
        $this->idAct = $idAct;

        return $this;
    }

    /**
     * Get idAct
     *
     * @return string 
     */
    public function getIdAct()
    {
        return $this->idAct;
    }

    /**
     * Set dateHeureAct
     *
     * @param \DateTime $dateHeureAct
     * @return DateActivite
     */
    public function setDateHeureAct($dateHeureAct)
    {
        $this->dateHeureAct = $dateHeureAct;

        return $this;
    }

    /**
     * Get dateHeureAct
     *
     * @return \DateTime 
     */
    public function getDateHeureAct()
    {
        return $this->dateHeureAct;
    }
}
