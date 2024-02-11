<?php
namespace App\Controllers;

use App\Auth\SimpleAuthenticator;
use App\Core\AControllerBase;
use App\Core\HTTPException;
use App\Core\Responses\RedirectResponse;
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

    public function reservationn() : Response
    {
        return $this->html();
    }

    public function search(): Response
    {
        $searchValue = $this->request()->getValue('search');
        $param = "%" . $searchValue . "%";
        $reservations = Reservation::getAll('res_date LIKE ?', [$param]);
        return $this->json($reservations);

    }

    public function edit(): Response
    {
        $id = (int) $this->request()->getValue('id');
        $reservation = Reservation::getOne($id);

        if (is_null($reservation)) {
            throw new HTTPException(404);
        }

        return $this->html(
            [
                'reservation' => $reservation
            ]
        );
    }
    public function save(): Response
    {
        $id = (int)$this->request()->getValue('id');

        if ($id > 0) {
            $reservation = Reservation::getOne($id);
            //$reservation->delete(); nefunguje
        } else {
            $reservation = new Reservation();
        }
        $reservation->setResName($this->request()->getValue('res_name'));
        $reservation->setResDate($this->request()->getValue('res_date'));
        $reservation->setResTime($this->request()->getValue('res_time'));
        $reservation->setResPhone($this->request()->getValue('res_phone'));
        $reservation->setResEmail($this->request()->getValue('res_email'));

        $formErrors = $this->formErrors();
        if (count($formErrors) > 0) {
           // return $this->redirect($this->url('admin.index'))(
            return $this->html(
                [
                    'reservation' => $reservation,
                    'errors' => $formErrors
                ], 'reservationn'
            );
        } else {
            $reservation->setResName($this->request()->getValue('res_name'));
            $reservation->setResDate($this->request()->getValue('res_date'));
            $reservation->setResTime($this->request()->getValue('res_time'));
            $reservation->setResPhone($this->request()->getValue('res_phone'));
            $reservation->setResEmail($this->request()->getValue('res_email'));
            $reservation->save();
           // return $this->redirect($this->url('admin.index'));
            $auth = new SimpleAuthenticator();
            if ($auth->isLogged()) {
                return new RedirectResponse($this->url('admin.index'));
            } else {
                return new RedirectResponse($this->url('home.potvrdenie'));
            }
        }
    }

    public function delete(): Response
    {
        $id = $this->request()->getValue('id');
        $reservation = Reservation::getOne($id);
        $reservation->delete();

        return $this->redirect($this->url('admin.index'));
    }
    private function formErrors(): array
    {
        $errors = [];
        if ($this->request()->getValue('res_phone') == null) {
            $errors[] = "Telefónne číslo je povinné!";
        } else {
            $phoneLength = strlen($this->request()->getValue('res_phone'));
            if ($phoneLength < 10 || $phoneLength > 12) {
                $errors[] = "Telefónne číslo je v nesprávnom tvare!";
            }
        }
        if ($this->request()->getValue('res_date') == null) {
            $errors[] = "Nevybrali ste si dátum!";
        }
        if ($this->request()->getValue('res_time') == null) {
            $errors[] = "Nevybrali ste si čas!";
        }
        if ($this->request()->getValue('res_name') == "") {
            $errors[] = "Meno je povinné!";
        }
        $email = $this->request()->getValue('res_email');
        if ($email == "") {
            $errors[] = "Email je povinný!";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Nesprávny tvar emailu!";
        }
        return $errors;
    }

}