<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservering;
use App\Http\Helpers\SharedHelper;

class ReserveringController extends Controller
{
    public function index()
    {
        $reserveringList = Reservering::all();
        return view('reservering.index')->with('reserverings', $reserveringList);
    }   

    public function update(Request $request, Reservering $reservering)
    {
        // $request->validate([
        //     'voornaam' => 'required',
        //     'tussenvoegsel' => 'required',
        //     'achternaam' => 'required',
        //     'datum' => 'required',
        //     'volwassen' => 'required',
        //     'kinderen' => 'required',
        //     'optiepakket' => 'required',
        // ]);

        $reservering->update($request->all());

        return redirect()->route('reserveren.index')
                        ->with('success', 'Reservering updated successfully');
    }

    public function create()
    {
        return view('reservering.create');
    }
} 
