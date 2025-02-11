<?php
 
    session_start();

    include_once('../conexao.php');

?><!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multimédia</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div id="corpo1">

<?php

    if(!empty($_POST)){
        # print_r($_POST);
        
        $idutilizador = $utilizador =  $nome = '';

        if(isset($_POST['idutilizador'])) $idutilizador = trim($_POST['idutilizador']);
        if(isset($_POST['utilizador']))   $utilizador = htmlspecialchars(trim($_POST['utilizador']));
        if(isset($_POST['nome']))   $nome = htmlspecialchars(trim($_POST['nome']));

        if(is_numeric($idutilizador) and strlen($utilizador)>5 and strlen($nome)>5){

            $sql = 'UPDATE utilizadores SET utilizador = "'.$utilizador.'", nome = "'.$nome.'"  WHERE idutilizador = '. $idutilizador;
            
            mysqli_query($link, $sql);
        }
    }

    #####################

    if( isset($_SESSION['utilizador']) and !empty($_SESSION['utilizador']) ){

        include_once('menu.php');

        print '<h1>Utilizador</h1>';

     
        $sql = 'SELECT * FROM utilizadores';
        $resultado = mysqli_query($link, $sql);
        if($resultado){
            while($linha = mysqli_fetch_array($resultado)){
                print '<form action="'.$url.'" method="post" enctype="multipart/form-data">';                    
                    print '<input type="hidden" name="idutilizador" value="'. $linha['idutilizador'] .'">';

                    print 'Nome <br><input type="text" name="nome" value="'. $linha['nome'] .'"><br>';
                    print 'Utilizador <br><input type="text" name="utilizador" value="'. $linha['utilizador'] .'"><br>';

                    print '<p class="c"><input type="submit" value="Atualizar"></p>';
                print '</form> <br><hr><br>';
            }
        }
    }

    include_once('fundo.php');
?>
</div>
</body>
</html>