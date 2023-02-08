@extends('layouts.main-layout')


@section('content')

    <h2>People</h2>


        <button class="">
            <a href="/create">CREATE A NEW PERSON</a>
        </button>


        <ol>
            @foreach ($people as $person)
            <li>
                <a href="{{route('person.show', $person) }}">{{ $person -> firstName }} {{ $person -> lastName }}</a>
                -
                <a href="{{route('person.delete', $person) }}">Delete</a>
            </li>

            
            <ul class="mb-3">
                <li>
                    Date of birth: {{ $person -> dateOfBirth }}
                </li>

                <li>
                    Height: {{ $person->heigth == true 
                                ? $person->heigth .'cm' 
                                : "null"}}
                </li>
            </ul>
            @endforeach
        </ol>

@endsection

