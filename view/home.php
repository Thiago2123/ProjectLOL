<html>
    <head>
        <?php 
            require("../def/head.php");
            require("../def/function.php");
            //$connection = connection();
        ?>
        <!-- <script type="text/javascript" src="js/livro.js"></script> -->
        <title>League of Stars - Home</title>
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
                    <div class="form-inline mt-2" style="margin-bottom: auto">
                        <input type="email" class="form-control mb-2 mr-sm-2" id="email" placeholder="Email">
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="password" class="form-control" id="senha" placeholder="Senha">
                        </div>
                        <button type="button" class="btn btn-success mb-2">Entrar</button>
                    </div>        
                </div>
            </div>
            <div class="jumbotron jumbotron">
                <div class="container">
                    <p class="lead">Resultado dos jogos passados</p>
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
                            <input type="text" class="form-control" id="cad_nome" placeholder="Nome completo">
                        </div>
                        <label for="cad_email" class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input type="email" class="form-control" id="cad_email" placeholder="Email">
                        </div>
                        <label for="cad_senha" class="col-2 col-form-label">Senha</label>
                        <div class="col-7">
                            <input type="password" class="form-control" id="cad_senha" placeholder="Senha">
                            <small id="passwordHelpInline" class="text-muted">
                                A senha deve ter entre 8 e 20 caracteres
                            </small>
                        </div>
                    </div>
                    <button class="btn btn-success btn-block" style="margin-top: 42%;" >Cadastrar</button>
                </div>
            </div>
        </div>
         <div class="fixed-bottom border" style=" background-color: red">as</div>
    </body>
</html>
