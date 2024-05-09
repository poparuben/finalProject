
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="dashboard.css">
  <style>
    /* Stilizare pentru cardurile produselor */
    .product-card {
      margin-bottom: 20px;
      height: auto;
    }

    .product-img {
      max-width: 100px; /* Lățimea imaginii mici */
      height: auto;
    }
    .card{
      background-color: #444444;
    }
    
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="./adminDashboard.php">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('index') }}">To Site <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </nav>


  <div class="container mt-5">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
          <a href="{{route('addProduct.page')}}" class="list-group-item list-group-item-action">Adauga produse</a>
          <a href="{{route('admin-all-products.page')}}" class="list-group-item list-group-item-action">Toate produsele</a>
          <a href="{{route('admin-all-messages.page')}}" class="list-group-item list-group-item-action">Mesaje</a>
        </div>
      </div>