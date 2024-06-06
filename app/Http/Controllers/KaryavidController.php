<?php

namespace App\Http\Controllers;

use App\Models\Karyavid;
use Illuminate\Http\Request;

class KaryavidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karya = Karyavid::latest()->paginate(5);

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
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        $input = $request->all();

        if ($request->hasFile('video')) {
            $vkarya = $request->file('video');
            $destinationPath = 'storage/vkarya/';
            $profileVkarya = date('YmdHis') . "." . $vkarya->getClientOriginalExtension();
            $vkarya->move($destinationPath, $profileVkarya);
            $input['video'] = $profileVkarya;
        }

        Karyavid::create($input);

        return redirect()->route('karya.index')
            ->with('success', 'Karya berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyavid $karyavid)
    {
        $karyavid = Karyavid::all();
        return view('webUtama.galeri.karya', compact('karyavid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $karyavid = Karyavid::findOrFail($id);
        return view('webUtama.galeri.karya-edit', compact('karyavid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'pencipta' => 'required',
            'video' => 'nullable|file|mimetypes:video/mp4',
        ]);

        $input = $request->all();
        $karyavid = Karyavid::findOrFail($id);

        if ($request->hasFile('video')) {
            $vkarya = $request->file('video');
            $destinationPath = 'storage/vkarya/';
            $profileVkarya = date('YmdHis') . "." . $vkarya->getClientOriginalExtension();
            $vkarya->move($destinationPath, $profileVkarya);
            $input['video'] = $profileVkarya;
        }

        $karyavid->update($input);

        return redirect()->route('galeri.video')
            ->with('success', 'Karya berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $karyavid = Karyavid::findOrFail($id);
        $karyavid->delete();

        return redirect()->route('galeri.video')
            ->with('success', 'Karya berhasil dihapus.');
    }
}
