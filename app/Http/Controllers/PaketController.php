<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Http\Requests\StorePaketRequest;
use App\Http\Requests\UpdatePaketRequest;

class PaketController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Paket $paket)
    {
        $dataPaket = $paket->get();
        return view('dashboard.paket.index', compact('dataPaket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Paket $paket, Request $paketRequest)
    {
        $data = $paketRequest->all();
        $paket->create($data);
        return redirect(route('paket.index'))->with('success', 'Data user berhasil ditambahkan');
    }


    public function saveUser(User $user, Request $userRequest)
    {
        $data = $userRequest->all();
        $data['password'] = bcrypt($userRequest->password);
        $user->create($data);
        return redirect(route('user.getUser'))->with('success', 'Data user berhasil ditambahkan');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paket $paket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaketRequest $request, Paket $paket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paket $paket)
    {
        //
    }
}
