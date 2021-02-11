<?php

namespace App\Entity;

use App\Repository\VarieteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VarieteRepository::class)
 */
class Variete
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class, inversedBy="varietes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeVariete;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nomVariete;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $imageVariete;


    /**
     * @ORM\ManyToOne(targetEntity=Producteur::class, inversedBy="varietes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $producteurVariete;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeVariete(): ?Produit
    {
        return $this->typeVariete;
    }

    public function setTypeVariete(?Produit $typeVariete): self
    {
        $this->typeVariete = $typeVariete;

        return $this;
    }

    public function getNomVariete(): ?string
    {
        return $this->nomVariete;
    }

    public function setNomVariete(string $nomVariete): self
    {
        $this->nomVariete = $nomVariete;

        return $this;
    }

    public function getImageVariete(): ?string
    {
        return $this->imageVariete;
    }

    public function setImageVariete(string $imageVariete): self
    {
        $this->imageVariete = $imageVariete;

        return $this;
    }



    public function getProducteurVariete(): ?Producteur
    {
        return $this->producteurVariete;
    }

    public function setProducteurVariete(?Producteur $producteurVariete): self
    {
        $this->producteurVariete = $producteurVariete;

        return $this;
    }
}
