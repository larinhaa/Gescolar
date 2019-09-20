<?php
/**
 * o arquivo conexão.php será usado por todas as parginas que necessitem
 * realizar uma conexão com o banco de dados. Para não termos que digitar
 * os dados de acesso ao bando em todas as páginas, centralizamos eles 
 * em uma único arquivo e utilizamos o comando include, quando for necessario. */

 /**
  * o laço try {} catch serve para tentar executar um código. Caso algum erro 
  * ocorra ele é capturado no catch, onde uma exeção é disparada e podemos 
  * pegar a mensagem deerro com o método getmessage(), e customizar a mensagem
  *de erro para o usuário.  
  */

  try {
      $usuario = "root"; //usuario do MySQL
      $senha = ""; //senha do MySQL
      $Host = "locashost"; //host onde o servidor MySQL está sendo executado
      $Bd = "Gescolar"; //nome do banco de dados

    //aqui vamos definir configurações para o trtatamento de erros e acentos.
    $config = Array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXEPTION,
                     PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8");
                     
   //AQUI CRIAMOS UMA VÁRIAVEL QUE ABRIGA O OBJETO PDO, A CONEXÃO COM O MYSQL
   $conexao = new Pdo("mysql:host=". $Host . ";bdname=" . $Bd, $usuario, $senha, $config);

  } catch(exception $e) {
  echo $e->getMessage();
}