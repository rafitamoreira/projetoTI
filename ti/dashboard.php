<?php
// caso não tenha o login não deixa entrar nas paginas
session_start();
if( !isset($_SESSION['username']) ){
  header( "refresh:5;url=index.php" );
  die("Acesso restrito." );
}
// Lê linha a linha até ao fim do ficheiro
$valor_temperatura = file_get_contents("api/files/temperatura/valor.txt");
$hora_temperatura = file_get_contents("api/files/temperatura/hora.txt");
$nome_temperatura = file_get_contents("api/files/temperatura/nome.txt");

$valor_humidade = file_get_contents("api/files/humidade/valor.txt");
$hora_humidade = file_get_contents("api/files/humidade/hora.txt");
$nome_humidade = file_get_contents("api/files/humidade/nome.txt");

$valor_luminosidade = file_get_contents("api/files/luminosidade/valor.txt");
$hora_luminosidade = file_get_contents("api/files/luminosidade/hora.txt");
$nome_luminosidade = file_get_contents("api/files/luminosidade/nome.txt");

$valor_fumo = file_get_contents("api/files/fumo/valor.txt");
$hora_fumo = file_get_contents("api/files/fumo/hora.txt");
$nome_fumo = file_get_contents("api/files/fumo/nome.txt");

$valor_chuva = file_get_contents("api/files/chuva/valor.txt");
$hora_chuva = file_get_contents("api/files/chuva/hora.txt");
$nome_chuva = file_get_contents("api/files/chuva/nome.txt");

// ATUADORES
$valor_ponte = file_get_contents("api/files/ponte/valor.txt");
$hora_ponte = file_get_contents("api/files/ponte/hora.txt");
$nome_ponte = file_get_contents("api/files/ponte/nome.txt");

$valor_luzdarua = file_get_contents("api/files/luzdarua/valor.txt");
$hora_luzdarua = file_get_contents("api/files/luzdarua/hora.txt");
$nome_luzdarua = file_get_contents("api/files/luzdarua/nome.txt");

$valor_parque = file_get_contents("api/files/parque/valor.txt");
$hora_parque = file_get_contents("api/files/parque/hora.txt");
$nome_parque = file_get_contents("api/files/parque/nome.txt");

$valor_alarme = file_get_contents("api/files/alarme/valor.txt");
$hora_alarme = file_get_contents("api/files/alarme/hora.txt");
$nome_alarme = file_get_contents("api/files/alarme/nome.txt");

$valor_radio = file_get_contents("api/files/radio/valor.txt");
$hora_radio = file_get_contents("api/files/radio/hora.txt");
$nome_radio = file_get_contents("api/files/radio/nome.txt");

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
  <style>
    .img {
      border-radius: 50%;
      width: 125px;
      height: 125px;
    }
  </style>
</head>


<body>

  <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #C9E2C3;">
    <div class="container-fluid">
      <a class="navbar-brand" href="dashboard.php" >Dashboard EI-TI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php" style="color: white;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lista.php" style="color: white;" >Histórico</a>
          </li>
        </ul>

        <form class="d-flex text">
          <a href="logout.php" class="btn bg-transparent" style=" text-decoration:none; color: white;">Logout</a>
        </form>

      </div>
    </div> 
  </nav>
  <br>
  <div class="container">
    <div class="card" >
     <div class="card-body">
      <img src="estg.png" class="float-end" alt="estg" style="max-width: 300px;">
      <h1 class="card-title">Servidor de Iot</h1>
      <p class="card-text">Bem vindo <b>Cidadão da FutureCity</b></p>
      <p>Teconologias de Internet - Engenheria Informática</p>
    </div>
  </div>
</div> 

<!-- container com valores lidos do txt e imagem de sensores-->
<br><br>
<center>
  <h1 style="display: inline-block;" >Sensores</h1>
</center>
<br>

<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-header text-center">
          <b >luminosidade: </b><?php 
          if ($valor_luminosidade == 1) {
           echo "Alta";
         }
         else {
          echo "Baixa";
        }
        ?>
      </div>
      <div class="card-body text-center"> 
       <img src="dia.png" alt="luminosidade">
     </div>
     <div class="card-footer text-center"><b>Atualização:</b> <?php echo $hora_luminosidade ; ?> - <a href="historico.php?sensor=luminosidade">Histórico</a></div>
   </div>
 </div>

 <div class="col-sm-4">
  <div class="card">
    <div class="card-header text-center">
      <b>Temperatura: </b><?php echo $valor_temperatura; ?>ºC 
    </div>
    <div class="card-body text-center">
     <img src="temperature.png" alt="Temperatura">
   </div>
   <div class="card-footer text-center"><b>Atualização:</b> <?php echo $hora_temperatura ; ?> - <a href="historico.php?sensor=temperatura">Histórico</a></div>
 </div>
