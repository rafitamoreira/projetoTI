<?php 

session_start();
$_SESSION['nome_variavel'] = "valor_variavel";
//Dados de login
$username="123";
$password="123";
$username1="admin";
$password1="admin";

// Condição para fazer login está correto(caso sim entrada na pagina principal dashboard) ou errado tentar outraves
if (isset($_POST['username']) && isset($_POST['password'])){
  if ($_POST['username'] == $username && $_POST['password'] == $password || $_POST['username'] == $username1 && $_POST['password'] == $password1) {
    echo "Dados corretos";
    $_SESSION["username"]=$_POST['username'];
    header( "refresh:1;url=dashboard.php" );
  }
  else
  {
    echo "Dados incorretos";
  }
}
?>

<!doctype html>
  <html lang="en">
  <head>
    <title> index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      form{
        width: 350px;
        padding: 15px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>
    <!-- script retirado do bootstrap ligação ao mesmo-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- página para introduzir user e password-->
    <div class="container"> 
     <form method="post">
      <img src="estg.png" alt="estg">
      <div class="mb-3">
        <label class="form-label">Username:</label>
        <input type="text" name="username" class="form-control" placeholder="Escreva o Username" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password:</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Escreve a Password" required>
        <label class="form-check-label"></label>
      </div>
      <button type="submit" class="btn" style="background-color: #59A646; color: white;">Submeter</button>
    </form>
  </div>

</body>
</html> 