<?php
/**
 * arquivo para registrar os dados de uma aluno no bando de dados
 */
try
{
    include 'includes/conexao.php';

    $sql = "SELECT id_aluno, nome, cpf
                   date_format('%d/%m/%y', data_nascimento) as data_nascimento
                   from alunos
                   ordem by nome ASC";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    
} catch(exception $e) {
    echo $e->getMessage();
}   
?>
<table>
   <thead>
      <tr>
          <th>ID</th> <TH>Nome</th> <th>CPF</th> <th>Data Nascimento</th>
      </th>
      </thead>
      <tbody>
      <?php while($alunos = $stmt->fetchobject()): ?>
      <tr>
           <td><?= $alunos->idade ?> </td> <td><?= $alunos->nome ?> </td>
           <td><?= $alunos->cpf ?> </td> <td><?= $alunos->data_nascimento ?> </td>
      </tr>
      <?php endwhile ?>
      </tbody>
    </table>