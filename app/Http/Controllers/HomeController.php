<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

/**
 * This main class is for create all the pages controller that
 */
class HomeController extends BaseController {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('home');
    }

}
