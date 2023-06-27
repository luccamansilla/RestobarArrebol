<?php

namespace App\Http\Controllers;

use App\Models\Horarios;
use App\Models\Zona;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Nette\Utils\DateTime;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
}
