<?php

namespace App\Models;

use App\Core\Model;

class Kupon extends Model
{
    protected ?int $id = null;

    protected int $reservation_id;
    protected string $kod;
    protected string $email;
    protected string $game;
    protected string $datum;
    protected string $zakaznik;
    protected string $pouzity;

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

    public function getDatum(): string
    {
        return $this->datum;
    }

    public function setDatum(string $datum): void
    {
        $this->datum = $datum;
    }

    public function getZakaznik(): string
    {
        return $this->zakaznik;
    }

    public function setZakaznik(string $zakaznik): void
    {
        $this->zakaznik = $zakaznik;
    }

    public function getPouzity(): string
    {
        return $this->pouzity;
    }

    public function setPouzity(string $pouzity): void
    {
        $this->pouzity = $pouzity;
    }

    public function getReservationId(): int
    {
        return $this->reservation_id;
    }

    public function setReservationId(int $reservation_id): void
    {
        $this->reservation_id = $reservation_id;
    }


}