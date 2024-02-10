<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\RedirectResponse;
use App\Core\Responses\Response;
use App\Models\Result;

class ResultController extends AControllerBase
{

    /**
     * @inheritDoc
     */
    public function index(): Response
    {
        return $this->html();
    }

    public function save(): Response
    {
        $id = (int)$this->request()->getValue('id');
        $result = new Result();
        $result->setName($this->request()->getValue('name'));
        $result->setTime($this->request()->getValue('time'));
        $result->setGame($this->request()->getValue('game'));
        $result->setDate($this->request()->getValue('date'));


        $formErrors = $this->formErrors();
        if (count($formErrors) > 0) {
            return $this->html(
                [
                    'result' => $result,
                    'errors' => $formErrors
                ], 'index'
            );
        } else {
            $result->setName($this->request()->getValue('name'));
            $result->setTime($this->request()->getValue('time'));
            $result->setGame($this->request()->getValue('game'));
            $result->setDate($this->request()->getValue('date'));
            $result->save();
            return new RedirectResponse($this->url('result.index'));
        }
    }

    private function formErrors(): array
    {
        $errors = [];

        if ($this->request()->getValue('name') == null) {
            $errors[] = "Meno je povinné!";
        }

        if ($this->request()->getValue('time') == null) {
            $errors[] = "Čas je povinný!";
        }

        if ($this->request()->getValue('game') == null) {
            $errors[] = "Typ hry je povinný!";
        }

        if ($this->request()->getValue('date') == null) {
            $errors[] = "Dátum hry je povinný!";
        }

        return $errors;
    }
}