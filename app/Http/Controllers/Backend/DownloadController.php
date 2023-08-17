<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class DownloadController extends Controller
{
    public function index()
    {
        $downloads = Download::all();
        return view('backend.pages.downloads.index', compact('downloads'));
    }

    public function create()
    {
        return view('backend.pages.downloads.create');
    }
    public function store(Request $request){

        $downloads = new Download();
        $downloads->title = $request->title;
        $downloads->cover = $request->cover;
        $downloads->uuid = (string)Uuid::generate();

        $downloads->save();
        session()->flash('success', 'Download has been created !!');
        return redirect()->route('admin.downloads.index');
    }

    public function download($uuid)
    {
        
        $download = Download::where('uuid', $uuid)->firstOrFail();
        $pathToFile = $download->cover;
        $extension = pathinfo(parse_url($pathToFile, PHP_URL_PATH), PATHINFO_EXTENSION);
        $filename = "Downloaded File".".".$extension;
        //$tempImage = tempnam(sys_get_temp_dir(), $filename);
        //$getContent = file_get_contents($pathToFile); // Here cURL can be use.

        //copy($pathToFile, $tempImage);
        //return response()->download($tempImage,$filename);
        return response()->streamDownload(function () use ($download) {
            if ($stream = fopen($download->cover, 'r')) {
                while (!feof($stream)) {
                    echo fread($stream, 1024);
                    flush();
                }
                fclose($stream);
            }    
        }, $filename.'.'.$extension);
    }
}
