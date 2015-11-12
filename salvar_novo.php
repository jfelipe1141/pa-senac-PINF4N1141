    <?php

    if (isset($_POST['nome'])) {

        $mysqli = new mysqli("127.0.0.1", "root", "", "joao_pa");

        $mysqli->set_charset('utf8');
        $con = $mysqli->prepare("INSERT INTO cliente (nome, email, senha) VALUES (?, ?, ?)");

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = sha1($_POST['senha']);

        $con->bind_param("sss", $nome, $email, $senha);

        if ($con->execute()) {
            header('location:index.php');
        } else {
            echo 'Erro! ' . $con->error;
        }
    }