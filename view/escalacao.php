<html>
    <head>
        <?php 
            require("../def/head.php");
            require("../def/function.php");
            //$connection = connection();
        ?>
        <!-- <script type="text/javascript" src="js/livro.js"></script> -->
        <title>League of Stars - Escalação</title>
    </head>
    <body>
        <div class="container-fluid no-gutters">
            <div class="navbar row py-0 bg-secondary">
                <div class="nav btn btn-secondary row">
                    <div style="width:50px; height: 50px">
                        <img src="../ProjectLOL/img/logo.jpg" class="rounded img-fluid" alt="logo">
                    </div>
                </div>
                <div>
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item ">
                            <a class="nav-link text-warning" href="">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="">Escalação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning" href="">Ligas</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="row m-auto">
                        <div style="width:50px; height: 50px">
                            <img src="../ProjectLOL/img/logo.jpg" class="rounded img-fluid" alt="logo">
                        </div>
                        <div class="ml-1 text-warning"><label>Bem vindo Usuário</label></div>
                    </div>        
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div id="filtros" class="border-warning row">
                        <div class="form-group col-2">
                            <label for="Rota">Rota</label>
                            <select class="form-control" id="Rota">
                                <option value="topo">Topo</option>
                                <option value="selva">Selva</option>
                                <option value="meio">Meio</option>
                                <option value="atirador">Atirador</option>
                                <option value="suporte">Suporte</option>
                            </select>
                        </div>
                        <div class="form-group col-2">
                            <label for="Rota">Time</label>
                            <select class="form-control" id="Rota">
                                <option value="pain">Pain</option>
                                <option value="cnb">Cnb</option>
                                <option value="keyd">Keyd</option>
                                <option value="intz">Intz</option>
                                <option value="kabum">Kabum</option>
                            </select>
                        </div>
                        <div class="form-group col-8">
                            <label for="preco">Preço</label>
                            <input type="range" class="custom-range" min="0" max="100" id="preco">
                        </div>
                    </div>
                   
                </div>
                <div class="col-4">b</div>
            </div>



        </div>
         <div class="fixed border bg-secondary mt-2 text-warning">League of Stars</div>
    </body>
</html>
