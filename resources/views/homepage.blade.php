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
<h2 class="bg-success bg-gradient text-light">Item List</h2>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/detail" class="btn btn-primary">Detail</a>
  </div>
</div>







@endsection