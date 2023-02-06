
@extends('layouts.main-layout')

@section('content')
    <ul>
        @foreach ($people as $person)
        <li>{{ $person -> firstName }} {{ $person -> lastName }}</li>
            <ul>
                <li>Date of birth: {{ $person -> dateOfBirth }}</li>
                <li>Height: {{ $person -> heigth }}</li>
            </ul>
        @endforeach
    </ul>
@endsection

