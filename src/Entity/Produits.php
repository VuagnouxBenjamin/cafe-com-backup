<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitsRepository::class)
 */
class Produits
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
    private $description_courte_produit;

    /**
     * @ORM\Column(type="text")
     */
    private $description_longue_produit;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=2)
     */
    private $prix_achat_produit;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=2)
     */
    private $prix_vente_produit;

    /**
     * @ORM\Column(type="integer")
     */
    private $stock_disponible_produit;

    /**
     * @ORM\Column(type="integer")
     */
    private $stock_alert_produit;

    /**
     * @ORM\Column(type="integer")
     */
    private $poids_g_produit;

    /**
     * @ORM\ManyToOne(targetEntity=Categories::class, inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categories;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionCourteProduit(): ?string
    {
        return $this->description_courte_produit;
    }

    public function setDescriptionCourteProduit(string $description_courte_produit): self
    {
        $this->description_courte_produit = $description_courte_produit;

        return $this;
    }

    public function getDescriptionLongueProduit(): ?string
    {
        return $this->description_longue_produit;
    }

    public function setDescriptionLongueProduit(string $description_longue_produit): self
    {
        $this->description_longue_produit = $description_longue_produit;

        return $this;
    }

    public function getPrixAchatProduit(): ?string
    {
        return $this->prix_achat_produit;
    }

    public function setPrixAchatProduit(string $prix_achat_produit): self
    {
        $this->prix_achat_produit = $prix_achat_produit;

        return $this;
    }

    public function getPrixVenteProduit(): ?string
    {
        return $this->prix_vente_produit;
    }

    public function setPrixVenteProduit(string $prix_vente_produit): self
    {
        $this->prix_vente_produit = $prix_vente_produit;

        return $this;
    }

    public function getStockDisponibleProduit(): ?int
    {
        return $this->stock_disponible_produit;
    }

    public function setStockDisponibleProduit(int $stock_disponible_produit): self
    {
        $this->stock_disponible_produit = $stock_disponible_produit;

        return $this;
    }

    public function getStockAlertProduit(): ?int
    {
        return $this->stock_alert_produit;
    }

    public function setStockAlertProduit(int $stock_alert_produit): self
    {
        $this->stock_alert_produit = $stock_alert_produit;

        return $this;
    }

    public function getPoidsGProduit(): ?int
    {
        return $this->poids_g_produit;
    }

    public function setPoidsGProduit(int $poids_g_produit): self
    {
        $this->poids_g_produit = $poids_g_produit;

        return $this;
    }

    public function getCategories(): ?Categories
    {
        return $this->categories;
    }

    public function setCategories(Categories $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

}
