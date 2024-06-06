<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flashcard;

class FlashcardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flashcards = Flashcard::latest()->paginate(5);

        return view('Admin.Bhsisyarat.flashcard', compact('flashcards'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Bhsisyarat.flashcard-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'flashcard' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('flashcard')) {
            $image = $request->file('flashcard');
            $destinationPath = 'storage/flashcard';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['flashcard'] = $profileImage;
        }

        Flashcard::create($input);

        return redirect()->route('flashcard.index')
            ->with('success', 'Flashcard berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $flashcard = Flashcard::findOrFail($id);
        return view('Admin.Bhsisyarat.flashcard-show', compact('flashcard'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $flashcard = Flashcard::findOrFail($id);
        return view('Admin.Bhsisyarat.flashcard-edit', compact('flashcard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'flashcard' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required'
        ]);

        $input = $request->all();
        $flashcard = Flashcard::findOrFail($id);

        if ($request->hasFile('flashcard')) {
            $image = $request->file('flashcard');
            $destinationPath = 'storage/flashcard';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['flashcard'] = $profileImage;
        } else {
            unset($input['flashcard']);
        }

        $flashcard->update($input);

        return redirect()->route('flashcard.index')
            ->with('success', 'Flashcard berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $flashcard = Flashcard::findOrFail($id);
        $flashcard->delete();

        return redirect()->route('flashcard.index')
            ->with('success', 'Flashcard berhasil dihapus.');
    }
}
