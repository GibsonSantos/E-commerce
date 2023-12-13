<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
  $total = ProductController::cartItem();
}

?>

<h3>Header Page</h3>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">E-Comm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="\">Home </a>
      </li>
      <li class="">
        <a class="nav-link" href="#">Orders </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="#">Cart({{$total}})</a>
        @if(Session::has('user'))
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">Logout</a>
      </li>
      @else
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/login">Login</a>
      </li>
      @endif

      </li>
    </ul>
    <nav class="navbar navbar-light bg-light justify-content-between">

        <div class="form-group" style="padding-right: 20px">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </div>
        <div class="form-group">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </div>

</nav>
  </div>
</nav>
