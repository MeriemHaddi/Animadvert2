<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock", indexes={@ORM\Index(name="fk_stock_product_idx", columns={"product_idproduct"})})
 * @ORM\Entity
 */
class Stock
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idstock", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idstock;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="entrydate", type="date", nullable=true)
     */
    private $entrydate;

    /**
     * @var integer
     *
     * @ORM\Column(name="minalert", type="integer", nullable=true)
     */
    private $minalert;

    /**
     * @var \Product
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_idproduct", referencedColumnName="idproduct")
     * })
     */
    private $productproduct;



    /**
     * Set idstock
     *
     * @param integer $idstock
     *
     * @return Stock
     */
    public function setIdstock($idstock)
    {
        $this->idstock = $idstock;

        return $this;
    }

    /**
     * Get idstock
     *
     * @return integer
     */
    public function getIdstock()
    {
        return $this->idstock;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Stock
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set entrydate
     *
     * @param \DateTime $entrydate
     *
     * @return Stock
     */
    public function setEntrydate($entrydate)
    {
        $this->entrydate = $entrydate;

        return $this;
    }

    /**
     * Get entrydate
     *
     * @return \DateTime
     */
    public function getEntrydate()
    {
        return $this->entrydate;
    }

    /**
     * Set minalert
     *
     * @param integer $minalert
     *
     * @return Stock
     */
    public function setMinalert($minalert)
    {
        $this->minalert = $minalert;

        return $this;
    }

    /**
     * Get minalert
     *
     * @return integer
     */
    public function getMinalert()
    {
        return $this->minalert;
    }

    /**
     * Set productproduct
     *
     * @param \AppBundle\Entity\Product $productproduct
     *
     * @return Stock
     */
    public function setProductproduct(\AppBundle\Entity\Product $productproduct)
    {
        $this->productproduct = $productproduct;

        return $this;
    }

    /**
     * Get productproduct
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProductproduct()
    {
        return $this->productproduct;
    }
}
