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
                    <div> <img src="../ProjectLOL/img/logo.png" class="rounded img-fluid" style="width:150; height: 90px"></div>
                </div>
                <div>
                    <div class="form-inline mt-2" style="margin-bottom: auto">
                        <label id="erroLogin"></label>
                        <input type="email" class="form-control mb-2 mr-sm-2" id="email" placeholder="Email">
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="password" class="form-control" id="senha" placeholder="Senha">
                        </div>
                        <button id="log" type="button" class="btn btn-success mb-2" onclick="getUserLogin()">Entrar</button>
                    </div>        
                </div>
            </div>
            <div class="jumbotron">
                <div class="row" style="margin: auto">
                    <div class="btn btn-primary" style="margin: auto; padding: 21px 5px;"><i class="fas fa-arrow-left"></i></div>
                    <div class="div_jogos border border-danger m-1 p-1">
                        <div class="text-center font-weight-light">03/10</div>
                        <div class="text-center mr-0 ml-0">
                            <img src="../ProjectLOL/img/Times/Flamengo.png" class="rounded img-fluid" style="width:30px; height: 30px"> 
                                <b>0</b> x <b>1</b> 
                            <img src="../ProjectLOL/img/Times/CNB.png" class="rounded img-fluid" style="width:30px; height: 30px">
                        </div>
                        <div class="text-center font-weight-light">10:00</div>
                    </div>  
                    <div class="div_jogos border border-danger m-1 p-1">
                        <div class="text-center font-weight-light">03/10</div>
                        <div class="text-center mr-0 ml-0">
                            <img src="../ProjectLOL/img/Times/Pain.png" class="rounded img-fluid" style="width:30px; height: 30px"> 
                            <b>0</b> x <b>1</b> 
                            <img src="../ProjectLOL/img/Times/INTZ.png" class="rounded img-fluid" style="width:30px; height: 30px">     
                        </div>
                        <div class="text-center font-weight-light">11:00</div>
                    </div>  
                    <div class="div_jogos border border-danger m-1 p-1">
                        <div class="text-center font-weight-light">03/10</div>
                        <div class="text-center mr-0 ml-0">
                            <img src="../ProjectLOL/img/Times/Team.png" class="rounded img-fluid" style="width:30px; height: 30px"> 
                            <b>0</b> x <b>1</b>Kabum
                            <img src="../ProjectLOL/img/Times/Kabum.png" class="rounded img-fluid" style="width:30px; height: 30px">     
                        </div>
                        <div class="text-center font-weight-light">13:00</div>
                    </div>  
                    <div class="div_jogos border border-danger m-1 p-1">
                        <div class="text-center font-weight-light">04/10</div>
                        <div class="text-center mr-0 ml-0">
                            <img src="../ProjectLOL/img/Times/Uppercut.png" class="rounded img-fluid" style="width:30px; height: 30px"> 
                            <b>1</b> x <b>0</b>
                            <img src="../ProjectLOL/img/Times/Redemption.png" class="rounded img-fluid" style="width:30px; height: 30px">     
                        </div>
                        <div class="text-center font-weight-light">14:00</div>
                    </div> 
                    <div class="div_jogos border border-danger m-1 p-1">
                        <div class="text-center font-weight-light">04/10</div>
                        <div class="text-center mr-0 ml-0">
                            <img src="../ProjectLOL/img/Times/Flamengo.png" class="rounded img-fluid" style="width:30px; height: 30px"> 
                            <b>1</b> x <b>0</b>
                            <img src="../ProjectLOL/img/Times/Pain.png" class="rounded img-fluid" style="width:30px; height: 30px"> 
                        </div>
                        <div class="text-center font-weight-light">13:00</div>
                    </div>
                    <div class="div_jogos border border-danger m-1 p-1">
                        <div class="text-center font-weight-light">04/10</div>
                        <div class="text-center mr-0 ml-0">
                            <img src="../ProjectLOL/img/Times/Redemption.png" class="rounded img-fluid" style="width:30px; height: 30px"> 
                            <b>1</b> x <b>0</b>
                            <img src="../ProjectLOL/img/Times/Uppercut.png" class="rounded img-fluid" style="width:30px; height: 30px"> 
                        </div>
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
                            <img class="card-img-top" src="../ProjectLOL/img/Noticia/faker.jpg">
                            <div class="card-body">
                                <h5 class="card-title">A ruína do melhor do mundo</h5>
                                <p class="card-text">Faker considerado o melhor jogador do mundo, acaba perdendo para seu time rival. Mas chega ate a seminfinal, podendo até mesmo pegar um terceiro lugar no pódio.</p>
                                <p class="card-text"><small class="text-muted">Atualizados 5 dias atrás</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="../ProjectLOL/img/noticia/flx.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Região chinesa volta á ficar entre os primeiros lugares</h5>
                                <p class="card-text">A primeira Semifinal do Mundial 2019 foi completamente chinesa: Invictus Gaming x FunPlus 
                                                    Phoenix, a atual campeã mundial contra a atual campeã chinesa. O momento pesou muito mais 
                                                    do que a história - a FPX garantiu um 3x1 altamente dominante, com gostinho de 3x0, 
                                                    avançando para a Grande Final do campeonato. Agora, a Fênix aguarda o vencedor de SKT x G2, 
                                                    a ser disputado no domingo (3).</p>
                                <p class="card-text"><small class="text-muted">Atualizados 10 dias atrás</small></p>
                            </div>
                        </div>
                        <div class="card">  
                            <img class="card-img-top" src="../ProjectLOL/img/noticia/flamengo.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Brasil novamente não segue adiante no mundial</h5>
                                <p class="card-text">O Flamengo está fora do Campeonato Mundial 2019. Os Rubro-Negros encerram sua participação com uma vitória e 
                                                    quatro derrotas, despedindo-se da competição com um gosto amargo. Neste sábado (5), enfrentaram DAMWOM Gaming, da LCK, 
                                                    e Royal Youth, da TCL. Começaram bem a primeira partida, mas erros de mapa colocaram tudo a perder. As derrotas para a 
                                                    equipe turca foram diferentes: o FLA não conseguiu desenvolver seu jogo.</p>
                                <p class="card-text"><small class="text-muted">Atualizados 20 dias atrás</small></p>
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
                                A senha deve ter entre 5 e 10 caracteres
                            </small>
                        </div>
                    </div>
                    <label id="error"></label>
                    <button id="cad_botao" class="btn btn-success btn-block" style="margin-top: 42%" 
                    onclick="cadastrar();">Cadastrar</button>
                </div>
            </div>
        </div>
        <div class="bottom bg-secondary mt-2 text-warning">League of Stars</div>
    </body>
</html>
