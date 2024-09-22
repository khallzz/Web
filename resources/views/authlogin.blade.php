@extends('navbar')
@section('main')
<div class="sectionLogin">
<div class="textPlease">
   <h3>
   Please Sign In
   </h3> 
</div>
<div class="backgroundLogin">    
    <div class="textLogin">
        Login
    </div>
    <form action="/login" method="POST">
        @csrf
        <div class="login">
            <div>
                <input type="text" placeholder="Email" class="inputLogin" name="email" value={{ Cookie::get('email') == null ? "" : Cookie::get('email')}}>
            </div>
            <div>
                <input type="text" placeholder="Password" class="inputLogin" name="password" value={{ Cookie::get('password') == null ? "" : Cookie::get('password')}}>
            </div>
            <div>
                <input type="checkbox" class="cssCheckBox">Remember me</input>
            </div>
            @if ($errors->any())
                <p>{{$errors->first()}}</p>
            @endif
            <div>
            <a href="/home" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Login </a> 
            </div>
        </div>
    </form>
</div>
@endsection