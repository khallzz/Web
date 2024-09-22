@extends('navbar')
@section('main')
<div class="sectionRegister">
    <div class="backgroundRegister">    
        <form action="/register" method="POST">
            @csrf
            <div class="textRegister">
               <h3>Register</h3>
            </div>
            <div class="register">
                <div>
                    <input type="text" placeholder="Full Name" class="inputRegister" name="first_name">
                </div>
                <div>
                    <input type="text" placeholder="Email" class="inputRegister" name="email">
                </div>
                <div class="form-check">
                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                Male
                </label>
                </div>
                <div class="form-check">
                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                Female
                </label>
                </div>
                <div>
                    <input type="text" placeholder="Password" class="inputRegister" name="password"> 
                </div>
                <div>
                    <input type="text" placeholder="Last Name" class="inputRegister" name="last_name">
                </div>
                <div>
                    <input type="text" placeholder="Role" class="inputRegister" name="role">
                </div>
                <div>
                    <input type="text" placeholder="Display Picture" class="inputRegister" name="display_picture_link">
                </div>
                <div>
                    <input type="text" placeholder="Confirm Password" class="inputRegister" name="confirm">
                </div>
                <div>
                <a href="/login" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
                    Register
</a>
                </div>  
            </div>
        </form>
    </div>
</div>
@endsection