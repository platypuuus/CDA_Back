<?php

namespace App\Entity;

use App\Repository\IngredientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IngredientRepository::class)]
class Ingredient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $naÃme = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $img_url = null;

    #[ORM\Column]
    private ?bool $is_public = null;

    #[ORM\Column]
    private ?float $alcohol_content = null;

    #[ORM\Column]
    private ?int $creator_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNaÃme(): ?string
    {
        return $this->naÃme;
    }

    public function setNaÃme(string $naÃme): self
    {
        $this->naÃme = $naÃme;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImgUrl(): ?string
    {
        return $this->img_url;
    }

    public function setImgUrl(?string $img_url): self
    {
        $this->img_url = $img_url;

        return $this;
    }

    public function isIsPublic(): ?bool
    {
        return $this->is_public;
    }

    public function setIsPublic(bool $is_public): self
    {
        $this->is_public = $is_public;

        return $this;
    }

    public function getAlcoholContent(): ?float
    {
        return $this->alcohol_content;
    }

    public function setAlcoholContent(float $alcohol_content): self
    {
        $this->alcohol_content = $alcohol_content;

        return $this;
    }

    public function getCreatorId(): ?int
    {
        return $this->creator_id;
    }

    public function setCreatorId(int $creator_id): self
    {
        $this->creator_id = $creator_id;

        return $this;
    }
}
