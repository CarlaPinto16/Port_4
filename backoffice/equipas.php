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
            $novonome = md5(time() + rand()*100) .'.jpg';
            move_uploaded_file($temp, $destino . $novonome);
        }
    }

    if(!empty($_POST)){
        # print_r($_POST);
        
        $idequipa = $equipa = '';

        if(isset($_POST['idequipa'])) $idequipa = trim($_POST['idequipa']);
        if(isset($_POST['equipa']))  $equipa = trim($_POST['equipa']);
        
       
        if(empty($novonome)){ $novonome = $_POST['imagem_antiga']; }

        if(strlen($equipa)>5){
            
            if(is_numeric($idequipa)){
                # UPDATE
                $sql = 'UPDATE equipas SET equipa = "'.$equipa.'", imagem = "'. $novonome .'" WHERE idequipa = '. $idequipa;
            }
            else {
                # INSERT
                $sql = 'INSERT INTO equipas (equipa, imagem) VALUES ("'.$equipa.'", "'. $novonome .'")';
            }
            mysqli_query($link, $sql);
        }
    }

    # DELETE
    if(isset($_GET['a']) and is_numeric($_GET['a'])){   
        $sql = 'DELETE FROM equipas WHERE idequipa = '. $_GET['a'];
        mysqli_query($link, $sql);
    }


    #####################

    if( isset($_SESSION['utilizador']) and !empty($_SESSION['utilizador']) ){

        include_once('menu.php');

        print '<h1>Equipas</h1>';
        print '<p>Inserir um novo produto na Base de Dados</p><br>';

        ### Inserir um produto novo - INSERT

        print '<form action="'.$url.'" method="post" enctype="multipart/form-data">';
            print '<input type="text" name="equipa" value=""><br>';
            print 'Imagem <br><input type="file" name="imagem"><br>';
            print '<p class="c"><input type="submit" value="Inserir"></p>';
        print '</form>';

        print '<hr>';
        print '<p>Listar todos os produto da Base de Dados</p><br>';

        ### Listagem dos produtos que tenho na BD - UPDATE


        $sql = 'SELECT * FROM equipas';
        $resultado = mysqli_query($link, $sql);
        if($resultado){
            while($linha = mysqli_fetch_array($resultado)){

                print '<form action="'.$url.'" method="post" enctype="multipart/form-data">';                    
                    print '<input type="hidden" name="idequipa" value="'. $linha['idequipa'] .'">';
                    print '<input type="hidden" name="imagem_antiga" value="'. $linha['imagem'] .'">';

                    print '<div class="c4">';
                        print '<div class="p10">';
                            print '<div class="limite p10">'; 
                                print '<img src="'.$destino . $linha['imagem'].'" alt="">';

                                print '<input type="text" name="equipa" value="'. $linha['equipa'] .'"><br>';
                                print 'Imagem <br><input type="file" name="imagem"><br>';
                                print '<p class="c"><input type="submit" value="Atualizar"></p>';
                            
                                print '<a href="'.$url.'?a='.$linha['idequipa'].'">Apagar o Produto</a>';

                                print '</div>';  
                        print '</div>';
                    print '</div>';
                       
                print '</form>';

            }
        }
    }

    include_once('fundo.php');
?>
</div>
</body>
</html>