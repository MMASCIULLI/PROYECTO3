<?php

namespace Src\Service;

use Src\Model\Users\UsersModel;
use Src\Entity\Users\Users;

final class UserLoginService {

    private UsersModel $usersModel;

    public function __construct(UsersModel $usersModel)
    {
        $this->usersModel = $usersModel;
    }

    public function login(string $email, string $password): ?Users
    {
        
        
        // Buscamos el usuario con ese email y password.
        $users = $this->usersModel->search();
        foreach ($users as $user) {
            if ($user->email() === $email && $user->password() === $password) {
                //retornamos el objeto Users.
                return $user;
            }
        }

        // Si no encontramos coincidencias:
        return null;
    }
}
