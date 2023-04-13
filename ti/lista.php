<?php
session_start();
if( !isset($_SESSION['username']) ){
  header( "refresh:5;url=index.php" );
  die("Acesso restrito." );
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="5">
  <title>Plataforma IoT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
  <link rel="stylesheet" href="style.css">

 <body>

   <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #C9E2C3;">
    <div class="container-fluid">
      <a class="navbar-brand" href="dashboard.php" >Dashboard EI-TI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    

      <form class="d-flex text">
        <button class="btn " style="background-color: #C9E2C3;"><a href='logout.php' style="text-decoration:none; color: white;">Logout</a></button>
      </form>

    </div>
  </div> 
</nav>
<br>

<div class="my-3 p-3 bg-body rounded shadow-sm">
  <h6 class="border-bottom pb-2 mb-0">Dispositivos IoT</h6>
  <div class="d-flex text-muted pt-3">
       <img class="test" src="luminosidade.png" width="125" height="125">
    <div class="pb-3 mb-0 lh-sm border-bottom w-100">
      <div class="d-flex justify-content-between">
        <strong class="text-gray-dark"> luminosidade</strong>
        <a href="historico.php?sensor=luminosidade">Histórico</a>
      </div>
    </div>
  </div>
  <div class="d-flex text-muted pt-3">
      <img class="test" src="temperatura.png" width="125" height="125">
    <div class="pb-3 mb-0 lh-sm border-bottom w-100">
      <div class="d-flex justify-content-between">
        <strong class="text-gray-dark"> Temperatura</strong>
        <a href="historico.php?sensor=temperatura">Histórico</a>
      </div>
    </div>
  </div>
  <div class="d-flex text-muted pt-3">
    <img class="test" src="humidade.png " width="125" height="125">
    <div class="pb-3 mb-0 lh-sm border-bottom w-100">
      <div class="d-flex justify-content-between">
        <strong class="text-gray-dark">Humidade</strong>
        <a href="historico.php?sensor=humidade">Histórico</a>
      </div>
    </div>
  </div>
  <div class="d-flex text-muted pt-3">
    <img class="test" src="ponte.png " width="125" height="125" >
    <div class="pb-3 mb-0 lh-sm border-bottom w-100">
      <div class="d-flex justify-content-between">
        <strong class="text-gray-dark " style="line-height: 7;" >&nbsp; Ponte</strong>
        <a href="historico.php?sensor=ponte">Histórico</a>
      </div>
    </div>
  </div>
</body>
</html>