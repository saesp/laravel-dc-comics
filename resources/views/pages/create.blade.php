@extends('layouts.main-layout')


@section('content')
    
    <form action="{{route('person.store') }}" method="POST">
        @csrf

        <label for="firstName">First Name</label>
        <input type="text" name="firstName">
        <br>
        <br>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName">
        <br>  
        <br>  
        <label for="dateOfBirth">Date of birth</label>
        <input type="date" name="dateOfBirth">
        <br>  
        <br>  
        <label for="heigth">Heigth</label>
        <input type="number" name="heigth">
        <br>
        <br>
        <button type="submit">ADD</button>
    </form>
@endsection