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
                        <div class="form-group col-4">
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Preço:</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Abaixo de 10$
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Maior de 10$
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                                            <label class="form-check-label" for="gridRadios3">
                                                Maiores de 20$
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <table class="table table-striped table-dark col-10">
                        <thead>
                            <tr>
                            <th style="width: 10%">Nome</th>
                            <th style="width: 10%">Time</th>
                            <th style="width: 5%">Rota</th>
                            <th style="width: 5%">Valor</th>
                            <th style="width: 2%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Brtt</td>
                                <td>Flamengo</td>
                                <td>Atirador</td>
                                <td>25</td>
                                <td><i class="fas fa-shopping-cart"  style="cursor:pointer"></i></td>

                            </tr>
                            <tr>
                                <td>Micão</td>
                                <td>Intz</td>
                                <td>Atirador</td>
                                <td>22</td>
                                <td><i class="fas fa-shopping-cart"  style="cursor:pointer"></i></td>
                            </tr>
                            <tr>
                                <td>Robo</td>
                                <td>Flamengo</td>
                                <td>Topo</td>
                                <td>2</td>
                                <td><i class="fas fa-shopping-cart"  style="cursor:pointer"></i></td>
                            </tr>
                            <tr>
                                <td>Revolta</td>
                                <td>Keyd</td>
                                <td>Selva</td>
                                <td>10</td>
                                <td><i class="fas fa-shopping-cart"  style="cursor:pointer"></i></td>
                            </tr>
                            <tr>
                                <td>Luci</td>
                                <td>Flamengo</td>
                                <td>Suporte</td>
                                <td>20</td>
                                <td><i class="fas fa-shopping-cart"  style="cursor:pointer"></i></td>
                            </tr>
                            <tr>
                                <td>Kami</td>
                                <td>Pain</td>
                                <td>Meio</td>
                                <td>37</td>
                                <td><i class="fas fa-shopping-cart"  style="cursor:pointer"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-4">b</div>
            </div>



        </div>
         <div class="fixed border bg-secondary mt-2 text-warning">League of Stars</div>
    </body>
</html>
