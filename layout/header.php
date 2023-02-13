<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo $title ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
<style>
  a, .nav-link,.navbar-brand {
    color: white;
}
    </style>
</head>
<body>
  <div class="container" >
    <div class="row">
  <nav class="navbar navbar-expand-lg" style="background-color: rgb(65, 7, 109);" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> Aliakbar Kamali</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../layout/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../layout/ex1.php">Exercise1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../layout/variable.php">Exercise3 (variable)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../layout/controlflow.php">Exercise4 (controlflow)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../layout/array.php">Exercise5 (array)</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div> 
  <div class="row" style="margin-top: 10px; margin-bottom: 10px; margin-right: 5px;">
    <div class="col-sm-3" style="background-color: rgba(228, 235, 194, 0.353);">
      <h3>Simple CRUD APP</h3>
      <ul class="sidebar">
        <li>
          <a href="../crud1/create.php" style="color: rgb(18, 5, 194);">Create</a>
        </li>
        <li>
        <a href="../crud1/create.php" style="color: rgb(18, 5, 194);">Create</a>
        </li>
    </ul>
      some thing here
    </div>
    <div class="col-sm-9">