<!DOCTYPE html >
<?php
// buscar a conexao
require_once "conexao.php";

?>
<html lang="pt-pt">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="./css/estilo.css">
        <link rel="stylesheet" href="./css/checck.css">
        <link rel="stylesheet" href="./css/lista.css">
        <link rel="stylesheet" href="./css/novo.css">
    <title>Registrar</title>

    </head>
<body>
<!-- SECCAO DO MENU-->
    <section class="menu">
<ul>

</ul>
    </section>
<ul class="mn">
<a href="index.html"> <li >Inicio</li></a> 
    <li id="ativo">Registrar</li>
 <a href="listar.php"><li >listar</li></a>  
   <a href="geradorpdf.php"> <li>relatorio</li></a>
</ul>

<aside>

    
</aside>

    <section class="corpo">

     
        </div>

        
     
        <div class="cartaoC" >
            <div>
                <form action="" method="POST" enctype="multipart/form-data" >
                    <label for="">Nome : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="nome" placeholder=" Nome" ><br><br>
                    <label for="">Numero do B.I:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="bi" placeholder=" B.I" >
               <br><br>
                    <label for="">data de nascimento:</label>
                    <input type="date" name="datN" id="">&nbsp;&nbsp;&nbsp;
                    <br><br>
                    <label for="">sexo:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  M                 <input type="radio" name="s" value="maculino">&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  F&nbsp;
                    <input type="radio" name="s" value="femenio" >

                    <br><br>
                    <label for="">clase:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    

                    <input type="text" name="clase" id="" list="pegar" placeholder="classe">
                    <datalist id="pegar">
                        <option value="10ª"></option>
                        <option value="11ª"></optionss>
                        <option value="12ª"></option>
                    </datalist>
                <br><br>
                <label for="">Curso:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   

                <input type="text" name="curso" id="" list="curso" placeholder="curso">
                    <datalist id="curso">
                        <option value="INFORMÁTICA"></option>
                        <option value="ELECTECIDADE"></optionss>
                        <option value="GESTÃO DE ADNIMISTRAÇÃO"></option>
                    </datalist>
                <br><br>
                <label for="">telefone:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="tel" name="telefone" id="" placeholder="Nº de telefone">
                <br><br>
                <label for="">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="email" name="email" id="" placeholder="E-mael">
                <br><br>
                <br><br>
                <label for="">Nacionalidade:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="nacio" id="" autofocus placeholder="Nacionalidade">
                <br><br>
                <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="submit" value="registrar">
                
            </div>
          </div>

</div>
</section>          
<?php

// 
if(!empty($_POST['nome'])){
$nome =$_POST['nome'];
$bi=$_POST['bi'];
$sexo=$_POST['s'];
$dataN=$_POST['datN'];
$curso=$_POST['curso'];
$classe=$_POST['clase'];
$tel=$_POST['telefone'];
$email=$_POST['email'];
$nacionalidade=$_POST['nacio'];


$inserir=" INSERT INTO pessoa (nome,bi,dataNascimento,sexo,nacionalidade) values('$nome','$bi','$dataN','$sexo','$nacionalidade')";

$query= mysqli_query($conectar,$inserir);
//
            $id = mysqli_insert_id($conectar);

// curso tabela
$inserirCuso=" INSERT curso (cusro,chaveEstrageiraCurso) values('$curso','$id')";

$queryCu= mysqli_query($conectar,$inserirCuso);
// classe tabela

$inserirClasse=" INSERT INTO classe (classe,chaveEstrageiraClasse) values('$classe','$id')";
$queryCl= mysqli_query($conectar,$inserirClasse);
// coreio eletronico tabela

$inserirCo=" INSERT INTO correioeletronico (email,telefone,chaveEstrageiraCorreio) values('$email','$tel','$id')";
$queryCo= mysqli_query($conectar,$inserirCo);

if ($query && $queryCo && $queryCl && $queryCu) {
 
  echo " <div class='conteiner'><br><br><br>
    <h2 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cadastro feito com sucesso!</h2><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='registrar.php'><input type='button' value='Cancelar'></a>
    </div>";
}else {
    echo " <div class='conteiner'><br><br><br>
    <h2 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Errono cadastro!</h2><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='registrar.php'><input type='button' value='Cancelar'></a>
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