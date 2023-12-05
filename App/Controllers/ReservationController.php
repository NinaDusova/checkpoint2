<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\HTTPException;
use App\Core\Responses\Response;
use App\Models\Reservation;

class ReservationController extends AControllerBase
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        // TODO: Implement index() method.
        return $this->html();
    }

    public function add():Response
    {
        return $this->html();
    }

    private function formError()
    {
        $errors = [];
        if ($this->request()->getValue('picture') == "") {
            $errors[] = "Pole Obrázok je povinné!";
        }
        return $errors;
    }

}