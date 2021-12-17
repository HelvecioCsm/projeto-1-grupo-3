<!DOCTYPE html >
<?php
// buscar a conexao
require_once "conexao.php";
session_start();
$pegar = $_SESSION['actualizar'];

?>
<html lang="pt-pt">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="./css/estilo.css">
        <link rel="stylesheet" href="./css/checck.css">
        <link rel="stylesheet" href="./css/lista.css">
        <link rel="stylesheet" href="./css/novo.css">

   
    <title>Editar</title>

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
<a href="registrar.php"> <li >Registrar</li></a> 
 <a href="listar.php"><li >listar</li></a>  
 <a href="#"><li id="ativo" >Editar</li></a>  
 <a href="geradorpdf.php"> <li>relatorio</li></a>
</ul>

<aside>

    
</aside>

    <section class="corpo">

        </div>

        <?php
        

        $seletor=" SELECT * FROM pessoa AS p INNER JOIN classe AS cl INNER JOIN curso AS cur INNER JOIN correioeletronico AS cor ON p.id=cl.chaveEstrageiraClasse AND p.id=cur.chaveEstrageiraCurso AND p.id=cor.chaveEstrageiraCorreio WHERE 
     id='$pegar'" ;


$query= mysqli_query($conectar,$seletor);
$buscar=mysqli_fetch_assoc($query);
        ?>
     



        <div class="cartaoC" >
            <div>
                <form action="" method="POST" enctype="multipart/form-data" >
                    <label for="">Nome : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="nome" placeholder=" Nome" value="<?php echo $buscar['nome'];?>" ><br><br>
                    <label for="">Numero do B.I:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="bi" placeholder=" B.I" requered value="<?php echo $buscar['bi']?>">
               <br><br>
                    <label for="">data de nascimento:</label>
                    <input type="date" name="datN" id=""  value="<?php echo $buscar['dataNascimento']?>">&nbsp;&nbsp;&nbsp;
                    <br><br>
                    <label for="">sexo:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  M                 <input type="radio" name="s" value="maculino">&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  F&nbsp;
                    <input type="radio" name="s" value="femenio"requered>

                    <br><br>
                    <label for="">clase:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    

                    <input type="text" name="clase" id="" list="pegar" placeholder="classe"  value="<?php echo $buscar['classe']?>">
                    <datalist id="pegar">
                        <option value="10ª"></option>
                        <option value="11ª"></optionss>
                        <option value="12ª"></option>
                    </datalist>
                <br><br>
                <label for="">Curso:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   

                <input type="text" name="curso" id="" list="curso" placeholder="curso" value="<?php echo $buscar['cusro']?>" >
                    <datalist id="curso">
                        <option value="INFORMÁTICA"></option>
                        <option value="ELECTECIDADE"></optionss>
                        <option value="GESTÃO DE ADNIMISTRAÇÃO"></option>
                    </datalist>
                <br><br>
                <label for="">telefone:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="tel" name="telefone" id="" placeholder="Nº de telefone"  value="<?php echo $buscar['telefone']?>">
                <br><br>
                <label for="">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="email" name="email" id="" placeholder="E-mael"  value="<?php echo $buscar['email']?>">
                <br><br>
                <label for="">Nacionalidade:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="nacio" id="" autofocus placeholder="Nacionalidade" value="<?php echo $buscar['nacionalidade']?> ">
                <br><br>
                <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="submit" value="Atualizar" name="boato">

            </div>

        <div>
            
<?php
// 
if(isset($_POST['s'])){
$nome =$_POST['nome'];
$bi=$_POST['bi'];
$sexo=$_POST['s'];
$dataN=$_POST['datN'];
$curso=$_POST['curso'];
$classe=$_POST['clase'];
$tel=$_POST['telefone'];
$email=$_POST['email'];
$nacionalidade=$_POST['nacio'];


$up=" UPDATE pessoa SET nome='$nome',bi='$bi', dataNascimento='$dataN',sexo='$sexo' ,nacionalidade='$nacionalidade' where id='$pegar' ";
$upa=" UPDATE curso SET cusro='$curso' where chaveEstrageiraCurso='$pegar'";
$upb=" UPDATE classe SET classe='$classe' where chaveEstrageiraClasse='$pegar' ";
$upc=" UPDATE correioeletronico SET email='$email',telefone='$tel' where chaveEstrageiraCorreio='$pegar' ";

$query= mysqli_query($conectar,$up);
$querya= mysqli_query($conectar,$upa);
$queryb= mysqli_query($conectar,$upb);
$queryc= mysqli_query($conectar,$upc);

if ($query && $querya && $queryb && $queryc) {
 
    echo " <div class='conteiner'><br><br><br>
      <h2 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DADOS ACTUALIZADOS !</h2><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Editar.php'><input type='button' value='Cancelar'></a>
      </div>";
  }else {
      echo " <div class='conteiner'><br><br><br>
      <h2 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ERRO NA ACTUALIZAÇAO!</h2><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Editar.php'><input type='button' value='Cancelar'></a>
      </div>";
      
  }
}

?>


  
        </div>
    </section> 

   
</div>
</section>
</body>
</html>