<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //dd($data);
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            //'rpassword' => 'required|string|min:8|confirmed',
            'ierg' => 'required|string|max:15',
            'cpfcnpj' => 'required|string|max:18',
            'dtnasc' => 'required|string|max:10',
            'sexo' => 'required|string|max:1',
            'cep' => 'required|string|max:9',
            'endnum' => 'required|string|max:5',
            //'complemento' => 'string|max:255',
            'rua' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'uf' => 'required|string|max:2',
            'profissao' => 'required|string|max:1',
            'estadocivil' => 'required|string|max:1',
            'nacionalidade' => 'required|string|max:1',
            'telefone' => 'required|string|max:14',
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //dd($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'ierg' => $data['ierg'],
            'cpfcnpj' => $data['cpfcnpj'],
            'dtnasc' => $data['dtnasc'],
            'sexo' => $data['sexo'],
            'cep' => $data['cep'],
            'endnum' => $data['endnum'],
            'complemento' => $data['complemento'],
            'rua' => $data['rua'],
            'bairro' => $data['bairro'],
            'cidade' => $data['cidade'],
            'uf' => $data['uf'],
            'profissao' => $data['profissao'],
            'estadocivil' => $data['estadocivil'],
            'nacionalidade' => $data['nacionalidade'],
            'telefone' => $data['telefone'],
        ]);
    }
}
