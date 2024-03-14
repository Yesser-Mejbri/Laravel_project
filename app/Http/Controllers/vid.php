<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Photo;
use App\Models\Keynote;
use App\Models\Specialsession;
use App\Models\Sponsor;
class vid extends Controller
{
    public function index()
    {
        $video=video::all();
        $photo=photo::all();
        $keynote=keynote::all();
        $specialsession=specialsession::all();
        return view ('vd',compact('video','photo','keynote','specialsession'));
    }
}
