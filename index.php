<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aqui você faria a verificação do login, por exemplo, consultando um banco de dados.
    // Esse é um exemplo simplificado:
    if ($username == 'EliveltonB12' && $password == '12041993') {
        echo "Login realizado com sucesso!";
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>
