<?php
// caso não tenha o login não deixa entrar nas paginas
session_start();
if( !isset($_SESSION['username']) ){
  header( "refresh:5;url=index.php" );
  die("Acesso restrito." );
}

// Lê linha a linha até ao fim do ficheiro
    //Se a variavel sensor estiver errada volat para  a dashboard
if ( !isset($_GET["sensor"])){
  header( "refresh:5;url=dasboard.php");
  die( "Erro para entrar no historico.");
}


$_SESSION["sensor"]=$_GET["sensor"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Conexão ao bootstrapp e ficheiro css externo-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="5">
  <title>Plataforma IoT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>
  <!-- código da navbar-->
  <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #C9E2C3;">
    <div class="container-fluid">
      <a class="navbar-brand" href="dashboard.php" >Dashboard EI-TI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">  
          <li class="nav-item">
            <a class="nav-link" href="historico.php?sensor=temperatura" style="color: white;">Temperatura</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historico.php?sensor=luminosidade" style="color: white;">Luminiosidade</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historico.php?sensor=ponte" style="color: white;">Ponte</a>
          </li>
        </ul>
        <form class="d-flex text">
          <a href="logout.php" class="btn bg-transparent" style=" text-decoration:none; color: white;">Logout</a>
        </form>
      </div>
    </div> 
  </nav>

  

  <?php 
  $imagem="".$_SESSION["sensor"].".png";
  ?>
  <!-- imagem do sensor da página-->
  <br><br>
  <img src=<?php echo $imagem ?>  style="max-width: 100px;">
  <h1 style="display: inline-block;" >&nbsp; <?php echo $_SESSION['sensor']; ?></h1>
  <br>


  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col"><b>Data de Atualização</b></th>
          <th scope="col"> <b>Valor</b></th> 
        </tr>
      </thead>
      <tbody>
        <?php 
        $myfile = fopen("api/files/".$_GET['sensor']."/log.txt", "r") or die("Não consegui abrir ficheiro!");
              // Lê linha a linha até ao fim do ficheiro
        while(!feof($myfile)) {
          $linha=fgets($myfile);
          if(!empty($linha)){
            $linha_valores = explode(";","$linha");
            echo ("<tr>"."<td>".$linha_valores[0]."</td>");
            echo ("<td>".$linha_valores[1]."</td>"."</tr>");
          }
        }
        fclose($myfile);     
        ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>