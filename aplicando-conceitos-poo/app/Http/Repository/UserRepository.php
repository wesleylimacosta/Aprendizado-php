<?php

namespace App\Http\Repository;

use App\Http\Entity\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    public function create(User $user): User
    {
        $user->save();
        return $user;
    }

    public function update(User $user): User
    {
        $user->save();
        return $user;
    }

    public function delete(User $user): void
    {
        $user->delete();
    }

    public function find(int $id): ?User
    {
        return User::find($id);
    }

    public function findByEmail(string $email): ?User
    {
        return User::where('email', $email)->first();
    }

    public function findAll()
    {
        return User::all();
    }
}
