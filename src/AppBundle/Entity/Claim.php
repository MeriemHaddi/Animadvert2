<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Claim
 *
 * @ORM\Table(name="claim", indexes={@ORM\Index(name="fk_claim_client1_idx", columns={"client_idclient"})})
 * @ORM\Entity
 */
class Claim
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idclaim", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idclaim;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="claimdate", type="datetime", nullable=true)
     */
    private $claimdate;

    /**
     * @var string
     *
     * @ORM\Column(name="object", type="string", length=45, nullable=true)
     */
    private $object;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var \Client
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_idclient", referencedColumnName="idclient")
     * })
     */
    private $clientclient;



    /**
     * Set idclaim
     *
     * @param integer $idclaim
     *
     * @return Claim
     */
    public function setIdclaim($idclaim)
    {
        $this->idclaim = $idclaim;

        return $this;
    }

    /**
     * Get idclaim
     *
     * @return integer
     */
    public function getIdclaim()
    {
        return $this->idclaim;
    }

    /**
     * Set claimdate
     *
     * @param \DateTime $claimdate
     *
     * @return Claim
     */
    public function setClaimdate($claimdate)
    {
        $this->claimdate = $claimdate;

        return $this;
    }

    /**
     * Get claimdate
     *
     * @return \DateTime
     */
    public function getClaimdate()
    {
        return $this->claimdate;
    }

    /**
     * Set object
     *
     * @param string $object
     *
     * @return Claim
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Claim
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set clientclient
     *
     * @param \AppBundle\Entity\Client $clientclient
     *
     * @return Claim
     */
    public function setClientclient(\AppBundle\Entity\Client $clientclient)
    {
        $this->clientclient = $clientclient;

        return $this;
    }

    /**
     * Get clientclient
     *
     * @return \AppBundle\Entity\Client
     */
    public function getClientclient()
    {
        return $this->clientclient;
    }
}
