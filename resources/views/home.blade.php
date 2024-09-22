@extends('navbar')
@section('main')


<div style="text-align: center;" class="positionNavigator">
                @auth
                <a href="/logout" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
                    Logout
                </a>  
                @else
                <a href="/login" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
                    Login
                </a>
                <a href="/register" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
                    Register
                </a>
                @endauth

<div class="m-5">
            <div class="card text-bg-white overflow-hidden border-0">
            <alt="..." style="height: 580px; width: 37,5%;">
                <div class="card-img-overlay">
                    <h1 class="card-text text-black text-center" style="margin-top: 250px;">Find and Buy Your Grocery Here!</h1>
                   
            </div>
        </div>
@endsection