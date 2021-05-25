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

    public function newGuest() {

        return view('pages.create');
    }

    public function storeGuest(Request $request) {

        $validated = $request -> validate([
            'name' => 'max:100',
            'lastname' => 'max:100',
            'date_of_birth' => 'nullable|date',
            'document_type' => 'nullable|max:50',
            'document_number' => 'nullable|numeric',
            'phone_number' => 'nullable|max:50',
            'address' => 'nullable|max:100'
        ]);

        $guest = Guest::create($validated);
        return redirect() -> route('guest', $guest -> id);
    }
}
