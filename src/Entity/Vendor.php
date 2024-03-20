<?php

namespace App\Entity;

use App\Repository\VendorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VendorRepository::class)]
class Vendor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $VendorName = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVendorName(): ?string
    {
        return $this->VendorName;
    }

    public function setVendorName(string $VendorName): static
    {
        $this->VendorName = $VendorName;

        return $this;
    }
}
