<?php

namespace IUT\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Utilisateur
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
     * @ORM\Column(name="NOM", type="string", length=20)
     */
    private $nOM;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=20)
     */
    private $pRENOM;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=50)
     */
    private $eMAIL;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=50)
     */
    private $pASSWORD;


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
     * Set nOM
     *
     * @param string $nOM
     * @return Utilisateur
     */
    public function setNOM($nOM)
    {
        $this->nOM = $nOM;

        return $this;
    }

    /**
     * Get nOM
     *
     * @return string 
     */
    public function getNOM()
    {
        return $this->nOM;
    }

    /**
     * Set pRENOM
     *
     * @param string $pRENOM
     * @return Utilisateur
     */
    public function setPRENOM($pRENOM)
    {
        $this->pRENOM = $pRENOM;

        return $this;
    }

    /**
     * Get pRENOM
     *
     * @return string 
     */
    public function getPRENOM()
    {
        return $this->pRENOM;
    }

    /**
     * Set eMAIL
     *
     * @param string $eMAIL
     * @return Utilisateur
     */
    public function setEMAIL($eMAIL)
    {
        $this->eMAIL = $eMAIL;

        return $this;
    }

    /**
     * Get eMAIL
     *
     * @return string 
     */
    public function getEMAIL()
    {
        return $this->eMAIL;
    }

    /**
     * Set pASSWORD
     *
     * @param string $pASSWORD
     * @return Utilisateur
     */
    public function setPASSWORD($pASSWORD)
    {
        $this->pASSWORD = $pASSWORD;

        return $this;
    }

    /**
     * Get pASSWORD
     *
     * @return string 
     */
    public function getPASSWORD()
    {
        return $this->pASSWORD;
    }
}
