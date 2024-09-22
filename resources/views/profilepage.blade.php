@extends('navbar')
@section('main')

<body>
<nav class="navbar  navbar-expand-lg text-light m-0 my-0">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-0 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/home">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/cart">Cart</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/profile">Profile</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/logout">Logout</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
@yield('main')
</body>
<h2 class="bg-success bg-gradient text-light">Profile</h2>

<div class="login">
            <div>
                <input type="text" placeholder="Email" class="inputLogin" name="email" value={{ Cookie::get('email') == null ? "" : Cookie::get('email')}}>
            </div>
            <div>
                <input type="text" placeholder="Password" class="inputLogin" name="password" value={{ Cookie::get('password') == null ? "" : Cookie::get('password')}}>
            </div>
            @if ($errors->any())
                <p>{{$errors->first()}}</p>
            @endif
            <div>
            <a href="/update" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
            Update
            </a>
            </div>  
            </div>
        </div>






@endsection