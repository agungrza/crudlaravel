<?php

namespace App\Http\Controllers;
//koneksi ke model User
use App\Models\User;
use Illuminate\Http\Request;

class TambahController extends Controller
{
    // CREATE
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255']
        ]);
        User::create($validatedData);
        return redirect('/');
    }

    // UPDATE
    public function update(Request $request, User $users){
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255']
        ]);
        User::where('id', $users->id)->update($validatedData);
        return redirect('/');
    }

    // DELETE
    public function delete(User $users){
        User::destroy($users->id);
        return redirect('/');
    }
}
