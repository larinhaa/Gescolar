<?php
session_star();

if(insset($_REQUEST['logar']))
{
    try
    {
        include 'includes/conexao.php';

        $stmt = $conexao -> prepare("SELECT * FROM usuarios WHERE usauarios = ? AND senha = ? ");
        $stmt ->bindparam(1, $_REQUEST['usuario']);
        $stmt ->bondparam (2,sha1($_request['senha']));
        $stmt ->execute();

        // caso o usus\ario seja enquantrado no bd...
        if($stmt->rowcount() > 0) {
            $dados_usuarios-$stmt->fetchoobject(); // pega todos os dados do usuario.

            $_SESSION['gescolar_dados_usuario'] = $dados_usuario; //coloca variavel de sessao

            header("location: index.php"); //redireciona para a pagina inicial 
        }  else{
            header("location: login.php?erro=true"); //caso login der errado 
        }
    } catch(exception $e0) {
        echo $e->getmessage();
    }
}
?>
<link href="css/estilo.css" type="text/css" rel="stylesheet" />

<style>
fieldset { width: 15%;margin-top:10%; }
</style>

<fieldset>
<legend> login </legend>

<form method="post" action="login.php?logar=true">
<label> Usuário:
<input name="usuario" type="text" required />
</label>
<label> Senha:
<input name="senha" type="passaword" required />
</label>
<button type="submit"> Entrar </button>
</form>
</fieldset>

 