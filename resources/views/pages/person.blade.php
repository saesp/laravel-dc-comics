@extends('layouts.main-layout')


@section('content')
        <div><strong>First name: </strong> {{ $person -> firstName }} </div>
        <div><strong>Last name: </strong>{{ $person -> lastName }}</div>
        <div><strong>Date of Birth:</strong> {{ $person -> dateOfBirth }}</div>
        <div><strong>Heigth:</strong> {{ $person -> heigth }}</div>
@endsection