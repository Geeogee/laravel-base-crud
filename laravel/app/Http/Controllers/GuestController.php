<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class GuestController extends Controller
{
    public function home() {

        $guests = Guest::all();
        return view('pages.home', compact('guests'));
    }

    public function guest($id) {

        $guest = Guest::findOrFail($id);

        return view('pages.guest', compact('guest'));
    }
}
