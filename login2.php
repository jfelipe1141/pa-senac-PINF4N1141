<html>

    <?php
    require 'includes/head.php';
    ?>


    <body id="bkk" background="img/fundocinza.jpg">
        <div class="container">
            <div class="row">

                <div class="jumbotron">
                    <div id="form" style="text-align: center">
                        <h1 style="color:blue">HotMiniaturas Design</h1>
                    </div>
                </div>
            </div>

            <?php
            require 'includes/menu.php';
            ?>

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="col-lg-12">
                        <div id="form" style="text-align: center">
                            <h1>
                                <b>Faça Seu Login:</b>
                            </h1>
                            <br>
                            <form class="form-horizontal" action="faz_login.php" method="post" >
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Senha:</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="senha" id="inputPassword3" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="lembrar"> lembre-se de mim
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php
        require 'includes/foot.php';
        ?>
    </body>
</html>