<?php
try
{
    include 'include/conexao.php';

    if(isset($_REQUEST['atualizar']))
    {

        $sql = "UPDATE curso SET nome = ? WHERE id = ? ";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $_REQUEST['nome']);
        $stmt->bindParam(2, $_REQUEST['id_curso']);
        $stmt->execute();
    }

    if(isset($_REQUEST['excluir']))
    {
        $stmt = $conexao->prepare("DELETE FROM curso WHERE id = ?");
        $stmt->bindParam(1,$_REQUEST['id_curso']);
        $stmt->execute();
        header("location: lista_cursos.php");
    }

    $stmt = $conexao->prepare("SELECT * FROM curso WHERE id = ?");
    $stmt->bindParam(1,$_REQUEST['id_curso']);
    $stmt->execute();

    $curso = $stmt->fechObject();

} catch(Exception $e) {
    echo $e->getMessage();
}
?>
<link href="css/estilos.css" type="text/css" rel="stylesheet" />
<?php include_once  'include/cabecalho.php' ?>
<div>
<fieldset>
    <legend>Cadastro de Curso </legend>
        <form action="editar_curso.php?atualizar=true">
            <label>Nome:
                 <input type="text" name="nome" required value="<?= $curso->nome ?>" />
            </label>

            <a href="editar_curso.php?excluir=true&ifd=<?= $curso->id ?>">Excluir</a>

            <button type="submit">Salvar</button>
        </form>
    </legend>
</div>
