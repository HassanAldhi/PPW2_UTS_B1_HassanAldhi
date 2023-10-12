<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;


class pemainController extends Controller
{
    public function index()
    {
        $pemain = Pemain::all();
        return view('pemains.index',  ['pemain' => $pemain]);
    }
}
