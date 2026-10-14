<?php

namespace App\Http\Controllers;

use App\Models\Ready;
use Illuminate\Http\Request;

class ReadyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readies = Ready::all();
        return view('ready.index', compact('readies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ready.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_alat' => 'required',
            'jumlah' => 'required|integer',
            'image' => 'nullable | image | mimes:jpg,jpeg,png,webp'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        Ready::create($data);
        
        return redirect()->route('ready.index')
            ->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ready $ready)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ready $ready)
    {
        return view('ready.edit', compact('ready'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ready $ready)
    {
        $data = $request->validate([
            'nama_alat' => 'required',
            'jumlah' => 'required|integer',
            'image' => 'nullable | image | mimes:jpg,jpeg,png,webp | max:2048'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $ready->update($data);

        return redirect()->route('ready.index')
            ->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ready $ready)
    {
        $ready->delete();
        return redirect()->route('ready.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}
