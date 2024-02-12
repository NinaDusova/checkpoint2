<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\HTTPException;
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

    public function okno(): Response
    {
        return $this->html(
            [
                'results' => Result::getAll()
            ]
        );
    }

    public function edit(): Response
    {
        $id = (int) $this->request()->getValue('id');
        $result = Result::getOne($id);

        if (is_null($result)) {
            throw new HTTPException(404);
        }

        return $this->html(
            [
                'result' => $result
            ]
        );
    }

    public function delete(): Response
    {
        $id = $this->request()->getValue('id');
        $result = Result::getOne($id);
        $result->delete();

        return $this->redirect($this->url('result.okno'));
    }

    public function save(): Response
    {
        $id = (int)$this->request()->getValue('id');

        if ($id > 0) {
            $result = Result::getOne($id);
        } else {
            $result = new Result();
        }

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