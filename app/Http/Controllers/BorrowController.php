<?php

namespace App\Http\Controllers;

use App\Models\Ready;

use App\Models\Borrow;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrows = Borrow::with('ready')->get();
        return view('borrow.index', compact('borrows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $readies = Ready::all();

        return view('borrow.create', compact('readies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'image' => 'nullable | image | mimes:jpg,jpeg,png,webp',

            'borrow_id' => 'required|exists:readies,id_borrow',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        Borrow::create($data);

        return redirect()->route('borrow.index')
            ->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrow $borrow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Borrow $borrow)
    {
        $readies = Ready::all();

        return view('borrow.edit', compact('borrow', 'readies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Borrow $borrow)
    {
        $data = $request->validate([
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'image' => 'nullable | image | mimes:jpg,jpeg,png,webp | max:2048',


            'borrow_id' => 'required|exists:readies,id_borrow',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $borrow->update($data);

        return redirect()->route('borrow.index')
            ->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrow $borrow)
    {
        $borrow->delete();

        return redirect()->route('borrow.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}
