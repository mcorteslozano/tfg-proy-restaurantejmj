<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticuloRepository")
 */
class Articulo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="float")
     */
    private $precio;

    /**
     * @ORM\Column(type="integer")
     */
    private $existencias;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LineaPedido", mappedBy="id_articulo")
     */
    private $id_lineapedido;

    public function __toString(){
        return $this->nombre;
    }

    public function __construct()
    {
        $this->id_lineapedido = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getExistencias(): ?int
    {
        return $this->existencias;
    }

    public function setExistencias(int $existencias): self
    {
        $this->existencias = $existencias;

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
            $idLineapedido->setIdArticulo($this);
        }

        return $this;
    }

    public function removeIdLineapedido(LineaPedido $idLineapedido): self
    {
        if ($this->id_lineapedido->contains($idLineapedido)) {
            $this->id_lineapedido->removeElement($idLineapedido);
            // set the owning side to null (unless already changed)
            if ($idLineapedido->getIdArticulo() === $this) {
                $idLineapedido->setIdArticulo(null);
            }
        }

        return $this;
    }
}
