<?php

    header('Content-Type: text/html; charset=utf-8');

    //var_dump(file_get_contents("php://input"));
 
    //echo $_SERVER['REQUEST_METHOD'];

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(isset($_POST['nome']) && isset($_POST['valor']) && isset($_POST['hora']) ){
            file_put_contents("files/".$_POST['nome']."/nome.txt",$_POST['nome']);
            file_put_contents("files/".$_POST['nome']."/valor.txt",$_POST['valor']);
            file_put_contents("files/".$_POST['nome']."/hora.txt",$_POST['hora']);
            file_put_contents("files/".$_POST['nome']."/log.txt",$_POST['hora'].";".$_POST['valor'].PHP_EOL,FILE_APPEND);
        }else{
            echo "ERRO: Falta algum elemento";
                    http_response_code(400);
        }

    }elseif($_SERVER["REQUEST_METHOD"] == "GET"){
        if ( isset( $_GET["nome"] ) )

           echo file_get_contents("files/".$_GET['nome']."/valor.txt");

        else{
        echo "ERRO: Falta algum elemento";
        http_response_code(400);
        }
    }else{
        echo "Metodo nao permitido";
                http_response_code(403);

    }
  ?>