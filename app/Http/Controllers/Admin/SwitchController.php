<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SwitchRequest;
use App\Models\Switchh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SwitchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $switch = Switchh::all();
        return view('pages.dashboard.switch.index', compact('switch'));
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
    public function store(SwitchRequest $request)
    {
        $data = $request->all();
        // return $data;
        $data['logo'] = $request->file('logo')->store('assets/switch', 'public');

        Switchh::create($data);
        return redirect()->route('switch.index')->with('success', 'Switch berhasil ditambahkan');
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
    public function update(SwitchRequest $request, Switchh $switch)
    {
        $data = $request->all();
        if ($request->file('logo')) {
            if ($switch->logo) {
                Storage::disk('public')->delete($switch->logo);
            }
            $data['logo'] = $request->file('logo')->store('assets/switch', 'public');
        }

        $switch->update($data);
        return redirect()->route('switch.index')->with('success', 'Switch berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Switchh $switch)
    {
        if ($switch->logo) {
            Storage::disk('public')->delete($switch->logo);
        }
        $switch->delete();
        return redirect()->route('switch.index')->with('success', 'Switch berhasil dihapus');
    }
}
