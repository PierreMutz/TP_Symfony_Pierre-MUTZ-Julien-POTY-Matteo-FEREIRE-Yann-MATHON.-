<?php

namespace locationVoitureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location", indexes={@ORM\Index(name="idVehicule", columns={"idVehicule"}), @ORM\Index(name="idClient", columns={"idClient"})})
 * @ORM\Entity(repositoryClass="locationVoitureBundle\Repository\LocationRepository")
 */
class Location
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFin", type="date")
     */
    private $dateFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEnregistrement", type="date")
     */
    private $dateEnregistrement;

    /**
     * @var string
     *
     * @ORM\Column(name="Tarif", type="decimal", precision=8, scale=2)
     */
    private $tarif;

    /**
     * @var \Vehicule
     *
     * @ORM\ManyToOne(targetEntity="Vehicule", cascade={"persist"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="idVehicule", referencedColumnName="id")
     * })
     */
    private $idVehicule;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client", cascade={"persist"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
     */
    private $idClient;


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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Location
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Location
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set dateEnregistrement
     *
     * @param \DateTime $dateEnregistrement
     *
     * @return Location
     */
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Get dateEnregistrement
     *
     * @return \DateTime
     */
    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }

    /**
     * Set tarif
     *
     * @param string $tarif
     *
     * @return Location
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return string
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set idVehicule
     *
     * @param integer $idVehicule
     *
     * @return Location
     */
    public function setIdVehicule($idVehicule)
    {
        $this->idVehicule = $idVehicule;

        return $this;
    }

    /**
     * Get idVehicule
     *
     * @return int
     */
    public function getIdVehicule()
    {
        return $this->idVehicule;
    }

    /**
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return Location
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}
