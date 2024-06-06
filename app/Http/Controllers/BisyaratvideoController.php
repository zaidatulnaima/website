<?php

namespace App\Http\Controllers;

use App\Models\bisyaratvideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BisyaratvideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = bisyaratvideo::latest()->paginate(5);

        return view('Admin.Bhsisyarat.video', compact('videos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Bhsisyarat.video-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        $input = $request->all();

        if ($video = $request->file('video')) {
            $destinationPath = 'storage/video/';
            $profileVideo = date('YmdHis') . "." . $video->getClientOriginalExtension();
            $video->move($destinationPath, $profileVideo);
            $input['video'] = "$profileVideo";
        }

        bisyaratvideo::create($input);

        return redirect()->route('video.index')
            ->with('success', 'Video berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $video = bisyaratvideo::findOrFail($id);
        return view('Admin.Bhsisyarat.video-show', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $video = bisyaratvideo::findOrFail($id);
        return view('Admin.Bhsisyarat.video-edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'video' => 'nullable|file|mimetypes:video/mp4',
        ]);

        $input = $request->all();
        $video = bisyaratvideo::findOrFail($id);

        if ($request->hasFile('video')) {
            $destinationPath = 'storage/video/';
            $profileVideo = date('YmdHis') . "." . $request->file('video')->getClientOriginalExtension();
            $request->file('video')->move($destinationPath, $profileVideo);
            $input['video'] = $profileVideo;
        } else {
            unset($input['video']);
        }

        $video->update($input);

        return redirect()->route('video.index')
            ->with('success', 'Video berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $video = bisyaratvideo::findOrFail($id);
        $video->delete();

        return redirect()->route('video.index')
            ->with('success', 'Video berhasil dihapus.');
    }
}
