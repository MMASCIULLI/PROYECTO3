<?php
namespace Src\Entity\Entertainment;

use DateTime;

final class Entertainment {

    public function __construct (
        private ?int $id,  // Cambiado a nullable
        private string $type,
        private DateTime $releaseDate,
        private bool $isFinal, 
        private string $name, 
        private string $description,
        private int $categoryId,
        private int $plataformId,
        private string $image_url
    ) {} 

  

    public static function create(
        string $type,
        DateTime $releaseDate,
        int $isFinal,
        string $name,
        string $description,
        int $categoryId,
        int $plataformId,
        string $image_url): self 

    {
        return new self(null, $type, $releaseDate, $isFinal, $name, $description, $categoryId, $plataformId, $image_url);
    }


    public function modify(
        string $type,
        DateTime $releaseDate,
        int $isFinal,
        string $name, 
        string $description, 
        int $categoryId, 
        int $plataformId,
        string $image_url): void 
    {

        $this->type= $type;
        $this->releaseDate= $releaseDate;
        $this->isFinal= $isFinal;
        $this->name= $name;
        $this->description= $description;
        $this->categoryId= $categoryId;
        $this->plataformId=$plataformId;
        $this->image_url=$image_url;

    }





    public function id(): ?int {
        return $this->id;
    }

    public function type(): string {
        return $this->type;
    }

    public function releaseDate(): DateTime { 
        return $this->releaseDate;
    }

    public function isFinal(): int {
        return $this->isFinal;
    }

    public function name(): string {
        return $this->name;
    }

    public function description(): string {
        return $this->description;
    }

    public function categoryId(): int {
        return $this->categoryId;
    }

    public function plataformId(): int {
        return $this->plataformId;
    }

    public function image_url(): string {
     return $this->image_url; 
    }


}
