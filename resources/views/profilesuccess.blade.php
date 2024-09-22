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
          <a class="nav-link" href="/logout">Logout</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
<div>
    
<div class="m-5">
            <div class="card text-bg-white overflow-hidden border-0">
            <alt="..." style="height: 580px; width: 37,5%;">
                <div class="card-img-overlay">
                    <h1 class="card-text text-black text-center" style="margin-top: 250px;">Profile Updated!</h1>
                   
            </div>
   
</div>

@endsection