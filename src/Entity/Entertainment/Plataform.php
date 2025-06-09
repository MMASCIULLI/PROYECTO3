<?php

namespace Src\Entity\Entertainment;

final readonly class Plataform {
    public function __construct(
        private int $id,
        private string $name
    ) {}

    public function id(): int {
        return $this->id;
    }

    public function name(): string {
        return $this->name;
    }
}
