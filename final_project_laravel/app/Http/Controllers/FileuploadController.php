<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Fileupload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileuploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dashboardTitle = "Files";
        $isCurrent = "Files";
        return view('dashboard.files', [
            'dashboardTitle' => $dashboardTitle,
            'isCurrent' => $isCurrent
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function files(Request $request)
    {
        $file = $request->file('uploadedfile');
        $filename = $file->getClientOriginalName();
        $filename = time(). '.' .$filename;
    
        $path = Storage::disk('docs')
            ->putFileAs(
                "/" . Auth::user()->id,
                $file,
                $filename
            );
    
        Fileupload::create([
            'user_id' => Auth::user()->id,
            'filename' => $path
        ]);

        return redirect(route('dashboard.profile'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function show(Fileupload $fileupload)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function edit(Fileupload $fileupload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fileupload $fileupload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fileupload $fileupload)
    {
        //
    }
}
