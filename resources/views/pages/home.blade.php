@extends('layouts.main-layout')


@section('content')

    <ul>
        @foreach ($people as $person)
        
        
        <li>
            <a href="{{route('person.show', $person) }}">{{ $person -> firstName }} {{ $person -> lastName }}</a>
        </li>

            <ul>
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
    </ul>

@endsection

