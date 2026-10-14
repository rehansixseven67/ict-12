<?php

namespace App\Http\Controllers;

use App\Models\Broken;
use Illuminate\Http\Request;

class BrokenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brokens = Broken::all();
        return view('broken.index', compact('brokens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('broken.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_alat' => 'required',
            'deskripsi' => 'required',
            'status' => 'required|in:rusak,perbaikan',
            'image' => 'nullable | image | mimes:jpg,jpeg,png,webp | max:2048'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        Broken::create($data);

        return redirect()->route('broken.index')
            ->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Broken $broken)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Broken $broken)
    {
        return view('broken.edit', compact('broken'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Broken $broken)
    {
        $data = $request->validate([
            'nama_alat' => 'required',
            'deskripsi' => 'required',
            'status' => 'required|in:rusak,perbaikan',
            'image' => 'nullable | image | mimes:jpg,jpeg,png,webp'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $broken->update($data);

        return redirect()->route('broken.index')
            ->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Broken $broken)
    {
        $broken->delete();

        return redirect()->route('broken.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}
