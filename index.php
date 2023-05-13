<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Anavrin</title>
</head>
<body>
	<!-- to go back to the original light background<nav class="navbar navbar-expand-lg navbar-light bg-light" >-->
	<!--An override of the background color-->
	<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" id="text">Anavrin</a>
    <!--Dropdown-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon caret"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="text">
            Men
          </button>
          <!--Dropdown items-->
          <ul class="dropdown-menu dropdown-menu" role="menu">
            <li><a class="dropdown-item" href="#">Shirts</a></li>
            <li><a class="dropdown-item" href="#">Pants</a></li>
            <li><a class="dropdown-item" href="#">Shoes</a></li>
            <li><a class="dropdown-item" href="#">Accessories</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<!--Bootstrap's JavaScript-->
	<script type="text/javascript" src="bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>