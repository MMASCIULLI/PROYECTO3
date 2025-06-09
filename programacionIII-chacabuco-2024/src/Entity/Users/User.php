<?php 

namespace Src\Entity\User;

final readonly class User {

    public function __construct(

        private int $id,
        private string $email,
        private string $password
    ) {
    }

    public function create (
        string $email, 
        string $password
        
    ): self 

    //self se refiere al objeto que estoy trabajando adentro. 
    {
        return new self (null, $email, $password);
    }

///
    public function modify(
        string $email, 
        string $password
    ): void
    
    {
        $this->email= $email;
        $this->password= $password;
    }
///


    public function id(): ?int
    {
        return $this->id;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function password(): string
    {
        return $this->password;
    }
}