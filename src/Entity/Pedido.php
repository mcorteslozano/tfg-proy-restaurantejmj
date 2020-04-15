<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PedidoRepository")
 */
class Pedido
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_pedido;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_entrega;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Proveedor", inversedBy="id_pedido")
     */
    private $id_proveedor;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LineaPedido", mappedBy="id_pedido")
     */
    private $id_lineapedido;

    public function __construct()
    {
        $this->id_lineapedido = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaPedido(): ?\DateTimeInterface
    {
        return $this->fecha_pedido;
    }

    public function setFechaPedido(\DateTimeInterface $fecha_pedido): self
    {
        $this->fecha_pedido = $fecha_pedido;

        return $this;
    }

    public function getFechaEntrega(): ?\DateTimeInterface
    {
        return $this->fecha_entrega;
    }

    public function setFechaEntrega(\DateTimeInterface $fecha_entrega): self
    {
        $this->fecha_entrega = $fecha_entrega;

        return $this;
    }

    public function getIdProveedor(): ?Proveedor
    {
        return $this->id_proveedor;
    }

    public function setIdProveedor(?Proveedor $id_proveedor): self
    {
        $this->id_proveedor = $id_proveedor;

        return $this;
    }

    /**
     * @return Collection|LineaPedido[]
     */
    public function getIdLineapedido(): Collection
    {
        return $this->id_lineapedido;
    }

    public function addIdLineapedido(LineaPedido $idLineapedido): self
    {
        if (!$this->id_lineapedido->contains($idLineapedido)) {
            $this->id_lineapedido[] = $idLineapedido;
            $idLineapedido->setIdPedido($this);
        }

        return $this;
    }

    public function removeIdLineapedido(LineaPedido $idLineapedido): self
    {
        if ($this->id_lineapedido->contains($idLineapedido)) {
            $this->id_lineapedido->removeElement($idLineapedido);
            // set the owning side to null (unless already changed)
            if ($idLineapedido->getIdPedido() === $this) {
                $idLineapedido->setIdPedido(null);
            }
        }

        return $this;
    }
}
