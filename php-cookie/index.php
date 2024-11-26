<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $numero = htmlspecialchars($_POST["numero"]);

    setcookie("nome", $nome, time() + (7 * 24 * 60 * 60), "/");
    setcookie("email", $email, time() + (7 * 24 * 60 * 60), "/");
    setcookie("numero", $numero, time() + (7 * 24 * 60 * 60), "/");


    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}

$nome = isset($_COOKIE["nome"]) ? $_COOKIE["nome"] : null;
$email = isset($_COOKIE["email"]) ? $_COOKIE["email"] : null;
$numero = isset($_COOKIE ["numero"]) ? $_COOKIE["numero"] : null;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Teste Cookie</title>
</head>
<body>
    <?php if ($nome): ?>
        <h1>Fala comigo : <?= $nome ?> ! </h1>

        <h1>Cadastro realizado com sucesso para o email : <?= $email ?> </h1>

        <h1>O número é : <?= $numero ?>  </h1>

        <p> <a href="?reset=true">Voltar</a></p>

        <?php
        if (isset($_GET["reset"])) {
            setcookie("nome", "", time() - 3600, "/");
            header("Location: " . $_SERVER["PHP_SELF"]);
            exit;
        }
        ?>
    <?php else: ?>
        <h2 >Opa, digite seu nome</h2>
        <form method="POST" action="">
            <label for="nome">Digite seu nome</label>
            <input type="text" id="nome" name="nome" required placeholder="Seu nome">
            <br/>
            <br/>
            <label for="email">Digite seu E-mail:</label>
            <input type="email" id="email" name="email" required placeholder="proz@gmail.com">
            <br/><br/>
            <label for="numero">Digite seu número:</label>
            <input type="tel" id="numero" name="numero" required placeholder="(31) 9999-9999">
            <br/>
            <br/>
            <button type="submit">Enviar</button>
        </form>




    <?php endif; ?>





</body>
</html>