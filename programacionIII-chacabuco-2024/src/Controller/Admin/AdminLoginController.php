<?php 

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/SessionController.php';
use Src\Service\UserLoginService;
use Src\Model\Users\UserModel;

final readonly class AdminLoginController extends SessionController {

    public function start(): void 
    {
        $email = $_POST["email"];
        $password= $_POST["password"];

        if ($email !== null)  {
            $this->login($user->id());

        } else {
            echo "Usuario o contraseña incorrectos";
        }
    }
}



// Después de recibir el POST...
//$loginService = new UserLoginService(new UsersModel());
//$user = $loginService->login($_POST['username'], $_POST['password']);

//if ($user !== null) {
  //  $this->login($user->id());
//} //else {
    //echo "Usuario o contraseña incorrectos";
//}
