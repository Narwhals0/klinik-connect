<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing');
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

    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'tanggal_lahir' => 'required|date',
            'nomor_telepon' => 'required|numeric',
            'alamat' => 'required',
            'alamat_email' => 'required|email|unique:users,email',
            'kata_sandi' => 'required|min:8',
        ]);

        // Create a new user and save it to the database
        $user = new \App\Models\User;
        $user->nama_lengkap = $request->input('nama_lengkap');
        $user->jenis_kelamin = $request->input('jenis_kelamin');
        $user->tanggal_lahir = $request->input('tanggal_lahir');
        $user->nomor_telepon = $request->input('nomor_telepon');
        $user->alamat = $request->input('alamat');
        $user->alamat_email = $request->input('alamat_email');
        $user->password = $request->input('kata_sandi');
        $user->save();

        // Log the user in (optional)
        // Auth::login($user);

        // Redirect to a success page or show a success message
        return redirect('/success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