</div>

<div class="col-sm-4">
  <div class="card">
    <div class="card-header text-center">
      <b>Humidade: </b><?php echo $valor_humidade; ?>% 
    </div>
    <div class="card-body text-center">
     <img src="humidade.png" alt="Humidade" width="125" height="125">
   </div>
   <div class="card-footer text-center"><b>Atualização:</b> <?php echo $hora_humidade ; ?> - <a href="historico.php?sensor=humidade">Histórico</a></div>
 </div>
</div>
</div>
</div>

<br>
<div class="container">
  <div class="row">
   <div class="col-sm-6">
    <div class="card">
      <div class="card-header text-center">
        <b>Fumo: </b><?php echo $valor_fumo; ?>%
      </div>
      <div class="card-body text-center">
       <img src="fumo.png" alt="Fumo"  class="img">
     </div>
     <div class="card-footer text-center"><b>Atualização:</b> <?php echo $hora_fumo; ?> - <a href="historico.php?sensor=fumo">Histórico</a></div>
   </div>
 </div>



 <div class="col-sm-6">
  <div class="card">
    <div class="card-header text-center">
      <b>Chuva: </b><?php echo $valor_chuva; ?>% 
    </div>
    <div class="card-body text-center">
     <img src="chuva.png" alt="Chuva" class="img" >
   </div>
   <div class="card-footer text-center"><b>Atualização:</b> <?php echo $hora_chuva ; ?> - <a href="historico.php?sensor=chuva">Histórico</a></div>
 </div>
</div>
</div>
</div>
</div>

<br><br>
<center>
  <h1 style="display: inline-block;" >Atuadores</h1>
</center>
<br>
<!-- ATUADORES        -->

<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-header text-center">
          <b>Ponte: </b><?php 
          if ($valor_ponte == 1) {
           echo "Aberta";
           $imagem="ponte1.png";
         }
         else {
          echo "Fechada";
          $imagem="ponte.png";
        }
        ?>
      </div>
      <div class="card-body text-center">
        <img src=<?php echo $imagem ?>  'class="img"'>
      </div>
      <div class="card-footer text-center"><b>Atualização:</b> <?php echo $hora_ponte ; ?> - <a href="historico.php?sensor=ponte">Histórico</a></div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <div class="card-header text-center">
        <b>Luz da Rua: </b><?php 
        if ($valor_luzdarua == 1) {
         echo "Ligado";
       }
       else {
        echo "Desligado";
      }
      ?>
    </div>
    <div class="card-body text-center">
      <img src=luzdarua.png class="img">
    </div>
      <div class="card-footer text-center"><b>Atualização:</b> <?php echo $hora_luzdarua ; ?> - <a href="historico.php?sensor=luzdarua">Histórico</a></div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card">
    <div class="card-header text-center">
      <b>Parque: </b><?php 
      if ($valor_parque == 1) {
       echo "Cheio";
     }
     else {
      echo "Vazio";
    }
    ?>
  </div>
  <div class="card-body text-center">
    <img src=parque.png class="img">
  </div>
  <div class="card-footer text-center"><b>Atualização:</b> <?php echo $hora_parque ; ?> - <a href="historico.php?sensor=parque">Histórico</a></div>
</div>
</div>
</div>
</div>
<br>


<div class="container">
  <div class="row">
   <div class="col-sm-6">
    <div class="card">
      <div class="card-header text-center">
        <b>Alarme: </b><?php 
      if ($valor_alarme == 1) {
       echo "Tocar";
     }
     else {
      echo "Desligado";
    }
    ?>
      </div>
      <div class="card-body text-center">
       <img src="alarme.png" alt="Alarme"  class="img">
     </div>
     <div class="card-footer text-center"><b>Atualização:</b> <?php echo $hora_alarme; ?> - <a href="historico.php?sensor=alarme">Histórico</a></div>
   </div>
 </div>



 <div class="col-sm-6">
  <div class="card">
    <div class="card-header text-center">
      <b>Rádio: </b><?php 
      if ($valor_radio == 1) {
       echo "Ligado";
     }
     else {
      echo "Desligado";
    }
    ?>
    </div>
    <div class="card-body text-center">
     <img src="radio.png" alt="radio" class="img" >
   </div>
   <div class="card-footer text-center"><b>Atualização:</b> <?php echo $hora_radio; ?> - <a href="historico.php?sensor=radio">Histórico</a></div>
 </div>
