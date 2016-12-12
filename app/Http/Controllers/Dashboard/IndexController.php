<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\BaseController;

class IndexController extends BaseController {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        return view('home');
    }
}