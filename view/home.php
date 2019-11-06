<html>
    <head>
        <?php 
            require("../def/head.php");
            require("../def/function.php");
            //$connection = connection();
        ?>
        <script type="text/javascript" src="js/functions.js"></script>
        <title>League of Stars - Home</title>
    </head>
    <body>
        <div class="container-fluid no-gutters">
            <div class="navbar row py-0 bg-secondary">
                <div class="nav btn btn-secondary row">
                    <div> <img src="../ProjectLOL/img/logo.jpg" class="rounded img-fluid" style="width:50px; height: 30px"></div>
                </div>
                <div>
                    <div class="form-inline mt-2" style="margin-bottom: auto">
                        <input type="email" class="form-control mb-2 mr-sm-2" id="email" placeholder="Email">
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="password" class="form-control" id="senha" placeholder="Senha">
                        </div>
                        <button id="log" type="button" class="btn btn-success mb-2" onclick="sendCheck()">Entrar</button>
                    </div>        
                </div>
            </div>
            <div class="jumbotron jumbotron">
                <div class="row" style="margin: auto">
                    <div class="btn btn-primary" style="margin: auto; padding: 21px 5px;"><i class="fas fa-arrow-left"></i></div>
                    <div class="div_jogos border border-danger m-1 p-1">
                        <div class="text-center font-weight-light">03/10</div>
                        <div class="text-center mr-0 ml-0">Flamengo <b>0</b> x <b>1</b> Dawnon</div>
                        <div class="text-center font-weight-light">10:00</div>
                    </div>  
                    <div class="div_jogos border border-danger m-1 p-1">
                        <div class="text-center font-weight-light">03/10</div>
                        <div class="text-center mr-0 ml-0">Dmg <b>0</b> x <b>1</b> Splice</div>
                        <div class="text-center font-weight-light">11:00</div>
                    </div>  
                    <div class="div_jogos border border-danger m-1 p-1">
                        <div class="text-center font-weight-light">03/10</div>
                        <div class="text-center mr-0 ml-0">CNB <b>0</b> x <b>1</b>Kabum</div>
                        <div class="text-center font-weight-light">13:00</div>
                    </div>  
                    <div class="div_jogos border border-danger m-1 p-1">
                        <div class="text-center font-weight-light">04/10</div>
                        <div class="text-center mr-0 ml-0">Pain Gaming <b>1</b> x <b>0</b> Itnz</div>
                        <div class="text-center font-weight-light">14:00</div>
                    </div> 
                    <div class="div_jogos border border-danger m-1 p-1">
                        <div class="text-center font-weight-light">04/10</div>
                        <div class="text-center mr-0 ml-0">Keyd stars <b>1</b> x <b>0</b> Red </div>
                        <div class="text-center font-weight-light">13:00</div>
                    </div>
                    <div class="div_jogos border border-danger m-1 p-1">
                        <div class="text-center font-weight-light">04/10</div>
                        <div class="text-center mr-0 ml-0">SKT1 <b>1</b> x <b>0</b> Team Liquid</div>
                        <div class="text-center font-weight-light">13:00</div>
                    </div>  
                    <div class="btn btn-primary" style="margin: auto; padding: 21px 5px;"><i class="fas fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="row">
                <div class="col-7 border border-danger rounded" id="noticias">
                    <div class="row">
                        <h4 style="margin-inline-start: auto;">Notícias</h4>
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></button>
                                <button type="button" class="btn btn-secondary"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="../ProjectLOL/img/logo.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Título do card</h5>
                                <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior, para demonstração.</p>
                                <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="../ProjectLOL/img/logo.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Título do card</h5>
                                <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
                                <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="../ProjectLOL/img/logo.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Título do card</h5>
                                <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
                                <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-4 border border-primary rounded" id="cadastro">
                    <div>
                        <h4 class="text-center">Cadastro</h4>
                    </div>
                    <div class="form-group row">
                        <label for="cad_nome" class="col-2 col-form-label">Nome</label>
                        <div class="col-10">
                            <input type="text" class="form-control" id="cad_nome" placeholder="Nome completo" onblur="removeClass('#cad_nome', 'input-empty')">
                        </div>
                        <label for="cad_email" class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input type="email" class="form-control" id="cad_email" placeholder="Email" onblur="removeClass('#cad_email', 'input-empty')">
                        </div>
                        <label for="cad_senha" class="col-2 col-form-label">Senha</label>
                        <div class="col-7">
                            <input type="password" class="form-control" id="cad_senha" placeholder="Senha" nblur="removeClass('#cad_senha', 'input-empty')">
                            <small id="passwordHelpInline" class="text-muted">
                                A senha deve ter entre 8 e 20 caracteres
                            </small>
                        </div>
                    </div>
                    <label id="error"></label>
                    <button id="cad_botao" class="btn btn-success btn-block" style="margin-top: 42%" 
                    onclick="insert('users')">Cadastrar</button>
                </div>
            </div>
        </div>
        <div class="fixed-bottom bg-secondary mt-2 text-warning">League of Stars</div>
    </body>
</html>
