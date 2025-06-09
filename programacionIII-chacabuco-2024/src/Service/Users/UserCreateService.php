<?php 

declare(strict_types = 1);

namespace Src\Service\Users;

use Src\Model\Users\UserModel;
use Src\Entity\Users\User;

final readonly class UserCreateService {

    private UserModel $model;

    public function __construct() 
    {
        $this->model = new UserModel();
    }

    public function create(string $email, string $password): void
    {
        //funcion estatica para crear el dominio. 
        $user = Users::create ($email, $password);
        $this->user->insert($user);
    }

}