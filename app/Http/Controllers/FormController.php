<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'uc' => ['required', 'string', 'max:255'],
            'nalunos' => ['required', 'string', 'max:255'],
            'cpu' => ['string', 'max:255'],
            'ram' => ['string', 'max:255'],
            'storage' => ['string', 'max:255'],
            'gpu' => ['string', 'max:255'],
            'net' => ['string', 'max:255'],
            'frameworks' => ['required', 'string', 'max:255'],
            'observations' => ['string', 'max:255'],


        ]);
    }
    public function index () {

        return view('form');
    }

    public function store() {

        $data = request()->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'uc' => 'required',
            'nalunos' => 'required',

            'cpu' => '',
            'ram' => '',
            'storage' => '',
            'gpu' => '',
            'net' => '',

            'frameworks' => 'required',
            'observations' => 'required',
        ]);

        Form::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'uc' => $data['uc'],
            'nalunos' => $data['nalunos'],

            'cpu' => $data['cpu'],
            'ram' => $data['ram'],
            'storage' => $data['storage'],
            'gpu' => $data['gpu'],
            'net' => $data['net'],

            'frameworks' => $data['frameworks'],
            'observations' => $data['observations'],
        ]);


        return redirect('/');
    }
}
