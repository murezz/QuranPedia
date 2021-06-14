<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class appController extends Controller
{
    public function index()
    {
        $murottal = Http::get('https://api.npoint.io/99c279bb173a6e28359c/data');
        $playing =  $murottal->json();
        // dd($playing);
        return view('murottal', compact('playing'));
    }

    public function jadwal()
    {
        $jadwalsholat = Http::get('https://siforlat-api.herokuapp.com/api/v1/prayTimes?latitude=-6.300060&longitude=106.670181&duration=100', [
            'name' => 'schedules'
        ]);
        $jadwal =  $jadwalsholat->json();
        // dd($playing);
        return view('jadwal', compact('jadwal'));
    }
}
