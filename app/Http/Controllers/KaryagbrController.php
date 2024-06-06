<?php

namespace App\Http\Controllers;

use App\Models\Karyagbr;
use Illuminate\Http\Request;

class KaryagbrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karya = Karyagbr::latest()->paginate(5);

        return view('webUtama.galeri.karya', compact('karya'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('webUtama.galeri.karya');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pencipta' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $destinationPath = 'storage/gambar';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = $profileImage;
        }

        Karyagbr::create($input);

        return redirect()->route('karya.index')
            ->with('success', 'Karya berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyagbr $karyagbrgbr)
    {
        $karyagbr = Karyagbr::all();
        return view('webUtama.galeri.karya', compact('karyagbr'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $karyagbr = Karyagbr::findOrFail($id);
        return view('webUtama.galeri.karya-edit', compact('karyagbr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'pencipta' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $karyagbr = Karyagbr::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $destinationPath = 'storage/gambar';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = $profileImage;
        }

        $karyagbr->update($input);

        return redirect()->route('galeri.index')
            ->with('success', 'Karya berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $karyagbr = Karyagbr::findOrFail($id);
        $karyagbr->delete();

        return redirect()->route('galeri.index')
            ->with('success', 'Karya berhasil dihapus.');
    }
}
