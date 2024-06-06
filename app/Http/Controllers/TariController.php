<?php

namespace App\Http\Controllers;

use App\Models\Tari;
use Illuminate\Http\Request;

class TariController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vtari = Tari::latest()->paginate(5);

        return view('Admin.Tari.tari', compact('vtari'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Tari.tari-create');
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
            $cover = $request->file('cover');
            $destinationPath = 'storage/coverTari';
            $profileCover = date('YmdHis') . "." . $cover->getClientOriginalExtension();
            $cover->move($destinationPath, $profileCover);
            $input['cover'] = $profileCover;
        }
        if ($request->hasFile('video')) {
            $vtari = $request->file('video');
            $destinationPath = 'storage/vtari/';
            $profileVtari = date('YmdHis') . "." . $vtari->getClientOriginalExtension();
            $vtari->move($destinationPath, $profileVtari);
            $input['video'] = $profileVtari;
        }

        Tari::create($input);

        return redirect()->route('tari.index')
            ->with('success', 'Tutorial tari berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $vtari = Tari::findOrFail($id);
        return view('Admin.Tari.tari-show', compact('vtari'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vtari = Tari::findOrFail($id);
        return view('Admin.Tari.tari-show', compact('vtari'));
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
        $vtari = Tari::findOrFail($id);

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $destinationPath = 'storage/coverTari/';
            $profileCover = date('YmdHis') . "." . $cover->getClientOriginalExtension();
            $cover->move($destinationPath, $profileCover);
            $input['cover'] = $profileCover;
        }
        if ($request->hasFile('video')) {
            $vtariFile = $request->file('video');
            $destinationPath = 'storage/vtari/';
            $profileVtari = date('YmdHis') . "." . $vtariFile->getClientOriginalExtension();
            $vtariFile->move($destinationPath, $profileVtari);
            $input['video'] = $profileVtari;
        }

        $vtari->update($input);

        return redirect()->route('tari.index')
            ->with('success', 'Tutorial tari berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vtari = Tari::findOrFail($id);
        $vtari->delete();

        return redirect()->route('tari.index')
            ->with('success', 'Tutorial tari berhasil dihapus.');
    }
}
