<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guide;

class PageController extends Controller
{
    public function landingPage(){
        $guide = Guide::all();
        return view('pages.index', compact('guide'));
    }
    public function ProfilePage($id){
        $guide= Guide::find($id);
        $guide->ticket;
        return view('pages.galery', compact('guide'));
    }
}
