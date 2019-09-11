<?php
try
{
   include 'imcludes/conexao.php';

   $stmt = $conexao -> prepare("SELECT * FROM aluno ORDER BY nome ASC ");
   $stmt -> execute();

}  catch(Exception $e) {
         echo $e -> getMessage();
}

?>
<link href = "css/estilo.css" type= "text/css" rel= "stylesheet" />


<?php include_once 'includes/cabecalho.php' ?>


<?php include_once 'includes/cabecalho.php' ?>

<table>
    <thead>
        <tr>
           <th>ID</th>
           <th>Nome</th>
        </th>
    </thead>
    <tbody>

<?php while($cursos= $stmt -> fetchObject()): ?>
<tr>
    <td><? = $cursos->id ?></td>
    <td><? = $cursos-> nome ?></td>
</tr>
<?php endwhile ?>
</tbody>    
</table>
