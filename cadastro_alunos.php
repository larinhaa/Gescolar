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
        $stmt ->bindparam(3, $_REQUEST['sexo']);
        $stmt ->bindparam(4, $_REQUEST['genero']);
        $stmt ->bindparam(5, $_REQUEST['cpf']);
        $stmt ->bindparam(6, $_REQUEST['cidade']);
        $stmt ->bindparam(7, $_REQUEST['estado']);
        $stmt ->bindparam(8, $_REQUEST['bairro']);
        $stmt ->bindparam(9, $_REQUEST['rua']);
        $stmt ->bindparam(10, $_REQUEST['cep']);
        $stmt ->execute();

        echo "aluno inserido com sucesso!" ;

    } catch(Exception $e) {
        echo $e->getmessage();
    }
}

?>
<link href="css/estilo.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/validacao_cad_aluno.js"></script>
<?php include_once 'includes/cabecalho.php' ?>

<div>
<fieldset>
      <legend> Cadastro de alunos </legend>
         <form action ="cadastrar_alunos.php?cadastrar=true" method="post" pnsubmit="validar_cad_aluno()"> 
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
