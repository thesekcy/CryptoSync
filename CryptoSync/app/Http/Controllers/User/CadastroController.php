<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CadastroController extends Controller
{
    public function index()
    {
        return view('cadastro');
    }
}
