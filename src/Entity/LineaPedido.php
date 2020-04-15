<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LineaPedidoRepository")
 */
class LineaPedido
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $unidades;

    /**
     * @ORM\Column(type="float")
     */
    private $precio_linea;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Articulo", inversedBy="id_lineapedido")
     */
    private $id_articulo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pedido", inversedBy="id_lineapedido")
     */
    private $id_pedido;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUnidades(): ?int
    {
        return $this->unidades;
    }

    public function setUnidades(int $unidades): self
    {
        $this->unidades = $unidades;

        return $this;
    }

    public function getPrecioLinea(): ?float
    {
        return $this->precio_linea;
    }

    public function setPrecioLinea(float $precio_linea): self
    {
        $this->precio_linea = $precio_linea;

        return $this;
    }

    public function getIdArticulo(): ?Articulo
    {
        return $this->id_articulo;
    }

    public function setIdArticulo(?Articulo $id_articulo): self
    {
        $this->id_articulo = $id_articulo;

        return $this;
    }

    public function getIdPedido(): ?Pedido
    {
        return $this->id_pedido;
    }

    public function setIdPedido(?Pedido $id_pedido): self
    {
        $this->id_pedido = $id_pedido;

        return $this;
    }
}
