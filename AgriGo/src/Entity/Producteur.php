<?php

namespace App\Entity;

use App\Repository\ProducteurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProducteurRepository::class)
 */
class Producteur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailProducteur;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $nomProducteur;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $prenomProducteur;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $nomRue;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $numRue;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $codePostal;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $villeProducteur;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $nomMagasin;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $numTelProducteur;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $imageProducteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMailProducteur(): ?string
    {
        return $this->mailProducteur;
    }

    public function setMailProducteur(string $mailProducteur): self
    {
        $this->mailProducteur = $mailProducteur;

        return $this;
    }

    public function getNomProducteur(): ?string
    {
        return $this->nomProducteur;
    }

    public function setNomProducteur(string $nomProducteur): self
    {
        $this->nomProducteur = $nomProducteur;

        return $this;
    }

    public function getPrenomProducteur(): ?string
    {
        return $this->prenomProducteur;
    }

    public function setPrenomProducteur(string $prenomProducteur): self
    {
        $this->prenomProducteur = $prenomProducteur;

        return $this;
    }

    public function getNomRue(): ?string
    {
        return $this->nomRue;
    }

    public function setNomRue(string $nomRue): self
    {
        $this->nomRue = $nomRue;

        return $this;
    }

    public function getNumRue(): ?string
    {
        return $this->numRue;
    }

    public function setNumRue(string $numRue): self
    {
        $this->numRue = $numRue;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVilleProducteur(): ?string
    {
        return $this->villeProducteur;
    }

    public function setVilleProducteur(string $villeProducteur): self
    {
        $this->villeProducteur = $villeProducteur;

        return $this;
    }

    public function getNomMagasin(): ?string
    {
        return $this->nomMagasin;
    }

    public function setNomMagasin(?string $nomMagasin): self
    {
        $this->nomMagasin = $nomMagasin;

        return $this;
    }

    public function getNumTelProducteur(): ?string
    {
        return $this->numTelProducteur;
    }

    public function setNumTelProducteur(?string $numTelProducteur): self
    {
        $this->numTelProducteur = $numTelProducteur;

        return $this;
    }

    public function getImageProducteur(): ?string
    {
        return $this->imageProducteur;
    }

    public function setImageProducteur(?string $imageProducteur): self
    {
        $this->imageProducteur = $imageProducteur;

        return $this;
    }

    public function __toString(){
        // to show the name of the Category in the select
        return $this->getNomProducteur();
        // to show the id of the Category in the select
        // return $this->id;
    }
}
