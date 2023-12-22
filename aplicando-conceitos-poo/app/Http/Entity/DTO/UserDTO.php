<?php

namespace App\Http\Entity\DTO;

class UserDTO 
{
    private  $id;
    private  $name;
    private  $email;
    private  $password;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): UserDTO
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name; 
    }

    public function setName(string $name): UserDTO
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email; 
    }

    public function setEmail(string $email): UserDTO
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password; 
    }

    public function setPassword(string $password): UserDTO
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        return $this;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
        ];
    }
}