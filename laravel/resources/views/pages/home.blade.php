@extends('layouts.main-layout')

@section('title')
    <title>
        Homepage
    </title>
@endsection

@section('links')
    <a href="{{ route('new_guest') }}">
        Register a new guest!
    </a>
@endsection

@section('main')
   <main>
       <ul>
           @foreach ($guests as $guest)
               <li>
                   <a href="{{ route('guest', $guest -> id) }}">
                        {{ $guest['name'] }} {{ $guest['lastname'] }}
                   </a>
               </li>
           @endforeach
       </ul>
   </main> 
@endsection