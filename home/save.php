<?php
include_once("../connection/connect.php");

session_start();

if (!isset($_SESSION['email']) or empty($_SESSION['email'])) {
    header("Location: ../login/login.php");
}

switch ($_REQUEST['acao']) {
    case 'cadastrar':
        if ((isset($_POST['submit']) == true) and (!empty($_POST['nome']) == true) and (!empty($_POST['email']) == true) and (!empty($_POST['senha']) == true)) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sexo = $_POST['sexo'];

            $inserirSql = "INSERT INTO usuarios(nome, email, senha, sexo) VALUES ('$nome', '$email', '$senha', '$sexo')";

            if (mysqli_query($conn, $inserirSql)) {
                header("Location: ../login/login.php");
                echo "<script>alert('Usuario cadastrado com sucesso')</script>";
            } else {
                echo "<script>alert('Error ao cadastrar')</script>";
                echo "<script>window.history.go(-1)</script>";
            }
        } else {
            header("Location: ../cadastro/cadastro.php");
            echo "<script>alert('Preencha todos os campos')</script>";
        }
        break;

    case 'acessar': 

        $email = $_POST['email'];
        $senha = $_POST['password'];

        $acessSql = mysqli_query($conn,"SELECT *  FROM usuarios WHERE email = '$email' AND senha = '$senha'");

        if (mysqli_num_rows($acessSql) > 0) {
            session_start();    
            $_SESSION['email'] = $email;
            header("Location: ../home/index.php");
            echo "<script>alert('Dados validados')</script>";
        } else {
            header("Location: ../login/login.php");
        }
        break;

        case 'create':

            if (!empty($_POST['nome']) and !empty($_POST['email']) and !empty($_POST['senha']) and !empty($_POST['sexo'])) {
                
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sexo = $_POST['sexo'];

            $homeInserir = mysqli_query($conn, "INSERT INTO usuarios(nome, email, senha, sexo) VALUES ('$nome', '$email', '$senha', '$sexo')");
                var_dump($homeInserir);
            if ($homeInserir) {
                echo "<script>alert('Novo usuario cadastrado')</script>";
                echo "<script>location.href = 'index.php?page=lista'</script>";
            } else {
                echo "<script>alert('Error ao cadastrar')</script>";
            }
            } 
            
            break;

        case 'atualizar':

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sexo = $_POST['sexo'];

            $updateSql = mysqli_query($conn, "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha', sexo = '$sexo' WHERE id = ". $_GET['id'] );
            
            if ($updateSql) {
                header("Location: index.php?page=lista");
                echo "<script>alert('Dados atualizado com sucesso')</script>";
            } else {
                echo "<script>alert('Error')</script>";
                
            }
            break;

        case 'deletar': 

            $deletSql = "DELETE FROM usuarios WHERE id =". $_GET['id'];
            if (mysqli_query($conn, $deletSql)) {
                echo "<script>alert('Cadastro deletado com sucesso')</script>";
                echo "<script>history.go(-1)</script>";
            } else {
                echo "<script>alert('Erro ao deletar cadastro')</script>";
            }
            break;

        default:
            header("Location: ../");
}
