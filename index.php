<html>
    <?php
    require 'includes/head.php';
    require 'includes/topo.php';
    require 'includes/menu.php';
    ?>

    <div class="row" id="fundo-transparente">
        <div class="col-md-4 col-md-offset-4">
            <div class="row">

                <form class="form-horizontal">
                    <fieldset>
                        <legend>Formulário</legend>
                        <div class="form-group">
                            <label for="inputNome" class="col-lg-2 control-label">Nome</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputNome" placeholder="Nome">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputNome" class="col-lg-2 control-label">SOBRE NOME</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputNome" placeholder="Nome">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputSexo" class="col-lg-2 control-label">Sexo</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" placeholder="Sexo">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">E-mail</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" placeholder="E-mail">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="inputSenha" class="col-lg-2 control-label">Senha</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="Senha" placeholder="Senha">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Confirmar Senha</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Confirmar Senha">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Checagem
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textArea" class="col-lg-2 control-label">Mensagem</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="textArea"></textarea>
                                <span class="help-block"></span>
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
                    </fieldset>
                </form>
            </div>

        </div>
        <div class="col-lg-4">


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