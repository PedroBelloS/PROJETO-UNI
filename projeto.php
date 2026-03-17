<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Power Fitness</title>
<link rel="stylesheet" href="estilos.css?v=2">
</head>

<body>

    <?php

        $erro = ""; // cria a variável vazia

        if(isset($_GET["usuario"]) && isset($_GET["senha"])){

            $nome = $_GET["usuario"];
            $senha = $_GET["senha"];

            if($nome == "Ailton" && $senha == "1234"){
                header("Location: php.php");
                exit();
            }

            if($nome == "Arthur" && $senha == "1234"){
                header("Location: php.php");
                exit();
            }


            else{
                $erro = "Usuário ou senha incorretos";
            }

        }

    ?>

    <h1>POWER FITNESS</h1>

    <div class="caixa">

        <form method="get">

            <h1>Login</h1>

            <input type="text" name="usuario" placeholder="Usuario"><br><br>
            <input type="password" name="senha" placeholder="Senha"><br><br>

            <button type="submit"><b>Logar</b></button><br>

            <p><?php echo $erro; ?></p>

            <a href="cadastro.php">Cadastre-se</a>

        </form>

    </div>



</body>
</html>