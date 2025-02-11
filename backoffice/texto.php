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

    $destino = '../imagens/';

    $novonome = '';

    if(!empty($_FILES)){
        # print_r($_FILES);

        if(isset($_FILES['imagem']) and !empty($_FILES['imagem']['name']) and $_FILES['imagem']['type'] == 'image/jpeg'){
            $imagem = $_FILES['imagem']['name'];
            $temp   = $_FILES['imagem']['tmp_name'];
            print $novonome = md5(time() + rand()*100) .'.jpg';
            move_uploaded_file($temp, $destino . $novonome);
        }
    }

    if(!empty($_POST)){
        # print_r($_POST);
        
        $idtexto = $titulo = $texto = '';

        if(isset($_POST['idtexto'])) $idtexto = trim($_POST['idtexto']);
        if(isset($_POST['titulo']))  $titulo = trim($_POST['titulo']);
        if(isset($_POST['texto']))   $texto = trim($_POST['texto']);
       
        if(is_numeric($idtexto) and strlen($titulo)>5 and strlen($texto)>5){
            $sql = 'UPDATE texto SET titulo = "'.$titulo.'", texto = "'.$texto.'", imagem = "'. $novonome .'" WHERE idtexto = '. $idtexto;
            mysqli_query($link, $sql);
        }
    }

    #####################

    if( isset($_SESSION['utilizador']) and !empty($_SESSION['utilizador']) ){

        include_once('menu.php');

        print '<h1>Texto</h1>';

        $sql = 'SELECT * FROM texto';
        $resultado = mysqli_query($link, $sql);
        if($resultado){
            while($linha = mysqli_fetch_array($resultado)){
                print '<form action="'.$url.'" method="post" enctype="multipart/form-data">';                    
                    print '<input type="hidden" name="idtexto" value="'. $linha['idtexto'] .'">';
                        print 'Título <br><input type="text" name="titulo" value="'. $linha['titulo'] .'"><br>';
                        print 'Texto <br><textarea type="text" name="texto" rows="10">'. $linha['texto'] .'</textarea><br>';
                        print 'Imagem <br><input type="file" name="imagem"><br>';
                        print '<p class="c"><input type="submit" value="Atualizar"></p>';
                print '</form>';
            }
        }
    }

    include_once('fundo.php');
?>
</div>
</body>
</html>