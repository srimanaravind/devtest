<?php

namespace App\Entity;

use App\Repository\SoftwareRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SoftwareRepository::class)]
class Software
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $ProductName = null;

    #[ORM\ManyToOne(targetEntity: Vendor::class)]
    #[ORM\JoinColumn(name: 'vendor_id', referencedColumnName: 'id', nullable: false)]
    private Vendor $vendor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->ProductName;
    }

    public function setProductName(string $ProductName): static
    {
        $this->ProductName = $ProductName;

        return $this;
    }

    public function getVendor(): Vendor
    {
        return $this->vendor;
    }

    public function setVendor(Vendor $vendor): Software
    {
        $this->vendor = $vendor;
        return $this;
    }
}
