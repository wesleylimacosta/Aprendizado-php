<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Entity\DTO\UserDTO;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getAll()
    {
        $users = $this->userService->findAll();

        if ($users == null) {
            return response()->json([
                'message' => 'Nenhum usuário cadastrado no sistema'
            ], 404);
        }

        $formattedUsers = array_map(function ($user) {
            return $user->toArray();
        }, $users);


        return response()->json(['data' => $formattedUsers], 200);
    }

    public function getById(Request $request)
    {

        $user = $this->userService->find($request->id);

        if ($user == null) {
            return response()->json([
                'message' => 'Usuario não encontrado'
            ], 404);
        }

        return response()->json($user, 200);
    }

    public function create(Request $request)
    {
        $userDTO = new UserDTO();
        $userDTO->setName($request->name);
        $userDTO->setEmail($request->email);
        $userDTO->setPassword($request->password);

        $createdUser = $this->userService->create($userDTO);

        if ($createdUser->getEmail() == null || $createdUser->getName() == null || $createdUser->getPassword() == null) {
            return response()->json([
                'message' => 'Preencha os campos e tente novamente'
            ], 400);
        }

        return response()->json(["message" => "Usuario criado com sucesso", "user" => $createdUser->toArray(), "status" => 201]);
    }
    public function update(Request $request)
    {

        $user = new UserDTO();
        $user->setId($request->id);
        $user->setName($request->name);
        $user->setEmail($request->email);
        $user->setPassword($request->password);

        $user = $this->userService->update($user);

        if ($user = null) {
            return response()->json([
                'message' => 'Usuario não encontrado'
            ], 404);
        }

        return response()->json($user, 200);
    }

    public function delete(Request $request)
    {

        $user = $this->userService->find($request->id);

        if ($user == null) {
            return response()->json([
                'message' => 'Usuario não encontrado'
            ], 404);
        }

        $this->userService->delete($request->id);

        return response()->json([
            'message' => 'Usuario deletado com sucesso'
        ], 200);
    }
}
