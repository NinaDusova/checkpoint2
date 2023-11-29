<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;

class MyFirstController extends AControllerBase
{

    public function index(): Response
    {
        return $this->html();
    }

    public function myPage(): Response
    {
        return $this->html();
    }
}