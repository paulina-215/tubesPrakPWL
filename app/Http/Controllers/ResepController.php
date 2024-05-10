<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;


class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reseps = Resep::all();

        return view('home', [
            'reseps' => $reseps
        ]);
    }

    public function indexAdd()
    {
        return view('create');
    }


    public function addResep(Request $request)
    {   
        return $request->file('gambar')->store('post-gambar');
        
          $validation = $request->validate([
            'nama_resep' => 'required|min:5|max:255',
            'resep'      => 'required|min:5|max:255',
        ]);

        Resep::create([
            'tanggal' => NOW(),
            'nama_resep' => $validation['nama_resep'],
            'resep'    => $validation['resep'],
            'gambar'   => $request->gambar,
            
        ]);

        return redirect('/home');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'cepat lah siap';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
