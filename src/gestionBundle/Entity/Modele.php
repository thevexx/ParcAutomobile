<?php

namespace gestionBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="modele")
 * @ORM\Entity(repositoryClass="gestionBundle\Repository\ModeleRepository")
 */
class Modele
{

	/*
	 * @ORM\OneToMany(targetEntity="voiture",mappedBy="modelId")
	 */
	private $voitures;
	public function __construct() {
		$this->voitures = new ArrayCollection();
	}

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Libele", type="string", length=255, nullable=true)
     */
    private $libele;

    /**
     * @var string
     *
     * @ORM\Column(name="Pays", type="string", length=255, nullable=true)
     */
    private $pays;

	/**
	 * Modele constructor.
	 */



	/**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libele
     *
     * @param string $libele
     *
     * @return Modele
     */
    public function setLibele($libele)
    {
        $this->libele = $libele;

        return $this;
    }

    /**
     * Get libele
     *
     * @return string
     */
    public function getLibele()
    {
        return $this->libele;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Modele
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }
}
