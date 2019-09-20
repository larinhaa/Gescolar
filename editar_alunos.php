<?php 
try
{
     if(isset($_REQUEST['atualizar']))
    {
        include 'includes/conexao.php';

        $sql = "UPDATE alunos SET nome = ?,data_nascimente = ?, sexo=?,
                                         genero = ?, cpf=?, cidade = ?, estado =?,
                                         bairro = ?, rua = ?, cep =?
                where id_aluno = ?) ";

      $stmt = $conexao->prepare($SQL);
      $stmt->BINDparam(1, $_REQUEST['nome']);     
      $stmt->BINDparam(2, $_REQUEST['Data_nascimento']);  
      $stmt->BINDparam(3, $_REQUEST['Sexo']);  
      $stmt->BINDparam(4, $_REQUEST['genero']);  
      $stmt->BINDparam(5, $_REQUEST['cpf']);  
      $stmt->BINDparam(6, $_REQUEST['cidade']);                                
      $stmt->BINDparam(7, $_REQUEST['estado']);  
      $stmt->BINDparam(8, $_REQUEST['bairro']);  
      $stmt->BINDparam(9, $_REQUEST['rua']);  
      $stmt->BINDparam(10, $_REQUEST['cep']);  
      $stmt->BINDparam(11, $_REQUEST['id-aluno']); 
      $stmt ->execute(); 
    } 

        if(isset($_REQUEST['Excluir']))
    {
        $stmt = $conexao ->prepare("DELETE FROM alnuo WHERE id = ?");
        $stmt ->bindparam(1, $_REQUEST['id_aluno']);
        $stmt ->execute();
        hearder("location: lista_alunos.php");
    }    
    
    }catch(exception $e){
        echo $e->getmessage();
    }


?>
<link href="css/estilo.css" type="text/css" rel="stylesheet"/>
<?php include_once 'includes/cabecalho.php' ?>
<div>
<fieldset>
   <legend>Cadastro de Aluno </legend>
   <form action="editar alunos.php?atualizar=true">
       <label>Nome: 
       <input type="text" name="nome" required value="<?=$aluno->nome ?>" /> 
        </label>
       <label>cidade:
       <input type="text" name="nome" required value="<?=$aluno->cidade?>"/> 
       </label>
       <label>CEP: 
       <input type="text" name="nome" required value="<?=$aluno->cep?>" /> 
       </label>
       <label>Bairro: 
       <input type="text" name="nome" required value="<?=$aluno->bairro?>" /> 
       </label>
       <label>rua: 
       <input type="text" name="nome" required value="<?=$aluno->rua?>"/> 
       </label>
       <label>estado: 
       <input type="text" name="nome" required value="<?=$aluno->cestado?>" /> 
       </label>
       <label>data nascimento: 
       <input type="text" name="nome" required value="<?=$aluno->data_nascimento?>" /> 
       </label>

       <a href="editar_alunos.php?excluir=true&id=<?= $aluno->id ?> ">Excluir</a>

       <button type="submit">Salvar</button>
</form>
</legend>
</div>       
