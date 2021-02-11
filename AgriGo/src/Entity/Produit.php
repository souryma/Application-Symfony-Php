<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $typeProduit;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $imageProduit;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $categorieProduit;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionProduit;

    /**
     * @ORM\OneToMany(targetEntity=Variete::class, mappedBy="typeVariete")
     */
    private $varietes;

    public function __construct()
    {
        $this->varietes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeProduit(): ?string
    {
        return $this->typeProduit;
    }

    public function setTypeProduit(string $typeProduit): self
    {
        $this->typeProduit = $typeProduit;

        return $this;
    }

    public function getImageProduit(): ?string
    {
        return $this->imageProduit;
    }

    public function setImageProduit(string $imageProduit): self
    {
        $this->imageProduit = $imageProduit;

        return $this;
    }

    public function getCategorieProduit(): ?string
    {
        return $this->categorieProduit;
    }

    public function setCategorieProduit(string $categorieProduit): self
    {
        $this->categorieProduit = $categorieProduit;

        return $this;
    }

    public function getDescriptionProduit(): ?string
    {
        return $this->descriptionProduit;
    }

    public function setDescriptionProduit(string $descriptionProduit): self
    {
        $this->descriptionProduit = $descriptionProduit;

        return $this;
    }

    /**
     * @return Collection|Variete[]
     */
    public function getVarietes(): Collection
    {
        return $this->varietes;
    }

    public function addVariete(Variete $variete): self
    {
        if (!$this->varietes->contains($variete)) {
            $this->varietes[] = $variete;
            $variete->setTypeVariete($this);
        }

        return $this;
    }

    public function removeVariete(Variete $variete): self
    {
        if ($this->varietes->removeElement($variete)) {
            // set the owning side to null (unless already changed)
            if ($variete->getTypeVariete() === $this) {
                $variete->setTypeVariete(null);
            }
        }

        return $this;
    }

    public function __toString(){
        // to show the name of the Category in the select
        return $this->getTypeProduit();
        // to show the id of the Category in the select
        // return $this->id;
    }
}
