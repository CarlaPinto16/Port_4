<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <script src="javascript.js"></script>
    <title>Multimédia</title>
</head>
<body onload="janela()" onresize="janela()">
    
    <?php 
        include_once('conexao.php'); 
    ?>

    <div id="corpo">
        <div id="banner">
            <?php
                ### banner

                $sql = 'SELECT * FROM banners LIMIT 0,1';
                $resultado = mysqli_query($link, $sql);
                if($resultado){
                    while( $linha = mysqli_fetch_array($resultado)){
                        print '<img src="imagens/'.$linha['imagem'].'" alt="" id="banner_imagem">';
                    }
                }
            ?>
        </div>

        <div id="texto">
            <?php
                ### texto
                $titulo = $texto  = $imagem = '';

                $sql = 'SELECT * FROM texto LIMIT 0,1';
                $resultado = mysqli_query($link, $sql);
                if($resultado){
                    while( $linha = mysqli_fetch_array($resultado)){
                        $titulo = $linha['titulo'];
                        $texto  = $linha['texto'];
                        $imagem = $linha['imagem'];
                    }
                }

                print '<div class="c2">';
                    print '<div class="p10"><h2>&nbsp;</h2>';
                        print '<p><img src="imagens/'. $imagem .'" alt=""></p>';
                    print '</div>';
                print '</div>';
               
                print '<div class="c2">';
                    print '<div class="p10">';
                        print '<h2>'.$titulo.'</h2>';
                        print nl2br($texto);
                    print '</div>';
                print '</div>';
            ?>

            <div class="limpar"></div>
        </div>


        <div id="frases" class="creme">
            <?php
                ### frases

                $sql = 'SELECT * FROM frases ORDER BY RAND() LIMIT 0, 2';
                $resultado = mysqli_query($link, $sql);
                if($resultado){
                    while( $linha = mysqli_fetch_array($resultado)){
                        print '<div class="c2">';
                            print '<div class="p50 t22">';
                                print $linha['frase'];
                            print '</div>';
                        print '</div>';
                    }
                }
            ?>

            <div class="limpar"></div>
        </div>

        <div id="galeria" class="linha">
            <h1 class="p30">Os nossos produtos</h1>
            <?php
                ### produtos
                $k = 1;

                $sql = 'SELECT * FROM produtos ORDER BY RAND()';
                $resultado = mysqli_query($link, $sql);
                if($resultado){
                    while( $linha = mysqli_fetch_array($resultado)){
                        
                        if($k==1) print '<div class="limpar">';

                            print '<div class="c4">';
                                print '<div class="p10">';
                                    print '<div class="limite">';
                                        print '<img src="imagens/'.$linha['imagem'].'" alt="">';
                                        print '<div class="p10"><b>'.$linha['produto'].'</b><br>'. $linha['descricao'] .'</div>';
                                    print '</div>';  
                                print '</div>';
                            print '</div>';

                        if($k==4)print '</div>';

                        if(++$k >=5 ) $k = 1;
                    }
                }
            ?>
            <div class="limpar"></div>
            <p>&nbsp;</p>
        </div>

        <div id="equipa">
            <h1 class="p30">Nossa equipa</h1>
            
            <div id="seta_esq"><img src="imagens/seta_esq.jpg" id="s_esq" onclick="equipa(-1)"></div>
            <?php
                ### equipa
                $k = 0;

                $sql = 'SELECT * FROM equipas';
                $resultado = mysqli_query($link, $sql);
                if($resultado){
                    while( $linha = mysqli_fetch_array($resultado)){
                        
                        $oculto = '';
                        if(++$k > 3) $oculto = 'oculto';
                       
                        print '<div class="c3 '. $oculto .'">';
                            print '<div class="p10 c">';
                                print '<img src="imagens/'.$linha['imagem'].'" alt="" class="equipa_foto">';
                                print '<p>'.$linha['equipa'].'</p>';
                            print '</div>';
                        print '</div>';
                    }
                }
            ?>
            <div id="seta_dir"><img src="imagens/seta_dir.jpg" id="s_dir" onclick="equipa(1)"></div>

            <div class="limpar"></div>
        </div>

        <div id="formulario" class="creme">
            <form action="index.php" method="post">

            <h1 class="p30">Estamos sempre ao dispor!</h1>
            <div class="c2"> 
                <div class="p10"> 
                    <input type="text" id="nome"       name="nome"      placeholder="Nome">
                    <input type="text" id="morada"     name="morada"    placeholder="Morada">
                    <input type="date" id="data"       name="data"      placeholder="Data">
                    Género 
                    <input type="radio" name="genero" style="width: 25px;"> F
                    <input type="radio" name="genero" style="width: 25px;"> M
                    <input type="text" id="contato"    name="contato"   placeholder="Contato">
                    <input type="text" id="email"      name="email"     placeholder="E-mail">
                    <input type="file" id="arquivo"    name="arquivo"   placeholder="Arquivo">

                    <p>&nbsp;</p>
                    
                </div>
            </div> 
        
            <div class="c2">
                <div class="p10">
                    <input type="password" id="password"   name="password"  placeholder="Password" oninput="verificar()">
                    <input type="password" id="confirmar"  name="confirmar" placeholder="Confirmar Password" oninput="verificar()">
                    <input type="text" id="assunto"    name="assunto"   placeholder="Assunto">
                    
                    <textarea id="mensagem"            name="mensagem"  placeholder="Mensagem" cols="30" rows="10"></textarea>
                    
                    <input type="checkbox" id="newsletter" name="newsletter" style="width: 25px;"> Deseja receber a nossa Newsletter? <br>
                    <input type="submit" id="enviar"   name="enviar"   placeholder="Enviar">
                </div> 
            </div>

            <div class="limpar"></div>
            </form>
        </div>

        <div id="fundo">
            <?php
                ### utilizador

                $sql = 'SELECT * FROM utilizadores LIMIT 0,1';
                $resultado = mysqli_query($link, $sql);
                if($resultado){
                    while( $linha = mysqli_fetch_array($resultado)){
                        print $linha['nome'] .' @ '. date('Y');
                    }
                }
            ?>
        </div>

    </div> 

    
    <script> setTimeout('banner()', 5000); </script>
</body>
</html>