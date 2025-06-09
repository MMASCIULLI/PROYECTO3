<?php 

namespace Src\Entity\Domain;

final class Domain {

    public function __construct(
        //con el signo de pregunta adelante digo que puede ser nulo o entero. 
        private readonly ?int $id,
        private string $name,
        private string $code
    ) {
    }


    
    public static function create (
        string $name, 
        string $code
        
    ): self 

    //self se refiere al objeto que estoy trabajando adentro. 
    {
        return new self (null, $name, $code);
    }


    public function modify(
        string $name, 
        string $code
    ): void
    
    {
        $this->name= $name;
        $this->code= $code;
    }


    public function id(): ?int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function code(): string
    {
        return $this->code;
    }
}