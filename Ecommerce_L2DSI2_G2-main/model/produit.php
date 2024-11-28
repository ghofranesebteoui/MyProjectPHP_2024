<?php
class Produit
{
    private int $id;
    private string $libelle;
    private float $prix;
    private int $qte;
    private string $desc;
    private string $image;
    private $promo;

    public function __construct($id, $libelle, $prix, $qte, $desc, $image, $promo)
    {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->qte = $qte;
        $this->desc = $desc;
        $this->image = $image;
        $this->promo = $promo;
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of libelle
     *
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @param string $libelle
     *
     * @return self
     */
    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of prix
     *
     * @return float
     */
    public function getPrix(): float
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @param float $prix
     *
     * @return self
     */
    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of qte
     *
     * @return int
     */
    public function getQte(): int
    {
        return $this->qte;
    }

    /**
     * Set the value of qte
     *
     * @param int $qte
     *
     * @return self
     */
    public function setQte(int $qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get the value of desc
     *
     * @return string
     */
    public function getDesc(): string
    {
        return $this->desc;
    }

    /**
     * Set the value of desc
     *
     * @param string $desc
     *
     * @return self
     */
    public function setDesc(string $desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get the value of image
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of promo
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set the value of promo
     */
    public function setPromo($promo): self
    {
        $this->promo = $promo;

        return $this;
    }
}
