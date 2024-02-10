<?php

namespace App\Models;

use App\Core\Model;
class Result extends Model
{
    protected ?int $id = null;
    protected string $name;
    protected string $time;
    protected string $game;
    protected string $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getTime(): string
    {
        return $this->time;
    }

    public function setTime(string $time): void
    {
        $this->time = $time;
    }

    public function getGame(): string
    {
        return $this->game;
    }

    public function setGame(string $game): void
    {
        $this->game = $game;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
}