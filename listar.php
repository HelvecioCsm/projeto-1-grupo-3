<!DOCTYPE html >
<?php
// buscar a conexao
require_once "conexao.php";
session_start();

?>
<html lang="pt-pt">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="./css/estilo.css">
        <link rel="stylesheet" href="./css/lista.css">
        <link rel="stylesheet" href="./css/tabela.css">
        <link rel="stylesheet" href="./css/td.css">
    <title>pagina principal</title>

    </head>
<body>
<!-- SECCAO DO MENU-->
    <section class="menu">
    <h2 id="Ni">MINI  PROJECTO I </h2>
<ul>

</ul>
    </section>
<ul class="mn">
<a href="index.html"> <li >Inicio</li></a> 
   <a href="registrar.php"> <li>Registrar</li></a>
    <li id="ativo">listar</li>
   <a href="geradorpdf.php"> <li>relatorio</li></a>
</ul>

<aside>

</aside>

    <section class="corpo">
       

<a href=""></a>
     
        <div class="cartaoC1" >

      <div></div>
          
            <?php
// 
if (isset($_GET['idA'])) {
 $_SESSION['actualizar'] =$_GET['idA'];
 header("Location:Editar.php");
}
if (isset($_GET['idE'])) {
 

    $eliminar=$_GET['idE'];
    $limpar=" DELETE  FROM curso where chaveEstrageiraCurso='$eliminar'";
    $queryy=mysqli_query($conectar,$limpar); 

          $limpar=" DELETE  FROM classe where chaveEstrageiraClasse='$eliminar'";
    $queryy=mysqli_query($conectar,$limpar);       

    $limpar=" DELETE  FROM correioeletronico where chaveEstrageiraCorreio='$eliminar'";
    $queryy=mysqli_query($conectar,$limpar);
     $limpar=" DELETE  FROM pessoa where id='$eliminar'";
        $queryy=mysqli_query($conectar,$limpar);
        if ( $queryy) {
         
       
    }
}
 




$seletor=" SELECT * FROM pessoa AS p INNER JOIN classe AS cl INNER JOIN curso AS cur INNER JOIN correioeletronico AS cor ON p.id=cl.chaveEstrageiraClasse AND p.id=cur.chaveEstrageiraCurso AND p.id=cor.chaveEstrageiraCorreio ";
$i=0;
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
 echo"<th>operação</th>";
 echo"</tr>";
 $y=1;
 $x=0;
$query= mysqli_query($conectar,$seletor);
while ($buscar=mysqli_fetch_assoc($query)) {
    $i=$i+1;

  $x=$i%2;


//,
echo"<tr>";
if($x==1){
    echo"<div>";
echo"<td>".$i."</th>";

echo"<td>".$buscar['nome']."</td>";
echo"<td>".$buscar['sexo']."</td>";
echo"<td>".$buscar['bi']."</td>";
echo"<td>".$buscar['cusro']."</td>";
echo"<td>".$buscar['classe']."</td>";
echo"<td>".$buscar['nacionalidade']."</td>";
echo"<td>".$buscar['email']."</td>";
echo"<td>".$buscar['telefone']."</td>";
echo"<td><a id='a' href='listar.php? idA=$buscar[id]'> editar </a><a id='l' href='listar.php? idE=$buscar[id]' > eliminar </a></td>";

echo"</tr>";
echo"<div>";

}
else{

    echo"<td id='cor'>".$i."</th>";
    
    echo"<td id='cor'>".$buscar['nome']."</td>";
    echo"<td id='cor'>".$buscar['sexo']."</td>";
    echo"<td id='cor'>".$buscar['bi']."</td>";
    echo"<td id='cor'>".$buscar['cusro']."</td>";
    echo"<td id='cor'>".$buscar['classe']."</td>";
    echo"<td id='cor'>".$buscar['nacionalidade']."</td>";
    echo"<td id='cor'>".$buscar['email']."</td>";
    echo"<td id='cor'>".$buscar['telefone']."</td>";
    echo"<td id='cor'><a  id='a' href='listar.php? idA=$buscar[id]' > editar </a><a  id='l' href='listar.php? idE=$buscar[id]' > eliminar </a></td>";
    
    echo"</tr>";
  
    }
  
   

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