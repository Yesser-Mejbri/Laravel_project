<?php

namespace App\Http\Controllers;
use App\Models\Sponsor;
use App\Models\Keynote;
use App\Models\Specialsession;
use Illuminate\Http\Request;

class navbar extends Controller
{
    public function index()
    {
        $sponsor=sponsor::all();
        return view ('sponsor',compact('sponsor','keynote','specialsession'));
    }
    public function index1()
    {
        $keynote=keynote::all();
        $specialsession=specialsession::all();
        return (compact('keynote','specialsession'));
    }

}
