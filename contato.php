<html>
    <?php
    require 'includes/head.php';
    ?>
    <body id="bkk" background="img/desktop4.png">
        <div class="container">
            <div class="row">
                <div id="header" title="SITE" class="col-lg-12" >
                    <div class="jumbotron">
                        <div id="form" style="text-align: center">
                            <h1 style="color:blue">Hotcars Miniaturas </h1>
                        </div>
                    </div>
                </div>

                <?php
                require 'includes/menu.php';
                ?>

                <div id="form">
                    <h1>
                        <b> Contato</b>


                        </h2>
                        <br> Endereço: Av. Venâncio Aires, 93 - Cidade Baixa, Porto Alegre - RS, 90040-191<br/>
                        Email: hotcars@gmail.com<br/>
                        Central de Atendimento ao Cliente: (51) 30293633   /  (51) 30264060<br/>
                        <br/>

                        <br/>

                </div>


                <div class="row">
                    <div class="col-lg-12">

                        <div class="form-group">
                            <label for="inputNome" class="col-lg-2 control-label">Nome</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputNome" placeholder="Nome">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">E-mail</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" placeholder="E-mail">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textArea" class="col-lg-2 control-label">Mensagem</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="textArea"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label"></label>
                        <div class="col-lg-10">
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
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







