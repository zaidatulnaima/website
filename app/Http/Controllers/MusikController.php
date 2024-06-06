<?php

namespace App\Http\Controllers;

use App\Models\Musik;
use Illuminate\Http\Request;

class MusikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vmusik = Musik::latest()->paginate(5);

        return view('Admin.Musik.musik', compact('vmusik'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Musik.musik-create');
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
            $image = $request->file('cover');
            $destinationPath = 'storage/cover';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['cover'] = $profileImage;
        }
        if ($request->hasFile('video')) {
            $vmusik = $request->file('video');
            $destinationPath = 'storage/vmusik/';
            $profileVmusik = date('YmdHis') . "." . $vmusik->getClientOriginalExtension();
            $vmusik->move($destinationPath, $profileVmusik);
            $input['video'] = $profileVmusik;
        }

        Musik::create($input);

        return redirect()->route('musik.index')
            ->with('success', 'Tutorial musik berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $vmusik = Musik::findOrFail($id);
        return view('Admin.Musik.musik-show', compact('vmusik'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vmusik = Musik::findOrFail($id);
        return view('Admin.Musik.musik-edit', compact('vmusik'));
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
        $vmusik = Musik::findOrFail($id);

        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $destinationPath = 'storage/cover';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['cover'] = $profileImage;
        }
        if ($request->hasFile('video')) {
            $vmusikFile = $request->file('video');
            $destinationPath = 'storage/vmusik/';
            $profileVmusik = date('YmdHis') . "." . $vmusikFile->getClientOriginalExtension();
            $vmusikFile->move($destinationPath, $profileVmusik);
            $input['video'] = $profileVmusik;
        }

        $vmusik->update($input);

        return redirect()->route('musik.index')
            ->with('success', 'Tutorial musik berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vmusik = Musik::findOrFail($id);
        $vmusik->delete();

        return redirect()->route('musik.index')
            ->with('success', 'Tutorial musik berhasil dihapus.');
    }
}
