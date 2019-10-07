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
                            <a class="nav-link text-warning" href="home">Página Inicial</a>
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
                <div class="col-8 mt-4">
                    <div id="filtros" class="border border-warning row">
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
                <div class="col-4 mt-2">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-plus"></i> Time 1
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
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fas fa-plus"></i> Time 2
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-plus"></i> Time 3
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
         <div class="fixed border bg-secondary mt-2 text-warning">League of Stars</div>
    </body>
</html>
