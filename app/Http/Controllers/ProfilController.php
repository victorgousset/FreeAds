<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{

    public function index()
    {
        if (auth()->guest())
        {
            return redirect('/login');
        }

        return view('modification_profil');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function modification_profil()
    {
        if (auth()->guest())
        {
            return redirect('/login');
        }

        request()->validate([
           'name' => ['required'],
            'email' => ['required'],
        ]);

        DB::table('users')->where('id', auth()->id())->update(['name' => request('name'), 'email' => request('email')]);

        return redirect('/profil');
    }

    public function modification_password()
    {
        if (auth()->guest())
        {
            return redirect('/login');
        }

        request()->validate([
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirm' => ['required'],
        ]);

        $password = bcrypt(request('password'));

        DB::table('users')->where('id', auth()->id())->update(['password' => $password]);

        return redirect('/profil');
    }

    public function delete_account()
    {
        if (auth()->guest())
        {
            return redirect('/login');
        }
        return view('delete');
    }

    public function delete_confirm()
    {
        if (auth()->guest())
        {
            return redirect('/login');
        }

        $id = auth()->id();
        DB::table('users')->where('id', $id)->delete();

        return redirect('/register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
