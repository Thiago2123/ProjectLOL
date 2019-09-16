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
        <div class="container-fluid no-gutters">
            <nav class="navbar navbar-dark bg-dark">
                <div class=" row">
                    <input class="mr-sm-2" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-primary my-2 my-sm-0">Pesquisar</button>
                </div>
            </nav>
            <button id="" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Incluir Novo</button>
        </div>
    </body>
</html>
