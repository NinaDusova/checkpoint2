<?php

namespace App\Controllers;

//use App\Auth\SimpleAuthenticator;
use App\Core\AControllerBase;
use App\Core\HTTPException;
use App\Core\Responses\RedirectResponse;
use App\Core\Responses\Response;
use App\Models\Kupon;

//use App\Core\AControllerBase;
//use App\Core\Responses\Response;

class KuponController extends AControllerBase
{

    /**
     * @inheritDoc
     */
    public function index(): Response
    {
        // TODO: Implement index() method.
        return $this->html();
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
            $kupon->save();
            return new RedirectResponse($this->url('kupon.index'));
        }
    }

    private function formErrors(): array
    {
        $errors = [];

        if ($this->request()->getValue('email') == null) {
            $errors[] = "Email je povinný!";
        }

        return $errors;
    }
}