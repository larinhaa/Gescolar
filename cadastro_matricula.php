<?php
/**
 * arquivo para resgistrar os dados de um aluno no banco de dados.
 */
try
{
    include 'includes/conexao.php';

    //lista de alunos 
    $stmt_alunos - conexao >prepare("SELECT * FROM aluno ORDER BY nome ASC ");
    $stmt_alunos -> execute();

    if (isset($_REQUEST['Cadastrar']))
    {
        $sql = "INSERT INTO matricula (id_turma, id_aluno, data_matricula)
                                       VALUES (?,? NOW()) ";
                                       
                                       
        $stmt = $conexao->prepare($sql);
        $stmt->binParam(1, $_REQUEST['id_turma']);
        $stmt->binParam(2, $_REQUEST['id_aluno']);
        $stmt->execute();

        echo "Matricula realizada com sucesso!";
    }
} catch(Exeption $e){
    echo $e->getMessage();
}
?>
<link href="css/estilo.css" type="text/css" rel="stylesheet"/>

<?php include_once 'includes/cabeçalho.php' ?>
<div>
<fieldset>
<legend> Nova matricula </legend>
<form action="cadastro matricula.php?cadastrar=true" method="post">
<label>
<select name="id_turma">
<?php while($turma = $dtmt_turmas->fetchoObject()): ?>
<option value="<?= $turma->id ?>"> <?=$turma->descricao ?> </option>
<?php endwhile ?>
</select>
</label>
<label>
<select name="id_aluno">
<?php while($aluno = $dtmt_alunos->fetchoObject()): ?>
<option value="<?= $alunos->id ?>"> <?=$aluno->nome ?> </option>
<?php endwhile ?>
</select>
</label>
<button type="submit">Salvar Matrícula</button>
</form>
</legend>
</fieldset>
</div>;