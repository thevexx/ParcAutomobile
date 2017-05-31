<?php

namespace gestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture")
 * @ORM\Entity(repositoryClass="gestionBundle\Repository\VoitureRepository")
 */
class Voiture
{

	/**
	 * @ORM\ManyToOne(targetEntity="Modele", inversedBy="Voitures")
	 * @ORM\JoinColumn(name="modeleId", referencedColumnName="id")
	 */
	private $modeleId;
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
     * @ORM\Column(name="Serie", type="string", length=255, nullable=true)
     */
    private $serie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCir", type="date", nullable=true)
     */
    private $dateCir;

    /**
     * @var string
     *
     * @ORM\Column(name="Marque", type="string", length=255, nullable=true)
     */
    private $marque;


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
     * Set serie
     *
     * @param string $serie
     *
     * @return Voiture
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set dateCir
     *
     * @param \DateTime $dateCir
     *
     * @return Voiture
     */
    public function setDateCir($dateCir)
    {
        $this->dateCir = $dateCir;

        return $this;
    }

    /**
     * Get dateCir
     *
     * @return \DateTime
     */
    public function getDateCir()
    {
        return $this->dateCir;
    }

    /**
     * Set marque
     *
     * @param string $marque
     *
     * @return Voiture
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modeleId
     *
     * @param \gestionBundle\Entity\Modele $modeleId
     *
     * @return Voiture
     */
    public function setModeleId(\gestionBundle\Entity\Modele $modeleId = null)
    {
        $this->modeleId = $modeleId;

        return $this;
    }

    /**
     * Get modeleId
     *
     * @return \gestionBundle\Entity\Modele
     */
    public function getModeleId()
    {
        return $this->modeleId;
    }
}
