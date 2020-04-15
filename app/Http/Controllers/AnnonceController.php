<?php

namespace App\Http\Controllers;

use App\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->guest())
        {
            return redirect('/login');
        }

        return view('annonce/post');
    }

    public function post(Request $request)
    {
        request()->validate([
            'titre' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
            'prix' => ['required'],
        ]);

        $titre = request('titre');
        $description = request('description');
        $image = $request->file('image')->store('public');
        $prix = intval(request('prix'));
        $id_user = auth()->id();

        $insert = new Annonce();
        $insert->insert($titre, $description, $image, $prix, $id_user);

        return redirect('/profil');
    }

    public function listMy()
    {
        if (auth()->guest())
        {
            return redirect('/login');
        }

        $t = new Annonce();
        $result = $t->getMyAnnonce();
        return view('annonce/my_annonce')->with('results', $result);
    }

    public function listAll()
    {
        $t = new Annonce();
        $result = $t->getMyAnnonce();

        var_dump($result);

        echo asset('public/xsKBqOgZRT1DMr5XJnYW8ZH8lK94Len4O0yJYJ0j.jpeg');

        return view('welcome')->with('results', $result);
    }

    public function page($id)
    {
        var_dump($id);

        $t = new Annonce();
        $result = $t->getAnnonce($id);

        if ($result == null)
        {
            return redirect('/');
        }

        return view('annonce/page')->with('results', $result);
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
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        //
    }
}
