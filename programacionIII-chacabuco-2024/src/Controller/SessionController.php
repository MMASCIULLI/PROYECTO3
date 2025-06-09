<?php
readonly class SessionController {


    public function login(int $id): void {
        $_SESSION["user_id"] = $id;
        header("Location: /admin/");
        die();
    }

    public function logout(): void {
        unset($_SESSION["user_id"]);
        header ("Location: /admin/");
        die();
    }

    public function validateUser(): void { //verificamos si el usuairo esta logueado, si no esta logueado lo redireccionamos. 
        if (
            !isset($_SESSION["user_id"]) ||
            empty($_SESSION["user_id"])
        ) {
            header("Location: /admin/");

            die();
        }
    }

}
