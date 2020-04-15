<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProveedorRepository")
 */
class Proveedor
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
     * @ORM\Column(type="integer")
     */
    private $codigo_postal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $localidad;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $telefono;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pedido", mappedBy="id_proveedor")
     */
    private $id_pedido;

    public function __toString(){
        return $this->nombre;
    }

    public function __construct()
    {
        $this->id_pedido = new ArrayCollection();
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

    public function getCodigoPostal(): ?int
    {
        return $this->codigo_postal;
    }

    public function setCodigoPostal(int $codigo_postal): self
    {
        $this->codigo_postal = $codigo_postal;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->localidad;
    }

    public function setLocalidad(string $localidad): self
    {
        $this->localidad = $localidad;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelefono(): ?int
    {
        return $this->telefono;
    }

    public function setTelefono(int $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * @return Collection|Pedido[]
     */
    public function getIdPedido(): Collection
    {
        return $this->id_pedido;
    }

    public function addIdPedido(Pedido $idPedido): self
    {
        if (!$this->id_pedido->contains($idPedido)) {
            $this->id_pedido[] = $idPedido;
            $idPedido->setIdProveedor($this);
        }

        return $this;
    }

    public function removeIdPedido(Pedido $idPedido): self
    {
        if ($this->id_pedido->contains($idPedido)) {
            $this->id_pedido->removeElement($idPedido);
            // set the owning side to null (unless already changed)
            if ($idPedido->getIdProveedor() === $this) {
                $idPedido->setIdProveedor(null);
            }
        }

        return $this;
    }
}
