<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_debut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_fin = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $initial_price = null;



    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $max_price = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $prices = [];
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Vendeur", inversedBy="articles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    /**
     * @param \DateTimeInterface|null $date_debut
     */
    public function setDateDebut(?\DateTimeInterface $date_debut): void
    {
        $this->date_debut = $date_debut;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    /**
     * @param \DateTimeInterface|null $date_fin
     */
    public function setDateFin(?\DateTimeInterface $date_fin): void
    {
        $this->date_fin = $date_fin;
    }

    /**
     * @return string|null
     */
    public function getInitialPrice(): ?string
    {
        return $this->initial_price;
    }

    /**
     * @param string|null $initial_price
     */
    public function setInitialPrice(?string $initial_price): void
    {
        $this->initial_price = $initial_price;
    }

    public function getMaxPrice(): ?string
    {
        return $this->max_price;
    }

    public function setMaxPrice(?string $max_price): void
    {
        $this->max_price = $max_price;
    }

    public function getPrices(): array
    {
        return $this->prices;
    }

    public function setPrices(array $prices): void
    {
        $this->prices = $prices;
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }




}
