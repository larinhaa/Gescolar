<?php 
try 
{
    include 'includes/conexao.php';
    //lista de alunos 
    $stmt_alunos = $conexao->prepare("SELECT * FROM alunos ORDER BY nome ASC");
    $stmt_alunos->execute();

    //lista de turmas 
    $stmt_turmas = $conexao->prepare("SELECT * FROM turma");
    $stmt_turma->execute();

    //dados da matricula antes de editas 
    $stmt_matricula = $conexao->prepare("SELECT *FROM turma");
    $stmt_matricula->bindparam() $_request ['id_turma']);
    $stmt_matricula->bindparam() $_request['id_aluno']);
    $stmt_matricula->execute();


    $dados_matricula = $stmt_matricula->fetchobjetct();


//para atualizar a matricula
if(insset($_REQUEST['ATUALIZAR']))
{
    $sql = "UPDATE matricula SET id_turma = ?, id aluno = ?, data_matricula = ?
        WHERE ID_TURMA = ? and ID_ALUNO =?;"
        $stmt = $conexao->prepare($sql);
        $stmt->bindparam(1,$_request ['id_turma']);
        $stmt->bindparam(2,  $_request ['id_aluno']);
        $stmt->bindparam(3,  $_request ['data matricula']);
        $stmt->bindparam(4,  $_request['id_turma']);
        $stmt->bindparam(5,  $_request['id_aluno']);
        $stmt ->execute();

        echo "Matricula atualizada com sucesso!";
    }
} catch(Exepition $e) {
    echo $e->getmenssage();
}
?>
<link href="css/estilo.css" type="text/css" rel="stylesheet"/>
<?php include_once 'includes/cabeçalho.php' ?>
<div>
<legend> editar matricula</legend>
<form action="editar_matricula.php?atualizar=true" method="post">
<label> selecione a turma:
<select name="id_turma">
<?php while ($turma = $stmt_turmas->fetchobjct()): ?>
<option value="<?= $turma == $turma->id) ? "selected" ; "" ?>
<?= $turma >descricao ?>