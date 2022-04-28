@extends('layouts.app')

@section('content')
<div class="card-body ">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>

    <a class="navbar-brand text-white" href="#">Bienvenido a Blood Buddy</a>


    @endif
    @endsection