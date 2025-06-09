<?php 

namespace Src\Entity\Person;

final readonly class Person {

    public function __construct(
        private int $id,
        private string $name,
        private string $surname,
        private int $dni
    ) {
    }

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function surname(): string
    {
        return $this->surname;
    }

    public function dni(): string
    {
        return $this->dni;
    }
}