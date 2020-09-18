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
            'MAC' => ['required', 'string', 'max:17'],
        ]);
    }
    public function index () {

        return view('form');
    }

    public function store() {

        $data = request()->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'MAC' => 'required',
        ]);

        Form::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'MAC' => $data['MAC'],
        ]);


        return redirect('/');
    }
}
