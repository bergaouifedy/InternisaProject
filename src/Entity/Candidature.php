<?php

namespace App\Entity;

use App\Repository\CandidatureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidatureRepository::class)
 */
class Candidature
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Offre",cascade={"all"}    )
     */
    private $offre;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Candidate",cascade={"all"}    )
     */
    private $candidat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOffre(): ?Offre
    {
        return $this->offre;
    }

    public function setOffre(?Offre $offre): self
    {
        $this->offre = $offre;

        return $this;
    }

    public function getCandidat(): ?Candidate
    {
        return $this->candidat;
    }

    public function setCandidat(?Candidate $candidat): self
    {
        $this->candidat = $candidat;

        return $this;
    }
}
