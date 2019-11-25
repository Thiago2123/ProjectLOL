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
                    <div>
                        <img src="../ProjectLOL/img/logo.png" class="rounded img-fluid" style="width:150px; height: 90px">
                    </div>
                </div>
                <div>
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item ">
                            <a class="nav-link text-warning" href="home">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="escalacao">Escalação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning" href="ligas">Ligas</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="row m-auto">
                        <div>
                            <i class="fas fa-user-circle fa-3x" style="color: secondary"></i>
                        </div>
                        <div class="ml-1 text-warning">Bem vindo Usuário</div>
                    </div> 
                    <div class="row m-auto">
                        <div class="ml-5 text-success"><i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 50</div>
                    </div>       
                </div>
            </div>
            <div class="row">
                <div class="col-8 mt-4">
                    <div id="filtros" class="row offset-4">
                        <div class="form-group col-2">
                            <label for="Rota">Rota</label>
                            <select class="form-control" id="Rota">
                                <option value=""></option>
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
                                <option value=""></option>
                                <option value="one">One</option>
                                <option value="cnb">Cnb</option>
                                <option value="redemption">Redemption</option>
                                <option value="pain">Pain</option>
                                <option value="intz">Intz</option>
                                <option value="uppercut">Uppercut</option>
                                <option value="flamengo">Flamengo</option>
                                <option value="kabum">Kabum</option>
                            </select>
                        </div>
                        <div class="form-group col-4">
                            <fieldset class="form-group">
                                <div class="row" id='busca'>
                                    <legend class="col-form-label col-sm-2 pt-0">Valor:</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="rbd-5" value="5">
                                            <label class="form-check-label" for="gridRadios1">
                                                Abaixo de 10$
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="rbd-10" value="10">
                                            <label class="form-check-label" for="gridRadios2">Maior de 10$ </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="rbd-11" value="15">
                                            <label class="form-check-label" for="gridRadios3">Maiores de 20$</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="table-wrapper-scroll-y my-custom-scrollbar" style="position: relative; height: 600px; overflow: auto; display: block;">
                            <table id="table-players" class="table table-striped table-dark mt-3">
                                <thead>
                                    <tr>
                                        <th>Jogador</th>
                                        <th>Time</th>
                                        <th>Rota</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>     
                                <tbody>                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header row">
                                <h5 class="mb-0">
                                    <i class="fas fa-pen" style="color: blue;"></i><label class="ml-2" id='nometime'> Nome do time </label>
                                </h5>
                            </div>
                                <div class="card-body">
                                <table class="table-xs table-striped table-dark col-10">
                                    <thead>
                                        <tr>
                                            <th style="width: 20%">Nome</th>
                                            <th style="width: 5%">Rota</th>
                                            <th style="width: 5%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align: left;">
                                                <img src="../ProjectLOL/img/CBLOL/Flamengo/BRTT.png" class="rounded img-fluid" style="width:150px; height: 90px;">
                                                <b class="text-success">BRTT</b>
                                            </td>
                                            <td style="margin-left: 5%;"><img src="../ProjectLOL/img/Rotas/Top.png" class="border border-secondary" style="width:40px; height: 30px"></td>
                                            <td><i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 10  </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left;">
                                                <img src="../ProjectLOL/img/CBLOL/INTZ/MICAO.png" class="rounded img-fluid" style="width:150px; height: 90px;">
                                                <b class="text-success">MICÂO</b>
                                            </td>
                                            <td style="margin-left: 5%;"><img src="../ProjectLOL/img/Rotas/Jg.png" class="border border-secondary" style="width:40px; height: 30px"></td>
                                            <td><i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 10  </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left;">
                                                <img src="../ProjectLOL/img/CBLOL/Flamengo/LUCI.png" class="rounded img-fluid" style="width:150px; height: 90px;">
                                                <b class="text-success">LUCI</b>
                                            </td>
                                            <td style="margin-left: 5%;"><img src="../ProjectLOL/img/Rotas/Mid.png" class="border border-secondary" style="width:40px; height: 30px"></td>
                                            <td><i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 10  </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left;">
                                                <img src="../ProjectLOL/img/CBLOL/Pain/ESA.png" class="rounded img-fluid" style="width:150px; height: 90px;">
                                                <b class="text-success">ESA</b>
                                            </td>
                                            <td style="margin-left: 5%;"><img src="../ProjectLOL/img/Rotas/Bot.png" class="border border-secondary" style="width:40px; height: 30px"></td>
                                            <td><i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 10  </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left;">
                                                <img src="../ProjectLOL/img/CBLOL/CNB/PBO.png" class="rounded img-fluid" style="width:150px; height: 90px;">
                                                <b class="text-success">PBO</b>
                                            </td>
                                            <td style="margin-left: 5%;"><img src="../ProjectLOL/img/Rotas/Sup.png" class="border border-secondary" style="width:40px; height: 30px"></td>
                                            <td><i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 10  </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="bottom bg-secondary mt-2 text-warning">League of Stars</div>
        <script src="js/escalation.js"></script>
    </body>
</html>
