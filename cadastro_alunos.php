<?php
/** 
 * arquivos para resgistarar os dados de um aluno no banco de dados 
 */
if(isset($_REQUEST['cadastrar']))
{
    try
    {
        include 'includes/conexao.php';

        $sql = "INSERT INTO alunos (nome,data_nascimento, sexo,
        genero, cpf, cidade, estado,
        bairro, rua, cep)
        values (?,?,?,?,?,?,?,?,?,?)";

        $stmt = $conexao->prepare($sql);
        $stmt ->bindparam(1, $_REQUEST['nome']);
        $stmt ->bindparam(2, $_REQUEST['data_nascimento']);
        $stmt ->bindparam(2, $_REQUEST['sexo']);
        $stmt ->bindparam(2, $_REQUEST['genero']);
        $stmt ->bindparam(2, $_REQUEST['cpf']);
        $stmt ->bindparam(2, $_REQUEST['cidade']);
        $stmt ->bindparam(2, $_REQUEST['estado']);
        $stmt ->bindparam(2, $_REQUEST['bairro']);
        $stmt ->bindparam(2, $_REQUEST['rua']);
        $stmt ->bindparam(2, $_REQUEST['cep']);

    } catch(Exception $e) {
        echo $e->getmessage();
    }
}

?>
<div>
<fieldset>
      <legend> Cadastro de alunos </legend>
         <form action ="cadastrar_alunos.php?cadastrar-true"> 
         <label> Nome: <input type="text" name="nome" required /> </label>
         <label> Cidade: <input type="text" name="cidade" required /> </label>
         <label> Cep: <input type="text" name="cep" required /> </label>
         <label> Bairro: <input type="text" name="bairro" required /> </label>
         <label> EStado: <input type="text" name="estado" required /> </label>
         <label> Data Nasc: <input type="text" name="data_nascimento" required /> </label>
         <button type="submit"> salvar </button>
    <form>
    </legend>
    </div>
