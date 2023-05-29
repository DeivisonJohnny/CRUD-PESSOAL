<?php 
    include_once('../connection/connect.php');

    if (!isset($_SESSION['email']) or empty($_SESSION['email'])) {
        header("Location: ../login/login.php");
    }

    if(!isset($_GET['id'])) {
        header("Location: ../home/");
    }else {
        $editSql = "SELECT * FROM usuarios WHERE id = ". $_GET['id'];
        $result = mysqli_fetch_assoc(mysqli_query($conn, $editSql));
    }

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/edit-user.css">
    <script src="js/edit-user.js" defer></script>
</head>
<body>
<div id="bg">
    </div>
    <main>
        <form action="save.php?acao=atualizar&id=<?=$_GET['id']?>" method="post">
            <h1>Atualizar cadastro</h1>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Nome" oninput="validName()" value="<?= $result['nome'] ?>">
                <span class="required">O nome deve ter ao menos 3 caracteres</span>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" oninput="validEmail()" value="<?= $result['email'] ?>">
                <span class="required">Digite um email válido</span>

            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="text" name="senha" id="senha" placeholder="Password" oninput="validPass()" value="<?= $result['senha'] ?>">
                <span class="required">O senha deve ter ao menos 8 caracteres</span>
                
            </div>
            <div>
            <p>Sexo</p>
                <div class="box-radio">
                    
                    <label for="mas">Masculino</label>
                    <input type="radio" name="sexo" id="mas" value="M" <?php if($result['sexo'] == 'M'){echo "checked";}?>>
                </div>
                <div class="box-radio">
                    <label for="fem">Feminino</label>
                    <input type="radio" name="sexo" id="fem" value="F" <?php if($result['sexo'] == 'F'){echo "checked";}?>>
                </div>

            </div>
            <div>
                <input type="submit" name="" value="Atualizar">
            </div>
        </form>
    </main>
</body>
</html>