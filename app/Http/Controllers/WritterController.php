<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WritterController extends Controller
{
    //
    public function index()
    {
        $writers = Writer::all();

        return view('writers', compact('writers'));
    }

    public function getWriterArticle($writer)
    {
        $writer = Writer::with(['category', 'article'])->where('writer_name', $writer)->firstOrFail();

        if(!$writer) abort(404);
        
        return view('writers-article', compact('writer'));
    }
}
