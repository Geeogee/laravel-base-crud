@extends('layouts.main-layout')

@section('title')
    <title>
        Guest - {{ $guest['name'] }} {{ $guest['lastname']}}
    </title>
@endsection

@section('links')
    <a href=" {{ route('home') }} ">
        Back to Homepage
    </a>
@endsection

@section('main')
    <main>
        <ul>
            <li>
                {{ $guest['name'] }}
            </li>
            <li>
                {{ $guest['lastname'] }}
            </li>
            <li>
                {{ $guest['date_of_birth'] }}
            </li>
            <li>
                {{ $guest['document_type'] }}
            </li>
            <li>
                {{ $guest['document_number'] }}
            </li>
            <li>
                {{ $guest['phone_number'] }}
            </li>
            <li>
                {{ $guest['address'] }}
            </li>
        </ul>
    </main>
@endsection