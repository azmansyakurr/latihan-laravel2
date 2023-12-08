@extends('profile.app')
@section('container')
    <h1>Halaman Profile</h1>
    <h2>{{ $name }}</h2>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection
