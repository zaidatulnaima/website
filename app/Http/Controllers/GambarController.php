<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use Illuminate\Http\Request;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gambar = Gambar::latest()->paginate(5);

        return view('Admin.Gambar.gambar', compact('gambar'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Gambar.gambar-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        $input = $request->all();

        if ($request->hasFile('cover')) {
            $gambar = $request->file('cover');
            $destinationPath = 'storage/coverGambar';
            $profileGambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileGambar);
            $input['cover'] = $profileGambar;
        }
        if ($request->hasFile('video')) {
            $vgambar = $request->file('video');
            $destinationPath = 'storage/vgambar/';
            $profileVgambar = date('YmdHis') . "." . $vgambar->getClientOriginalExtension();
            $vgambar->move($destinationPath, $profileVgambar);
            $input['video'] = $profileVgambar;
        }

        Gambar::create($input);

        return redirect()->route('gambar.index')
            ->with('success', 'Tutorial berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $gambar = Gambar::findOrFail($id);
        return view('Admin.Gambar.gambar-show', compact('gambar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gambar = Gambar::findOrFail($id);
        return view('Admin.Gambar.gambar-edit', compact('gambar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required',
            'video' => 'nullable|file|mimetypes:video/mp4',
        ]);

        $input = $request->all();
        $gambar = Gambar::findOrFail($id);

        if ($request->hasFile('cover')) {
            $gambar = $request->file('cover');
            $destinationPath = 'storage/coverGambar/';
            $profileGambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileGambar);
            $input['cover'] = $profileGambar;
        }
        if ($request->hasFile('video')) {
            $vgambarFile = $request->file('video');
            $destinationPath = 'storage/vgambar/';
            $profileVgambar = date('YmdHis') . "." . $vgambarFile->getClientOriginalExtension();
            $vgambarFile->move($destinationPath, $profileVgambar);
            $input['video'] = $profileVgambar;
        }

        $gambar->update($input);

        return redirect()->route('gambar.index')
            ->with('success', 'Tutorial berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gambar = Gambar::findOrFail($id);
        $gambar->delete();

        return redirect()->route('gambar.index')
            ->with('success', 'Tutorial berhasil dihapus.');
    }
}
