<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Reservation;
use App\Models\Result;

/**
 * Class HomeController
 * Example class of a controller
 * @package App\Controllers
 */
class HomeController extends AControllerBase
{
    /**
     * Authorize controller actions
     * @param $action
     * @return bool
     */
    public function authorize($action)
    {
        return true;
    }

    /**
     * Example of an action (authorization needed)
     * @return \App\Core\Responses\Response|\App\Core\Responses\ViewResponse
     */
    public function index(): Response
    {
        return $this->html();
    }

    /**
     * Example of an action accessible without authorization
     * @return \App\Core\Responses\ViewResponse
     */
    public function contact(): Response
    {
        return $this->html();
    }

    /*public function reservationn() : Response
    {
        return $this->html();
    }*/

    public function cennik() : Response
    {
        return $this->html();
    }

    public function admin() : Response
    {
        return $this->html(
            [
                'reservations' => Reservation::getAll(orderBy: '`time` asc')
            ]
        );
    }

    public function login() : Response
    {
        return $this->html();
    }

    public function miestnostiplague() : Response
    {
        return $this->html();
    }

    public function miestnostihello() : Response
    {
        return $this->html();
    }

    public function miestnosticake() : Response
    {
        return $this->html();
    }

    public function vysledky(): Response
    {
        return $this->html(
            [
                'results' => Result::getAll()
            ]
        );
    }
}
