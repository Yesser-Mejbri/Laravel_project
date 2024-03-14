<?php

namespace App\Http\Controllers;
use App\Models\Organizer;
use App\Models\Tweet;
use App\Models\Keynote;
use App\Models\Sponsor;
use App\Models\Specialsession;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $org=organizer::all();
        $tweet=tweet::all();
        $keynote=keynote::all();
        $specialsession=specialsession::all();
        return view ('welcome',compact('org','tweet','keynote','specialsession'));
    }

}
