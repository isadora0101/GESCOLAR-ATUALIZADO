<?php

//caso o usuario clique em sair
if(isset($_REQUEST['sair'])){ 

  unset ($_SESSION['gescolar_dados_usuario']);      //destroi a sessão de autenticação do usuario.
  header("location: login.php");                    //redireciona para a página de login.
    
}

//protegendo a página contra acesso sem autenticação 
if(!isset($_SESSION['gescolar_dados_usuario'])) {
    header("location: login.php"); //redireciona para o login.

}

//abreviando o nome da variavel que contem os dados do usuario.
$usuario = $_SESSION['gescolar_dados_usuario'];

?>
<!DOCTYPE html>
 <html>
   <head>
      <link href= "css/estilos.css" type = "text/css" rel= "stylesheet"/>
</head>
<body>
   
   <div id="global">
   
     <!-- Exibindo o nome do usuario que esta guardado na sessão, com os outros dados -->

     <h1>GESCOLAR <small>, Bem Vindo <?= $usuario['nome'] ?> </small> </h1>
 
   <?php include_once 'includes/cabecalho.php' ?>

</div>
</body>
</html>