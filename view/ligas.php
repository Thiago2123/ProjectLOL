<html>
    <head>
        <?php 
            require("../def/head.php");
            require("../def/function.php");
            //$connection = connection();
        ?>
        <!-- <script type="text/javascript" src="js/livro.js"></script> -->
        <title>League of Stars - Ligas</title>
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
                            <a class="nav-link text-warning" href="home">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning" href="escalacao">Escalação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="ligas">Ligas</a>
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
                <div class="col-8 mt-4">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Pesquisar</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome da liga">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr><th style="text-align: center" colspan="3" >Minhas ligas</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th style="width: 20%">Liga</th>
                            <th style="width: 20%">Minha posição</th>
                            <th style="width: 20%">Quantidade de jogadores</th>
                            </tr>
                            <tr onclick="carregarLiga(idLiga)">
                                <td>Os pintudos</td>
                                <td>10.000</td>
                                <td>70.000</td>
                            </tr>
                            <tr onclick="carregarLiga(idLiga)">
                                <td>Família</td>
                                <td>1</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>                
                </div>
                <div class="col-6">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr><th style="text-align: center" colspan="3" >Ligas para entrar</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th style="width: 20%">Liga</th>
                            <th style="width: 20%">Minha posição</th>
                            <th style="width: 20%">Quantidade de jogadores</th>
                            </tr>
                            <tr onclick="carregarLiga(idLiga)">
                                <td>Os pintudos</td>
                                <td>10.000</td>
                                <td>70.000</td>
                            </tr>
                            <tr onclick="carregarLiga(idLiga)">
                                <td>Família</td>
                                <td>1</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>                
                </div>
            </div>
        </div>
         <div class="fixed border bg-secondary mt-2 text-warning">League of Stars</div>
    </body>
</html>
