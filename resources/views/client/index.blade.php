@extends('layouts/app')
@section('content')
    Bienvenue {{ Auth::user()->name}}
    <br>Client
@endsection