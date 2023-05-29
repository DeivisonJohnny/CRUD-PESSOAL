<?php
    include_once("../connection/connect.php");
    if (!isset($_SESSION['email']) or empty($_SESSION['email'])) {
        header("Location: ../login/login.php");
    }

    $listSql = mysqli_query($conn, "SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="css/user-lister.css">
</head>

<body>
<div id="bg">
    </div>
    <main>
        <table>
            <caption>Lista de usuários</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Sexo</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($listSql) > 0) {
                    while ($row = mysqli_fetch_assoc($listSql)) {
                        echo "<tr>";
                        echo "<td>" . $row["id"];
                        echo "</td>";
                        echo "<td>" . $row["nome"];
                        echo "</td>";
                        echo "<td><p>" . $row["email"];
                        echo "</p></td>";
                        echo "<td>" . $row["senha"];
                        echo "</td>";
                        echo "<td>" . $row["sexo"];
                        echo "</td>";
                        echo "<td><button onclick=\"location.href = 'index.php?page=editar&id=".$row['id']."'\"><svg  class='editarBtn' xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
                                class='bi bi-pen' viewBox='0 0 16 16'>
                                <path
                                    d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z' />
                            </svg></button>";
                        echo "<td><button onclick=\"if(confirm('Realmente deseja deletar o registro')){location.href ='save.php?acao=deletar&id=".$row['id']."';}\"><svg  class='deletarBtn' xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
                                class='bi bi-trash' viewBox='0 0 16 16'>
                                <path
                                    d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z' />
                                <path
                                    d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z' />
                            </svg></button>";
                        echo "</td>";
                        echo "</td>";
                        echo "</tr>";
                    }
                }

                ?>
            </tbody>
        </table>
</div>

    </main>
</body>

</html>