</div>
</div>


<!--        WEBCAM        -->
<br><br>
<center>
  <h1 style="display: inline-block;" >Webcam</h1>
</center>
<br>
<div class="container">
  <div class="row">
   <div class="col-*-3">
    <div class="card">
      <div class="card-header text-center">
        <b>Webcam</b> 
      </div>
      <div class="card-body text-center">
        <?php
        echo "<img src='webcam.jpg?id=".time().", width='125', height='125' >"
        ?>
      </div>
      <div class="card-footer text-center"><b>Atualização:</b> 
        <?php
        $filename = 'webcam.jpg';
        if (file_exists($filename)) {
          echo date ("Y-m-d H:i:s", filemtime($filename));
        }
        ?>
        - <a href="historico.php?sensor=humidade">Histórico</a></div>
      </div>
    </div>
  </div>
</div>

<!-- tabela com valores lidos do txt-->
<br>
<div class="container">
  <br>
  <div class="card" >

    <div class="card-header">Tabela de Sensores</div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Tipo de Dispositivo IoT</th>
            <th scope="col">Valor</th>
            <th scope="col">Data de Atualização</th>
            <th scope="col">Estado Alertas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><?php echo $nome_luminosidade; ?></th>
            <td><?php 
            if ($valor_luminosidade == 1) {
             echo "Alta";
           }else {
            echo "Baixa";
          }?>
          </td>
            <td><?php echo $hora_luminosidade; ?></td>
            <td><span class="badge rounded-pill bg-success">Ativo</span></td>
          </tr>
          <tr>
            <th scope="row"><?php echo $nome_temperatura; ?></th>
            <td><?php echo $valor_temperatura; ?>º</td>
            <td><?php echo $hora_temperatura; ?></td>
            <td><span class="badge rounded-pill bg-danger">Desativo</span></td>
          </tr>   
          <tr>
            <th scope="row"><?php echo $nome_humidade; ?></th>
            <td><?php echo $valor_humidade; ?>%</td>
            <td><?php echo $hora_humidade; ?></td>
            <td><span class="badge rounded-pill bg-danger">Muito Forte</span></td>
          </tr>
          <tr>
            <th scope="row"><?php echo $nome_fumo; ?></th>
            <td><?php echo $valor_fumo; ?>%</td>
            <td><?php echo $hora_fumo; ?></td>
            <td><span class="badge rounded-pill bg-warning text-dark">Warning</span></td>
          </tr>
          <tr>
            <th scope="row"><?php echo $nome_chuva; ?></th>
            <td><?php echo $valor_chuva; ?>%</td>
            <td><?php echo $hora_chuva; ?></td>
            <td><span class="badge rounded-pill bg-warning text-dark">Warning</span></td>
          </tr>
          <tr>
            <th scope="row">Ponte</th>
            <td><?php 
            if ($valor_ponte == 1) {
             echo "Aberta";
           }else {
            echo "Fechada";
          }
        ?></td>
        <td><?php echo $hora_ponte; ?></td>
        <td><span class="badge rounded-pill bg-success">Ativo</span></td>
      </tr>
      <tr>
        <th scope="row">Luz da Rua</th>
        <td><?php 
        if ($valor_luzdarua == 1) {
         echo "Ligado";
       }else {
        echo "Desligado";
      }
    ?></td>
    <td><?php echo $hora_luzdarua; ?></td>
    <td><span class="badge rounded-pill bg-success">Ativo</span></td>
  </tr>
  <tr>
    <th scope="row">Alarme</th>
    <td><?php 
    if ($valor_alarme == 1) {
     echo "Ligado";
   }else {
    echo "Desligado";
  }
?></td>
<td><?php echo $hora_alarme; ?></td>
<td><span class="badge rounded-pill bg-success">Ativo</span></td>
</tr>
<tr>
  <th scope="row">Rádio</th>
  <td><?php 
  if ($valor_radio == 1) {
   echo "Ligado";
 }else {
  echo "Desligado";
}
?></td>
<td><?php echo $hora_radio; ?></td>
<td><span class="badge rounded-pill bg-success">Ativo</span></td>
</tr>
</tbody>
</table>
</div>
</div>
</div> 
<br>
</body>
</html>