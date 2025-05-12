<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BantuanRequest;
use App\Models\Bantuan;
use Illuminate\Http\Request;

class BantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bantuans = Bantuan::all();
        return view('pages.dashboard.bantuan.index', compact('bantuans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BantuanRequest $request)
    {
        $data = $request->all();

        Bantuan::create($data);
        return redirect()->route('bantuan.index')->with('success', 'Bantuan berhasil ditambahkan');
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
    public function update(BantuanRequest $request, Bantuan $bantuan)
    {
        $data = $request->all();

        $bantuan->update($data);
        return redirect()->route('bantuan.index')->with('success', 'Bantuan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bantuan $bantuan)
    {
        $bantuan->delete();
        return redirect()->route('bantuan.index')->with('success', 'Bantuan berhasil dihapus');
    }
}
