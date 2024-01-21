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

    /*public function search(): Response
    {
        //$data = $this->request()->getRawBodyJSON();
        //$param = "%" . $this->request()->getValue('res_date') . "%";
        //$param =$this->request()->getValue('res_date') . "%";
        //$reservations = Reservation::getAll('res_date LIKE ?', [$param]);
       /* return $this->html(
            [
                'reservations' => $reservations
            ]
        );*/
       // return $this->json(['reservations' => $reservations]);
       //return $this->json(['reservations' => $param]);




        //-----------------------------------------
     /*   $data = $this->request()->getRawBodyJSON();
        //$param = "%" . json_encode($data) . "%";
        //$decodedData = json_decode($data, true);
        //$value = $decodedData['res_date'][0];

        //$reservations = Reservation::getAll('res_name LIKE ?', [$value]);
        $reservations = Reservation::getAll();

       /* if (isset($data['res_date'])) {
            // Concatenate '%' to the 'res_date' value
            $data['res_date'] .= "%";

            // Return the modified JSON data
            return $this->json($data);
        } else {
            // Handle the case where 'res_date' is not present in the request data
            return $this->json(['error' => 'res_date is missing in the request data'], 400);
        }*/

        //return $this->json($reservations);
       // return $this->json($reservations);
       // return $this->json(['param' => $param]);
       // return $this->json((['reservations' => $reservations]));
       // return $this->json($reservations);
     /*   return $this->json($data);
    }*/

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
                return new RedirectResponse($this->url('home.index'));
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
        }/* else if (!(strlen($this->request()->getValue('res_phone')) == 10 || strlen($this->request()->getValue('res_phone')) == 12)) {
            $errors[] = "Telefónne číslo je v nesprávnom tvare!";
        }*/
        if ($this->request()->getValue('res_date') == null) {
            $errors[] = "Dátum je povinný!";
        }
        if ($this->request()->getValue('res_time') == null) {
            $errors[] = "Čas je povinný!";
        }
        if ($this->request()->getValue('res_name') == "") {
            $errors[] = "Meno je povinné!";
        }
        if ($this->request()->getValue('res_name') == "" && !str_contains($this->request()->getValue('res_email'), '@')) {
            $errors[] = "Nesprávny tvar emailu!";
        }
        return $errors;
    }

}