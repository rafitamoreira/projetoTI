<?php 
session_start();       // diz ao browser para utilizar variáveis de sessão;
session_unset();     // remove todas as variáveis de sessão;
session_destroy();  // destrói a sessão
header( "refresh:1;url=index.php" ); //refresh a página em 1s e link para onde ir
?>