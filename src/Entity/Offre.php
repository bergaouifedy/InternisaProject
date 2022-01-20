<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OffreRepository::class)
 */
class Offre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre;

     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lieu;

     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeContrat;

     /**
     * @ORM\Column(type="float", length=255, nullable=true)
     */
    private $salaire;

     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dureeExperience;

     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $niveauPoste;

     /**
     * @ORM\Column(type="date", length=255, nullable=true)
     */
    private $dateCreation;

     /**
     * @ORM\Column(type="integer", length=255, nullable=true)
     */
    private $nombrePostes;

     /**
     * @ORM\Column(type="date", length=255, nullable=true)
     */
    private $dateExpiration;

        /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Recruteur",inversedBy="offre")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Recruteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getTypeContrat(): ?string
    {
        return $this->typeContrat;
    }

    public function setTypeContrat(?string $typeContrat): self
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    public function getSalaire(): ?float
    {
        return $this->salaire;
    }

    public function setSalaire(?float $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getDureeExperience(): ?string
    {
        return $this->dureeExperience;
    }

    public function setDureeExperience(?string $dureeExperience): self
    {
        $this->dureeExperience = $dureeExperience;

        return $this;
    }

    public function getNiveauPoste(): ?string
    {
        return $this->niveauPoste;
    }

    public function setNiveauPoste(?string $niveauPoste): self
    {
        $this->niveauPoste = $niveauPoste;

        return $this;
    }

    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    public function setDateCreation($dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getNombrePostes(): ?int
    {
        return $this->nombrePostes;
    }

    public function setNombrePostes(?int $nombrePostes): self
    {
        $this->nombrePostes = $nombrePostes;

        return $this;
    }

    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    public function setDateExpiration($dateExpiration): self
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    public function getRecruteur(): ?Recruteur
    {
        return $this->Recruteur;
    }

    public function setRecruteur(?Recruteur $Recruteur): self
    {
        $this->Recruteur = $Recruteur;

        return $this;
    }
}
