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

    public function edit(Reservering $reservering)
    {
        return view('reservering.edit',compact('reservering'));
    }
} 
