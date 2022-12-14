<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/base.css">
    <title>Login</title>
</head>
<body>
    <main>
        <header>
            <h1 class="titulo">Projeto - Backend UNISUAM</h1>
        </header>

        <nav>
            <a href="../paginas_publicas/queries.php" target="_self">Queries usadas</a>
            <a href="../paginas_publicas/modelo_dados.php" target="_self">Modelo de Dados</a>
            <a href="../PHP/form_cadastro.php" target="_self">Cadastro</a>
            <a href="../PHP/form_login.php" target="_self">Login</a>
        </nav>

        <div class="titulo2"><h1>Entrar no Sistema Telecall</h1></div>

            <?php
                // mensagem de erro //
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    session_unset();
                }
            ?>

            <form action="../php/verifica_login.php" method="POST">

                <label>E-mail<br>
                    <input type="email" name="email">
                </label> <br>

                <label>Senha<br>
                    <input type="password" name="senha">
                </label> <br><br>

                <button type="submit" name="entrar" value="entrar">Entrar
                </button>
            </form>
    </main>

</body>
</html>