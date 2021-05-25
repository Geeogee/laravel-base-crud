@extends('layouts.main-layout')

@section('title')
    <title>
        Register a new guest
    </title>
@endsection

@section('main')
    <main>
        <form method="POST" action="{{ route('store_guest') }}">

            @csrf
            @method('POST')

            <label for="name">Name:</label>
            <input type="text" name="name" class="form-input"> 

            <label for="name">Lastname:</label>
            <input type="text" name="lastname" class="form-input">

            <label for="birthdate">Date of birth:</label>
            <input type="date" name="date_of_birth" class="form-input">

            <label for="document-type">Document type:</label>
            <input type="text" name="document_type" class="form-input">

            <label for="document-number">Document number:</label>
            <input type="text" name="document_number" class="form-input">

            <label for="phone-number">Phone number:</label>
            <input type="text" name="phone_number" class="form-input">

            <label for="address">Address:</label>
            <input type="text" name="address" class="form-input">

            <button type="submit">Register</button>
        </form>
    </main>
@endsection