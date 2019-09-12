<html>
    <head>
        <?php 
            require("../def/head.php");
            require("../def/function.php");
            $connection = connection();
        
        ?>
        <!-- <script type="text/javascript" src="js/livro.js"></script> -->
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <form class="form-inline row">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </nav>
        <button id="btn-novo" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Incluir Novo</button>
    </body>
</html>
