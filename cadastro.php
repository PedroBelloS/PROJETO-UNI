<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Power Fitness</title>
<link rel="stylesheet" href="cadastro.css">
</head>







    <?php

        $senha1 = $_GET["senha"];
        $senha2 = $_GET["senha2"];

        if(){}


        $erro = "";

        if(isset($_GET["nome"]) && isset($_GET["email"]) && isset($_GET["senha"]) && isset($_GET["senha2"]) && isset($_GET["telefone"])){

            $nome = $_GET["nome"];
            $sobrenome = $_GET["email"];
            $email = $_GET["senha"];
            $senha = $_GET["senha2"];
            $telefone = $_GET["telefone"];

            if(empty($nome) || empty($email) || empty($senha) || empty($senha2) || empty($telefone)){
                $erro = "Preencha todo o formulário";
        
            }


            else{
                header("Location: php.php");
                exit();
            }

        }

    ?>




<body>

    <h1>POWER FITNESS</h1>

    <div class="caixa">

        <form method="get">

            <h1>CADASTRO</h1>

            <input type="text" name="nome" placeholder="Nome completo" required><br><br>
            <input type="text" name="email" placeholder="Email"required><br><br>
            <input type="password" name="senha" placeholder="Senha"required><br><br>
            <input type="password" name="senha2" placeholder="Digite novamente a senha"required><br><br>
            <input type="tel" name="telefone" placeholder="Telefone"required><br><br>

            <button type="submit"><b>Cadastrar</b></button><br>

            <p><?php echo $erro; ?></p>

        </form>

    </div>



</body>
</html>