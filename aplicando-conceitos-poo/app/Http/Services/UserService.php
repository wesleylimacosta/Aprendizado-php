<?php

namespace App\Http\Services;

use App\Http\Entity\DTO\UserDTO;
use App\Http\Entity\User;
use App\Http\Repository\UserRepository;

class UserService
{

    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function create(UserDTO $userDTO): UserDTO
    {
        $user = new User();
        $user->setName($userDTO->getName());
        $user->setEmail($userDTO->getEmail());
        $user->setPassword($userDTO->getPassword());

        $savedUser = $this->userRepository->create($user);

        $userDTO->setId($savedUser->getId());

        return $userDTO;
    }

    public function update(UserDTO $userDTO): UserDTO
    {
        $user = $this->userRepository->find($userDTO->getId());
        $user->setName($userDTO->getName());
        $user->setEmail($userDTO->getEmail());
        $user->setPassword($userDTO->getPassword());
        $user = $this->userRepository->update($user);
        $userDTO->setId($user->getId());


        return $userDTO;
    }

    public function delete(int $id): void
    {
        $user = $this->userRepository->find($id);
        $this->userRepository->delete($user);
    }

    public function find(int $id): ?UserDTO
    {
        $user = $this->userRepository->find($id);
        if ($user === null) {
            return null;
        }
        $userDTO = new UserDTO();
        $userDTO->setId($user->getId());
        $userDTO->setName($user->getName());
        $userDTO->setEmail($user->getEmail());
        $userDTO->setPassword($user->getPassword());
        return $userDTO;
    }

    public function findByEmail(string $email): ?UserDTO
    {
        $user = $this->userRepository->findByEmail($email);
        if ($user === null) {
            return null;
        }
        $userDTO = new UserDTO();
        $userDTO->setId($user->getId());
        $userDTO->setName($user->getName());
        $userDTO->setEmail($user->getEmail());
        $userDTO->setPassword($user->getPassword());
        return $userDTO;
    }

    public function findAll(): array
    {
        $users = $this->userRepository->findAll();
        $usersDTO = [];
        foreach ($users as $user) {
            $userDTO = new UserDTO();
            $userDTO->setId($user->getId());
            $userDTO->setName($user->getName());
            $userDTO->setEmail($user->getEmail());
            $userDTO->setPassword($user->getPassword());
            $usersDTO[] = $userDTO;
        }

        return $usersDTO;
    }
}
