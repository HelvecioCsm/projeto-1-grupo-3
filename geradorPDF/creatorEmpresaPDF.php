<?php 

	require dirname(__DIR__,1). "../dompdf/autoload.inc.php";


?>

<!DOCTYPE html >
<?php
// buscar a conexao

$conectar = mysqli_connect("localhost","root","","miniProjeto");


?>
<html lang="pt-pt">
    <head>
        <meta charset="utf-8"/>


        <link rel="stylesheet" href="css/tabela1.css">
    <title>pagina principal</title>

				


    </head>
<body>

<h4 align="center">lista dos estutantes</h4>
<h4 align="center">Mini Projeto 1 programação web II</h4>
<br>
<br>
<h3 align="center">Professor : Osvaldo Queta</h3>
</aside>

<br>
<br>
<br>
<br>



 
            <?php
// 





$seletor=" SELECT * FROM pessoa AS p INNER JOIN classe AS cl INNER JOIN curso AS cur INNER JOIN correioeletronico AS cor ON p.id=cl.chaveEstrageiraClasse AND p.id=cur.chaveEstrageiraCurso AND p.id=cor.chaveEstrageiraCorreio ";

 echo"<table border=1 >";
 echo"<tr>"; 
 echo"<th>nº</th>";

 echo"<th>Nome</th>";
 echo"<th>sexo</th>";
 echo"<th>B.I</th>";
 echo"<th>Curso</th>";
 echo"<th>Classe</th>";
 echo"<th>Nacionalidade</th>";
 echo"<th>Telefone</th>";
 echo"<th>Email</th>";
 echo"<th>Data Nascimento</th>";

 echo"</tr>";
 $i=0;
$query= mysqli_query($conectar,$seletor);
while ($buscar=mysqli_fetch_assoc($query)) {
 
$i=$i+1;
//,
echo"<tr>";

	

echo"<td id='id'>".$i."</th>";

echo"<td>".$buscar['nome']."</td>";
echo"<td>".$buscar['sexo']."</td>";
echo"<td>".$buscar['bi']."</td>";
echo"<td>".$buscar['cusro']."</td>";
echo"<td>".$buscar['classe']."</td>";
echo"<td>".$buscar['nacionalidade']."</td>";

echo"<td>".$buscar['telefone']."</td>";
echo"<td>".$buscar['email']."</td>";
echo"<td>".$buscar['dataNascimento']."</td>";


echo"</tr>";

}

  echo"</table> ";   




?>   
        
     </div>

        <div>
            



        </div>
    </section> 

   
</div>
</section>
</body>

</html>