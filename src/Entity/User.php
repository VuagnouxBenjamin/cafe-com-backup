<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $role_utilisateur;

    /**
     * @ORM\OneToOne(targetEntity=Client::class, mappedBy="id_utilisateur", cascade={"persist", "remove"})
     */
    private $client;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoleUtilisateur(): ?string
    {
        return $this->role_utilisateur;
    }

    public function setRoleUtilisateur(string $role_utilisateur): self
    {
        $this->role_utilisateur = $role_utilisateur;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(Client $client): self
    {
        // set the owning side of the relation if necessary
        if ($client->getIdUtilisateur() !== $this) {
            $client->setIdUtilisateur($this);
        }

        $this->client = $client;

        return $this;
    }
}
