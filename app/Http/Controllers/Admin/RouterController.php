<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RouterRequest;
use App\Models\Router;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RouterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $router = Router::all();
        return view('pages.dashboard.router.index', compact('router'));
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
    public function store(RouterRequest $request)
    {
        $data = $request->all();
        // return $data;
        $data['logo'] = $request->file('logo')->store('assets/router', 'public');

        Router::create($data);
        return redirect()->route('router.index')->with('success', 'Barang berhasil ditambahkan');
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
    public function update(RouterRequest $request, Router $router)
    {
        $data = $request->all();
        if ($request->file('logo')) {
            if ($router->logo) {
                Storage::disk('public')->delete($router->logo);
            }
            $data['logo'] = $request->file('logo')->store('assets/router', 'public');
        }

        $router->update($data);
        return redirect()->route('router.index')->with('success', 'Router berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Router $router)
    {
        if ($router->logo) {
            Storage::disk('public')->delete($router->logo);
        }
        $router->delete();
        return redirect()->route('router.index')->with('success', 'Router berhasil dihapus');
    }
}
