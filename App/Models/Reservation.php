<?php


namespace App\Models;

use \App\Core\Model;
class Reservation extends Model {
    protected ?int $res_id = null;
    protected date $res_date;
    protected string $res_name;
    protected string $res_email;

    protected int $res_phone;

    public function getResId(): ?int
    {
        return $this->res_id;
    }

    public function setResId(?int $res_id): void
    {
        $this->res_id = $res_id;
    }

    public function getResDate(): date
    {
        return $this->res_date;
    }

    public function setResDate(date $res_date): void
    {
        $this->res_date = $res_date;
    }

    public function getResName(): string
    {
        return $this->res_name;
    }

    public function setResName(string $res_name): void
    {
        $this->res_name = $res_name;
    }

    public function getResEmail(): string
    {
        return $this->res_email;
    }

    public function setResEmail(string $res_email): void
    {
        $this->res_email = $res_email;
    }

    public function getResPhone(): int
    {
        return $this->res_phone;
    }

    public function setResPhone(int $res_phone): void
    {
        $this->res_phone = $res_phone;
    }

}