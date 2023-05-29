<?php 

if (!isset($_SESSION['email']) or empty($_SESSION['email'])) {
    header("Location: ../login/login.php");
}
?>
<head>
    <link rel="stylesheet" href="css/new-user.css">
    <script src="./js/new-user.js" defer></script>
    <style>
        #viewPass {
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
        }

        #viewPass > svg {
            color: #88B8D7;
            position: absolute;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
            transition: 0.4s;
        }

        #viewPass > svg:hover {
            color: black;
        }

        #isenha {
            width: 100%;
        }
    </style>
</head>
<div id="bg">
    </div>
<div class="content">
    
    <form action="save.php?acao=create" method="post" id="form">
        <h1>Novo usuario</h1>
        <div>
            <label class="label-text" for="inome">Nome e sobrenome</label>
            <input type="text" name="nome"  placeholder="Digite seu nome" class="inputs" id="inome" min="3" oninput="nameValidade()">
            <label for="inome" class="required">O nome deve ter no minímo 3 caracteres</label>
        </div>
        <div>
            <label class="label-text" for="imail">Email</label>
            <input type="email" name="email"  placeholder="Email" class="inputs" id="imail" oninput="emailValidate()">
            <label for="imail" class="required">Digite um email válido</label>
        </div>
        <div>
            <label class="label-text" for="isenha">Senha</label>
            <div id="viewPass">

                <input type="password" name="senha"  placeholder="Senha" class="inputs" id="isenha" min="8" oninput="mainPass()">

                <svg onclick="mostrarPass()" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16" >
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                </svg>

            </div>
            <label for="isenha" class="required">A senha deve ter no minímo 8 caracteres</label>
        </div>
        <p>Sexo:</p>
        <div class="box-select">
            <div>
                <input type="radio" id="m" value="M" name="sexo" checked>
                <label for="m">Masculino</label>
            </div>
            <div>
                <input type="radio" id="f" value="F" name="sexo">
                <label for="f">Feminino</label>
            </div>
        </div>
        <input type="submit" name="submit" id="enviar" value="Cadastrar">
    </form>
</div>

<script defer>
    function mostrarPass(){
        console.log('click')
        if (document.querySelectorAll('input')[3].type == 'password') {
            document.querySelectorAll('input')[3].type = 'text'
        } else {
            document.querySelectorAll('input')[3].type = 'password'
        }
    }

</script>