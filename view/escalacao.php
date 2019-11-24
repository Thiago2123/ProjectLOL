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
                        <div class="ml-1 text-warning">"Bem vindo Usuário"</div>
                    </div> 
                    <div class="row m-auto">
                        <div class="ml-5 text-success"><i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 50</div>
                    </div>       
                </div>
            </div>
            <div class="row">
                <div class="col-8 mt-4">
                    <div id="filtros" class="row">
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
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Valor:</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="0" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Abaixo de 10$
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="10">
                                            <label class="form-check-label" for="gridRadios2">Maior de 10$ </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="20">
                                            <label class="form-check-label" for="gridRadios3">Maiores de 20$</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="table-wrapper-scroll-y my-custom-scrollbar" style="position: relative; height: 600px; overflow: auto; display: block;">
                            <table class="table table-striped table-dark mt-3" style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th>Jogador</th>
                                        <th>Time</th>
                                        <th>Rota</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>     
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <img src="../ProjectLOL/img/CBLOL/Flamengo/BRTT.png" class="rounded img-fluid" style="width:120px">
                                                <div style="text-align: left;"><label>FELIPE "<b class="text-info">BRTT</b>" GONÇALVES <br> <br> Idade: 28 <br>Cidade: Rio de Janeiro - RJ</label></div>
                                        </td>
                                        <td>
                                            <div><img src="../ProjectLOL/img/Times/Flamengo.png" class="rounded img-fluid" style="width:150px; height: 90px;"></div>
                                        </td>
                                        <td>
                                            <div style="margin-left: 5%;"><img src="../ProjectLOL/img/Rotas/Bot.png" class="border border-secondary" style="width:40px; height: 30px"><label> Atirador</label></div>
                                        </td>
                                        <td>
                                            <div style="margin-left: 10%;">
                                                    <i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 10 
                                                    <i class="fas fa-shopping-cart"  style="cursor:pointer" title="Comprar"></i> 
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan= "5">
                                            <div class="row">
                                                <div><img src="../ProjectLOL/img/CBLOL/Intz/Micao.png" class="rounded img-fluid" style="width:150px; height: 90px"></div>
                                                <div style="text-align: left;"><label>MICAEL "<b class="text-info">MICAO</b>" RODRIGUES <br> <br> Idade: 23 <br>Cidade: Caratinga - MG</label></div>
                                                <div style="margin-left: 10%;"><img src="../ProjectLOL/img/Times/INTZ.png" class="rounded img-fluid" style="width:130px; height: 90px;"></div>
                                                <div style="margin-left: 5%;"><img src="../ProjectLOL/img/Rotas/Bot.png" class="border border-secondary" style="width:40px; height: 30px"><label> Atirador</label></div>
                                                <div style="margin-left: 10%;">
                                                    <i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 10 
                                                    <i class="fas fa-shopping-cart"  style="cursor:pointer" title="Comprar"></i> 
                                                </div>
                                            </div>
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan= "5">
                                            <div class="row">
                                                <div><img src="../ProjectLOL/img/CBLOL/Pain/TINOWNS.png" class="rounded img-fluid" style="width:150px; height: 90px"></div>
                                                <div style="text-align: left;"><label>THIAGO "<b class="text-info">TINOWNS</b>" SARTORI <br> <br> Idade: 22 <br>Cidade: São Paulo - SP</label></div>
                                                <div style="margin-left: 10%;"><img src="../ProjectLOL/img/Times/Pain.png" class="rounded img-fluid" style="width:130px; height: 90px;"></div>
                                                <div style="margin-left: 5%;"><img src="../ProjectLOL/img/Rotas/Mid.png" class="border border-secondary" style="width:40px; height: 30px"><label> Meio  </label></div>
                                                <div style="margin-left: 12%;">
                                                    <i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 10 
                                                    <i class="fas fa-shopping-cart"  style="cursor:pointer" title="Comprar"></i> 
                                                </div>
                                            </div>
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan= "5">
                                            <div class="row">
                                                <div><img src="../ProjectLOL/img/CBLOL/TeamOne/TAKESHI.png" class="rounded img-fluid" style="width:150px; height: 90px"></div>
                                                <div style="text-align: left;"><label>MURILO "<b class="text-info">TAKESHI</b>" ALVES <br> <br> Idade: 26 <br>Cidade: Brasília - DF</label></div>
                                                <div style="margin-left: 13%;"><img src="../ProjectLOL/img/Times/TeamOne.png" class="rounded img-fluid" style="width:130px; height: 90px;"></div>
                                                <div style="margin-left: 5%;"><img src="../ProjectLOL/img/Rotas/Mid.png" class="border border-secondary" style="width:40px; height: 30px"><label> Meio  </label></div>
                                                <div style="margin-left: 12%;">
                                                    <i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 05 
                                                    <i class="fas fa-shopping-cart"  style="cursor:pointer" title="Comprar"></i> 
                                                </div>
                                            </div>
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan= "5">
                                            <div class="row">
                                                <div><img src="../ProjectLOL/img/CBLOL/Uppercut/FITZ.png" class="rounded img-fluid" style="width:150px; height: 90px"></div>
                                                <div style="text-align: left;"><label>MATEUS "<b class="text-info">FITZ</b>" CAYRES <br> <br> Idade: 24 <br>Cidade: São João de Meriti - RJ </label></div>
                                                <div style="margin-left: 10%;"><img src="../ProjectLOL/img/Times/Uppercut.png" class="rounded img-fluid" style="width:130px; height: 90px;"></div>
                                                <div style="margin-left: 5%;"><img src="../ProjectLOL/img/Rotas/Top.png" class="border border-secondary" style="width:40px; height: 30px"><label> Topo  </label></div>
                                                <div style="margin-left: 12%;">
                                                    <i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 05 
                                                    <i class="fas fa-shopping-cart"  style="cursor:pointer" title="Comprar"></i> 
                                                </div>
                                            </div>
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan= "5">
                                            <div class="row">
                                                <div><img src="../ProjectLOL/img/CBLOL/CNB/HAWK.png" class="rounded img-fluid" style="width:150px; height: 90px"></div>
                                                <div style="text-align: left;"><label>GABRIEL "<b class="text-info">HAWK</b>" GOMES <br> <br> Idade: 19 <br>Rio de Janeiro - RJ </label></div>
                                                <div style="margin-left: 13%;"><img src="../ProjectLOL/img/Times/CNB.png" class="rounded img-fluid" style="width:130px; height: 90px;"></div>
                                                <div style="margin-left: 5%;"><img src="../ProjectLOL/img/Rotas/Sup.png" class="border border-secondary" style="width:40px; height: 30px"><label> Suporte  </label></div>
                                                <div style="margin-left: 10%;">
                                                    <i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 05 
                                                    <i class="fas fa-shopping-cart"  style="cursor:pointer" title="Comprar"></i> 
                                                </div>
                                            </div>
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan= "5">
                                            <div class="row">
                                                <div><img src="../ProjectLOL/img/CBLOL/Redemption/ZUAO.png" class="rounded img-fluid" style="width:150px; height: 90px"></div>
                                                <div style="text-align: left;"><label>JOÃO "<b class="text-info">ZUAO</b>" MORAIS <br> <br> Idade: 21 <br>Rio de Janeiro - RJ </label></div>
                                                <div style="margin-left: 15%;"><img src="../ProjectLOL/img/Times/Redemption.png" class="rounded img-fluid" style="width:130px; height: 90px;"></div>
                                                <div style="margin-left: 5%;"><img src="../ProjectLOL/img/Rotas/Jg.png" class="border border-secondary" style="width:40px; height: 30px"><label> Caçador  </label></div>
                                                <div style="margin-left: 10%;">
                                                    <i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 05 
                                                    <i class="fas fa-shopping-cart"  style="cursor:pointer" title="Comprar"></i> 
                                                </div>
                                            </div>
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan= "5">
                                            <div class="row">
                                                <div><img src="../ProjectLOL/img/CBLOL/Kabum/RANGER.png" class="rounded img-fluid" style="width:150px; height: 90px"></div>
                                                <div style="text-align: left;"><label>FILIPE "<b class="text-info">RANGER</b>" BROMBILLA <br> <br> Idade: 23 <br>Sapucaia do Sul - RS </label></div>
                                                <div style="margin-left: 10%;"><img src="../ProjectLOL/img/Times/Kabum.png" class="rounded img-fluid" style="width:130px; height: 90px;"></div>
                                                <div style="margin-left: 5%;"><img src="../ProjectLOL/img/Rotas/Jg.png" class="border border-secondary" style="width:40px; height: 30px"><label> Caçador  </label></div>
                                                <div style="margin-left: 10%;">
                                                    <i class="fas fa-money-bill-wave" style="color: green" title="Preço"></i> 05 
                                                    <i class="fas fa-shopping-cart"  style="cursor:pointer" title="Comprar"></i> 
                                                </div>
                                            </div>
                                        
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-plus"></i> Nome do time
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                <table class="table-xs table-striped table-dark col-10">
                                    <thead>
                                        <tr>
                                            <th style="width: 10%">Nome</th>
                                            <th style="width: 5%">Rota</th>
                                            <th style="width: 12%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mylon</td>
                                            <td>Topo</td>
                                            <td><select class="form-control" id="reserva">
                                                    <option value="T">Titular</option>
                                                    <option value="R">Reserva</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Minerva</td>
                                            <td>Selva</td>
                                            <td><select class="form-control" id="reserva">
                                                    <option value="T">Titular</option>
                                                    <option value="R">Reserva</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kami</td>
                                            <td>Meio</td>
                                            <td><select class="form-control" id="reserva">
                                                    <option value="T">Titular</option>
                                                    <option value="R">Reserva</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Diud</td>
                                            <td>Suporte</td>
                                            <td><select class="form-control" id="reserva">
                                                    <option value="T">Titular</option>
                                                    <option value="R">Reserva</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Brtt</td>
                                            <td>Atirador</td>
                                            <td><select class="form-control" id="reserva">
                                                    <option value="T">Titular</option>
                                                    <option value="R">Reserva</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Robo</td>
                                            <td>Topo</td>
                                            <td><select class="form-control" id="reserva">
                                                    <option value="T">Titular</option>
                                                    <option value="R" selected>Reserva</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Yoda</td>
                                            <td>Meio</td>
                                            <td><select class="form-control" id="reserva">
                                                    <option value="T">Titular</option>
                                                    <option value="R" selected>Reserva</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="fixed-bottom bg-secondary mt-2 text-warning">League of Stars</div>
    </body>
</html>
