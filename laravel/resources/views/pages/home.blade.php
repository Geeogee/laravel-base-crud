@extends('layouts.main-layout')

@section('title')
    <title>
        Homepage
    </title>
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