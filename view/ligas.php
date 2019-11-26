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
                    <div>
                    <div> <img src="../ProjectLOL/img/logo.png" class="rounded img-fluid" style="width:150; height: 90px"></div>
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
                            <i class="fas fa-user-circle fa-3x" style="color: secondary"></i>
                        </div>
                        <div class="ml-1 text-warning"><label>Bem vindo Usuário</label></div>
                    </div>        
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-4">
                    <div class="form-group">
                        <label for="buscar">Pesquisar</label>
                        <input type="text" class="form-control" id="buscar" placeholder="Nome da liga">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr><th style="text-align: center" colspan="3" >Ligas para participar </th></tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th style="width: 20%">Nome</th>
                            <th style="width: 20%">Quantidade de jogadores</th>
                            </tr>
                            <tr onclick="$('#modal_info_liga').modal('show')" style="cursor: pointer">
                                <td>Champions</td>
                                <td>200</td>
                            </tr>
                            <tr onclick="carregarLiga(idLiga)" style="cursor: pointer">
                                <td>Os Sapão</td>
                                <td>70.000</td>
                            </tr>
                            <tr onclick="carregarLiga(idLiga)" style="cursor: pointer">
                                <td>Família</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>                
                </div>
                <div class="col-6">
                    <table class="table table-striped table-success">
                        <thead>
                            <tr><th style="text-align: center" colspan="3" >Ligas participantes</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th style="width: 20%">Nome</th>
                            <th style="width: 20%">Minha posição</th>
                            <th style="width: 20%">Quantidade de jogadores</th>
                            </tr>
                            <tr onclick="carregarLiga(idLiga)" style="cursor: pointer">
                                <td>FMU</td>
                                <td>6°</td>
                                <td>6</td>
                            </tr>
                        </tbody>
                    </table>                
                </div>
            </div>
        </div>
        <div class="fixed-bottom bg-secondary mt-2 text-warning"  style="text-align: center;">League of Stars</div>


            <!--------------------------------      
                M O D A L  I N F O  L I G A  
            ---------------------------------->
            <div class="modal fade" id="modal_info_liga" >
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="border mt-4 ml-3 mr-3 row ">
                                    <div class=""><img src="../ProjectLOL/img/liga_emblema.jpg" style="width:100px; height:100px" class="rounded img-fluid"></div>
                                    <div class="col-10">
                                        <h4>Liga Champions</h4>
                                        <p>Liga criada para fãs que gostam de uma boa parida de league of legends, pegando seu persongem preferido.</p>
                                        <i class="fas fa-users" style="color: green"> 200</i>
                                        <label class="d-flex justify-content-end" style="margin: -2%"> Criado em: 01/05/2018</label>
                                        
                                    </div>
                                </div>
                                <table class="mt-5 table table-striped">
                                    <thead>
                                        <th style="width: 20%; text-align: center">Usuário</th>
                                        <th style="width: 20%; text-align: center">Posição</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align: center">Joao2123</td>
                                            <td style="text-align: center">01° <i class="fas fa-arrow-down" style="color: red"></i></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center">PeterJonson </td>
                                            <td style="text-align: center">02° <i class="fas fa-arrow-up" style="color: green"></i></td>
                                        </tr>
                                        <tr class="table-primary">
                                            <td style="text-align: center">Zeca</td>
                                            <td style="text-align: center">03° <i class="fas fa-arrow-up" style="color: green"></i></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center">Guest_kiko</td>
                                            <td style="text-align: center">04° <i class="fas fa-arrow-down" style="color: red"></i></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center">Zeca</td>
                                            <td style="text-align: center">05° <i class="fas fa-arrow-up" style="color: green"></i></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center">Zeca</td>
                                            <td style="text-align: center">06° <i class="fas fa-arrow-up" style="color: green"></i></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center">Zeca</td>
                                            <td style="text-align: center">07° <i class="fas fa-arrow-up" style="color: green"></i></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center">Zeca</td>
                                            <td style="text-align: center">08° <i class="fas fa-minus" style="color: blue"></i></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center">Zeca</td>
                                            <td style="text-align: center">09° <i class="fas fa-minus" style="color: blue"></i></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center">Zeca</td>
                                            <td style="text-align: center">10° <i class="fas fa-minus" style="color: blue"></i></td>
                                        </tr>
                                    </tbody>
                                </table>                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" onclick="$('#modal_info_liga').modal('hide')"><i class="fas fa-arrow-circle-left"></i> Fechar</button>
                            <button type="button" class="btn btn-success" onclick="$('#modal_info_liga').modal('hide');  $.notify({icon: 'fas fa-check-circle', message: 'Participando da liga'})"><i class="fas fa-sign-in-alt"></i> Entrar na liga</button>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
