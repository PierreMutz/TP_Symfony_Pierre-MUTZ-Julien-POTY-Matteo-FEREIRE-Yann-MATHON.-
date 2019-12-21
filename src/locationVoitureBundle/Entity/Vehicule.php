<?php

namespace locationVoitureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule", indexes={@ORM\Index(name="idAgence", columns={"idAgence"})})
 * @ORM\Entity(repositoryClass="locationVoitureBundle\Repository\VehiculeRepository")
 */
class Vehicule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Marque", type="string", length=45)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="Modele", type="string", length=45)
     */
    private $modele;

    /**
     * @var string
     *
     * @ORM\Column(name="Serie", type="string", length=45)
     */
    private $serie;

    /**
     * @var int
     *
     * @ORM\Column(name="Annee", type="smallint")
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="Categorie", type="string", length=45)
     */
    private $categorie;

    /**
     * @var int
     *
     * @ORM\Column(name="Kilometrage", type="bigint")
     */
    private $kilometrage;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat", type="string", length=45)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEnregistrement", type="date")
     */
    private $dateEnregistrement;

    /**
     * @var string
     *
     * @ORM\Column(name="Immatriculation", type="string", length=10)
     */
    private $immatriculation;

    /**
     * @var \Agence
     *
     * @ORM\ManyToOne(targetEntity="Agence", cascade={"persist"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="idAgence", referencedColumnName="id")
     * })
     *
     */
    private $idAgence;

    /**
     * @var int
     *
     * @ORM\Column(name="NbreDePlace", type="smallint")
    */
    private $nbreDePlace;

    /**
     * @var string
     *
     * @ORM\Column(name="Transmission", type="string", length=45)
     */
    private $transmission;

    /**
     * @var string
     *
     * @ORM\Column(name="Moteur", type="string", length=45)
     */
    private $moteur;


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
     * Set marque
     *
     * @param string $marque
     *
     * @return Vehicule
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
     * Set modele
     *
     * @param string $modele
     *
     * @return Vehicule
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set serie
     *
     * @param string $serie
     *
     * @return Vehicule
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
     * Set annee
     *
     * @param integer $annee
     *
     * @return Vehicule
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return int
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Vehicule
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set kilometrage
     *
     * @param integer $kilometrage
     *
     * @return Vehicule
     */
    public function setKilometrage($kilometrage)
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    /**
     * Get kilometrage
     *
     * @return int
     */
    public function getKilometrage()
    {
        return $this->kilometrage;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Vehicule
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set dateEnregistrement
     *
     * @param \DateTime $dateEnregistrement
     *
     * @return Vehicule
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
     * Set immatriculation
     *
     * @param string $immatriculation
     *
     * @return Vehicule
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    /**
     * Get immatriculation
     *
     * @return string
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set idAgence
     *
     * @param integer $idAgence
     *
     * @return Vehicule
     */
    public function setIdAgence($idAgence)
    {
        $this->idAgence = $idAgence;

        return $this;
    }

    /**
     * Get idAgence
     *
     * @return int
     */
    public function getIdAgence()
    {
        return $this->idAgence;
    }

    /**
     * Set nbreDePlace
     *
     * @param integer $nbreDePlace
     *
     * @return Vehicule
     */
    public function setNbreDePlace($nbreDePlace)
    {
        $this->nbreDePlace = $nbreDePlace;

        return $this;
    }

    /**
     * Get nbreDePlace
     *
     * @return int
     */
    public function getNbreDePlace()
    {
        return $this->nbreDePlace;
    }

    /**
     * Set transmission
     *
     * @param string $transmission
     *
     * @return Vehicule
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;

        return $this;
    }

    /**
     * Get transmission
     *
     * @return string
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * Set moteur
     *
     * @param string $moteur
     *
     * @return Vehicule
     */
    public function setMoteur($moteur)
    {
        $this->moteur = $moteur;

        return $this;
    }

    /**
     * Get moteur
     *
     * @return string
     */
    public function getMoteur()
    {
        return $this->moteur;
    }
}
