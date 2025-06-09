<?php 

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class DomainCreateController extends ViewController {


    public function __construct() {
        parent::__construct('Domain/admin/form');
    }

    public function start(): void 
    {
        
        $this->validateUser(); //esta linea va a decir si el usuario es correcto o no 
        parent::call([]);
    }
}