<html>
    <head>
        <title>Minha Homepage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>


    </head>
    <body id="bkk" background="img/fundocinza.jpg">




        <div class="container">
            <div class="row">

                <div id="header" title="SITE" class="col-lg-12" >
                    <div class="jumbotron">
                        <div id="form" style="text-align: center">
                            <h1 style="color:blue">HotMiniaturas Design</h1>
                        </div>
                    </div>
                </div>

                <?php
                require 'includes/menu.php';
                ?>
                <div class="row" class="col-lg-12" style="text-align: center">
                    <div id ='form' class="col-lg-12"  >
                        <h1>
                            <b> Cadastrar Cliente </b>
                        </h1>
                        <form class="form-horizontal" method="post" action="cadastrar_cliente.php">
                            <div class="form-group">
                                <label for="inputNome" class="col-sm-2 control-label">Nome:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-2 control-label">Senha:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Senha" name="senha">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Cadastrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="alert alert-success" role="alert"></div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            require 'includes/foot.php';
            ?>

    </body>
</html>