<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserValidationRequest;
use Flasher\Toastr\Prime\ToastrInterface;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(CreateUserValidationRequest $request)
    {
        $data = $request->all();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        if($user instanceof User){
            return redirect()->route('login');
        }

        return redirect()->route('login');

    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
