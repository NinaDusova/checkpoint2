<?php

namespace App\Models;

use App\Core\Model;

class Kupon extends Model
{
    protected ?int $id = null;
    protected string $kod;
    protected string $email;
    protected string $game;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getGame(): string
    {
        return $this->game;
    }

    public function setGame(string $game): void
    {
        $this->game = $game;
    }

    public function getKod(): string
    {
        return $this->kod;
    }

    public function setKod(string $kod): void
    {
        $this->kod = $kod;
    }

}