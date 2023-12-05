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
    public function save(): Response
    {
        $errors = $this->formError();
        if (count($errors) > 0) {
            return $this->html(
                [
                    'errors' => $errors
                ], 'edit'
            );
        }

        $id = $this->request()->getValue('id');
        if ($id > 0) {
            $reservation = Reservation::getOne($id);
        } else {
            $reservation = new Reservation();
        }
        $reservation->setResName($this->request()->getValue('res_name'));
        $reservation->setResPhone($this->request()->getValue('res_phone'));
        $reservation->setResEmail($this->request()->getValue('res_email'));

        $reservation->save();

        return $this->redirect($this->url('home.index'));
    }

    public function delete(): Response
    {
        $id = $this->request()->getValue('id');
        $reservation = Reservation::getOne($id);
        $reservation->delete();

        return $this->redirect($this->url('home.index'));
    }

    private function formError()
    {
        $errors = [];
        if ($this->request()->getValue('res_phone') == null) {
            $errors[] = "Telefónne číslo je povinné!";
        } else if (sizeof($this->request()->getValue('res_phone'))!= 10 || sizeof($this->request()->getValue('res_phone'))!= 12) {
            $errors[] = "Telefónne číslo je v nesprávnom tvare!";
        } else if (sizeof($this->request()->getValue('res_phone')) == 10 && $this->request()->getValue('res_phone')[0] != '0') {
            $errors[] = "Telefónne číslo je v nesprávnom tvare!";
        } else if (sizeof($this->request()->getValue('res_phone')) == 12 && $this->request()->getValue('res_phone')[0] != '+') {
            $errors[] = "Telefónne číslo je v nesprávnom tvare!";
        }
        if ($this->request()->getValue('res_name') == "") {
            $errors[] = "Meno je povinné!";
        }
        if (str_contains($this->request()->getValue('res_email'), '@')) {
            $errors[] = "Nesprávny tvar emailu!";
        }
        return $errors;
    }

}