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
            $kupon->setEmail($this->request()->getValue('email'));
            $kupon->setGame($this->request()->getValue('game'));
            $kupon->save();
            return new RedirectResponse($this->url('home.index'));
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