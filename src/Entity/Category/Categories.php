<?php
namespace Src\Entity\Category;

final readonly class Category {

    public function __construct(
        private ?int $id,   // Puede ser null si se crea desde cero
        private string $name
    ) {}

    // Método estático para crear una nueva categoría (sin id aún)
    public static function create(string $name): self {
        return new self(null, $name);
    }

    // Getters
    public function id(): ?int {
        return $this->id;
    }

    public function name(): string {
        return $this->name;
    }
}
