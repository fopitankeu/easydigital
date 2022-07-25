
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="..\..\bootstrap-5.1.1-dist\css\bootstrap.min.css">
</head>
<body>
<div class="d-flex flex-column flex-shrink-0 p-2 text-white bg-dark" style="width: 250px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <img src="..\..\img\02.png" alt="logo" sizes="" srcset=""  width="70" height="70">
      <span class="fs-4">DASHBOARD</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active bg-warning mt-2" aria-current="page">
       <img src="..\..\img\icons8-home-64.png" alt="" srcset="" class="m-1">
          Home
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white btn-warning mt-2">
         <img src="..\..\img\icons8-dashboard-48.png" alt="" srcset="" class="m-1">
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white btn-warning mt-2">
        <img src="..\..\img\icons8-calendar-50(1).png" alt="" srcset="" class="m-1">
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white btn-warning mt-2">
         <img src="..\..\img\icons8-product-48.png" alt="" srcset="" class="m-1">
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white btn-warning mt-2">
          <img src="..\..\img\icons8-customer-50.png" alt="" srcset="" class="m-1">
          Customers
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle btn btn-dark" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="..\..\img\profile_picture_20220113115735.jpg" alt="" width="50" height="50" class="rounded-circle me-2">
        <strong>User</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>

</div>
</body>
<script src="..\..\bootstrap-5.1.1-dist\js\bootstrap.js"></script>
<script src="..\..\bootstrap-5.1.1-dist\js\bootstrap.bundle.min.js"></script>
</html>