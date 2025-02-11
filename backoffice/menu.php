<img src="imagens/banner06.jpg" alt="">

<div id="menu">
 
    <?php

        print '<a href="index.php">Início </a> | ';
        print '<a href="banners.php">banner</a> | ';
        print '<a href="texto.php">Texto</a> | '; 
        print '<a href="frases.php">Frases</a> | ';

        print '<a href="produtos.php">Produtos</a> | ';
        print '<a href="equipas.php">Equipas</a> | ';
        print '<a href="utilizador.php">Utilizador</a> | ';
        print '<a href="index.php?s=sair">Terminar Sessão</a> | ';
        print $_SESSION['nome'] .' | ';

    ?>

</div>
<hr>