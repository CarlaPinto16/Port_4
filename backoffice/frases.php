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
        
        $idfrase = $frase = '';

        if(isset($_POST['idfrase'])) $idfrase = trim($_POST['idfrase']);
        if(isset($_POST['frase']))   $frase = htmlspecialchars(trim($_POST['frase']));
       
        if(is_numeric($idfrase) and strlen($frase)>5){

            $sql = 'UPDATE frases SET frase = "'.$frase.'" WHERE idfrase = '. $idfrase;
            mysqli_query($link, $sql);
        }
    }

    #####################

    if( isset($_SESSION['utilizador']) and !empty($_SESSION['utilizador']) ){

        include_once('menu.php');

        print '<h1>Frases</h1>';

        $i = 1;
        $sql = 'SELECT * FROM frases';
        $resultado = mysqli_query($link, $sql);
        if($resultado){
            while($linha = mysqli_fetch_array($resultado)){
                print '<form action="'.$url.'" method="post" enctype="multipart/form-data">';                    
                    print '<input type="hidden" name="idfrase" value="'. $linha['idfrase'] .'">';
                    print 'Frase <br><textarea type="text" name="frase" rows="4">'. $linha['frase'] .'</textarea><br>'; 
                    print '<p class="c"><input type="submit" value="Atualizar Frase '. $i++ .'"></p>';
                print '</form> <br><hr><br>';
            }
        }
    }

    include_once('fundo.php');
?>
</div>
</body>
</html>