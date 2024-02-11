<?php

namespace App\Controllers;

//use App\Auth\SimpleAuthenticator;
use App\Core\AControllerBase;
use App\Core\HTTPException;
use App\Core\Responses\RedirectResponse;
use App\Core\Responses\Response;
use App\Models\Kupon;
use App\Models\Reservation;

//use App\Core\AControllerBase;
//use App\Core\Responses\Response;

class KuponController extends AControllerBase
{

    /**
     * @inheritDoc
     */
    public function index(): Response
    {
        return $this->html(
            [
                'reservations' => Reservation::getAll()
            ]
        );
    }

    public function edit(): Response
    {
        $id = (int) $this->request()->getValue('id');
        $kupon = Kupon::getOne($id);
        $kupon->setPouzity('uplatneny');
        $kupon->save();
        return new RedirectResponse($this->url('admin.potvrdenie'));
    }

    public function save(): Response
    {
        $id = (int)$this->request()->getValue('id');
        $kupon = new Kupon();
        $kupon->setEmail($this->request()->getValue('email'));
        $kupon->setGame($this->request()->getValue('game'));
        $kupon->setReservationId($this->getIdRes($this->request()->getValue('email')));

        $formErrors = $this->formErrors();
        if (count($formErrors) > 0) {
            return $this->html(
                [
                    'kupon' => $kupon,
                    'errors' => $formErrors
                ], 'index'
            );
        } else {
            $kupon->setKod($this->request()->getValue('kod'));
            $kupon->setEmail($this->request()->getValue('email'));
            $kupon->setGame($this->request()->getValue('game'));
            $kupon->setDatum($this->request()->getValue('datum'));
            $kupon->setZakaznik($this->request()->getValue('zakaznik'));
            $kupon->setPouzity($this->request()->getValue('pouzity'));
            $kupon->setReservationId($this->getIdRes($this->request()->getValue('email')));
            $kupon->save();
            return new RedirectResponse($this->url('home.potvrdenie'));
        }
    }

    private function formErrors(): array
    {
        $errors = [];
        if ($this->request()->getValue('kod') == null) {
            $errors[] = "Chyba pri vytváraní kódu!";
        }

        if ($this->request()->getValue('email') == null) {
            $errors[] = "Email je povinný!";
        }

        if ($this->request()->getValue('game') == null) {
            $errors[] = "Typ hry je povinný!";
        }

        if ($this->request()->getValue('datum') == null) {
            $errors[] = "Chyba pri generovaní dátumu, skúste znova!";
        }

        if ($this->request()->getValue('zakaznik') == null) {
            $errors[] = "Meno je povinný!";
        }

        if ($this->request()->getValue('pouzity') == null) {
            $errors[] = "Chyba pri generovaní, skúste znova!";
        }

        return $errors;
    }


    private function getIdRes(string $email): int {
        foreach (Reservation::getAll() as $reservation) {
            if ($reservation->getResEmail() === $email) {
                return $reservation->getId();
            }
        }
        return 0;
    }
}