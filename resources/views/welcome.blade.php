<!DOCTYPE html>

<html>

<head>

	<title>Laravel 5.5</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>

<body>


<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">MENU</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">CRUD</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">AJAX</a>
    </li>

  </ul>
</nav>


<div class="container">

    @yield('content')

</div>


</body>

</html>
