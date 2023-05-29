<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <script src="js/cadastro.js" defer></script>
    <title>Cadastro de clientes</title>
</head>
<body>
    <div id="containerShadow"></div>
    <header>
        <a href="../index.html">
            <img src="../img/logoMini-white.png" alt="">
            <p>Dev Johnny</p>
        </a>
    </header>
    <div class="content">
        <h1>Cadastre-se </h1>
        <form action="../home/save.php?acao=cadastrar" method="post" id="form">
            <input type="hidden" name="acao" value="cadastrar">
            <div>
                <label class="label-text" for="inome">Nome e sobrenome</label>
                <input type="text" name="nome" placeholder="Digite seu nome" class="inputs" id="inome" min="3"  oninput="nameValidade()">
                <label for="inome" class="required">O nome deve ter no minímo 3 caracteres</label>
            </div>
            <div>
                <label class="label-text" for="imail">Email</label>
                <input type="email" name="email" placeholder="Email" class="inputs" id="imail"  oninput="emailValidate()">
                <label for="imail" class="required">Digite um email válido</label>
            </div>
            <div>
                <label class="label-text" for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Senha" class="inputs" id="isenha" min="8"  oninput="mainPass()">
                <label for="isenha" class="required">A senha deve ter no minímo 8 caracteres</label>
            </div>
            <div>
                <input type="password" placeholder="Repita sua senha" class="inputs" id="iisenha"  oninput="mainPass()">
                <label for="iisenha" class="required">A senha tem que ser igual compatível</label>
            </div>
            <p>Sexo:</p>
            <div class="box-select">
                <div>
                    <input type="radio" id="m" value="M" name="sexo" checked>
                    <label for="m">Masculino</label>
                </div>
                <div>
                    <input type="radio" id="f" value="F" name="sexo" >
                    <label for="f">Feminino</label>
                </div>
            </div>
            <div>
                <nav>
                    <p><a href="../login/login.php">Já tem conta? <strong>Entrar</strong></a></p>
                </nav>
            </div>
            <input type="submit" name="submit" id="enviar" value="Cadastre-se">
        </form>
    </div>
</body>
</html>