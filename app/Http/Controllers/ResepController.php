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

    public function openHome()
    {
        return view('home');
    }


    public function addResep(Request $request)
    {   
        
     
          $validation = $request->validate([
            'nama_resep' => 'required|min:5|max:255',
            'resep'      => 'required|min:5|max:255',
            'image'      => 'image|file|max:1024|mimes:jpg,jpeg,png',
        ]);

        // if($request->hasFile('image')){
        //     $request->file('image')->move('post-image/', $request->file('image')->get);
        // }


        // store::disk('public')->put($path, file_get_contents($image));

            // if($request->hasFile('image')){
            //     $image  =  $request->file('image');
            //     $image->move(public_path('post-image'), $image_name);
            // }


        Resep::create([
            'tanggal' => NOW(),
            'nama_resep' => $validation['nama_resep'],
            'resep'    => $validation['resep'],
            'image'   => $request->image,
            
        ]);

        return redirect('/home');
    }
    /**
     * Show the form for creating a new resource.
     */
   
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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
    public function deleteResep(Request $request)
    {
        Resep::where('id', $request->id)->delete();
        
        return redirect('/home');
    }
}
