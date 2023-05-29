<?php 
    session_start();

    if (!isset($_SESSION['email']) or empty($_SESSION['email'])) {
        header("Location: ../login/login.php");
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="js/home.js" defer></script>
    <style>

        body {
            background-image: url(https://source.unsplash.com/1600x900/?landscape);
        }
        td {
            padding: 10px;
            margin: 10px;
        }

        main {
            display: flex;
            flex-direction: column;
        }
    </style>
    <link rel="stylesheet" href="css/home.css">
    <title>Home Page</title>
</head>

<body>
    <header>
        <div>
            <h1>Dev Johnny</h1>
        </div>
        <div>
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="?page=lista">Listar</a></li>
            <li><a href="?page=novo">Cadastrar</a></li>
            <!-- <li><a href="">Atualizar cadastro</a></li> -->
            <!-- <li style="border: none;"><a href="">Delete</a></li> -->
            </ul>
            <menu>
                <span onclick="clickMenu()" id="menu" class="material-symbols-outlined">
                    menu
                </span>
            </menu>
        </div>
    </header>
    <nav id="navbar" style="top: -50%;">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="?page=lista">Listar</a></li>
            <li><a href="?page=novo">Cadastrar</a></li>
            <!-- <li><a href="">Atualizar cadastro</a></li> -->
            <!-- <li style="border: none;"><a href="">Delete</a></li> -->
        </ul>
    </nav>
    <main onclick="exitMenu()">
        <?php 
            switch($_GET['page'] ?? 'lista'){
                case 'novo': 
                    require_once('../home/new-user.php');
                    break;
                case 'lista':
                    require_once('../home/user-lister.php');
                    break;

                case 'editar':
                    require_once('../home/edit-user.php');
                    break;
                
                default:
                require_once('../home/user-lister.php');
            }
        
        ?>
        </section>
    </main>
</body>

</html>