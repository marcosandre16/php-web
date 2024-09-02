<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <style>
        ul {
            display: flex;
            list-style: none;
        }

        li {
            padding: 5px;
        }

        a {
            color: aqua;
            text-decoration: none;
            font-size: 20px;
        }

        span {
            color: black;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li><a href="">Contatos</a>
                </li>
                <li><a href="">Sobre</a>
                </li>
                <li><a href="">Login</a>
                </li>
            </ul>
        </nav>
    </header>
    <main> </main>
    <div id="imagem">
        <img src="imagem.jpg">
    </div>

    <div id="dados">
        <table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
            <?php
            include "conecta.php";
            $sql = "SELECT id, nome, senha, email FROM usuario";
            $resultado = mysqli_query($conexao, $sql);
            while ($registro = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $registro['id'] . "</td>";
                echo "<td>" . $registro['nome'] . "</td>";
                echo "<td>" . $registro['email'] . "</td></tr>";



            }
            ?>

        </table>
    </div>
    </main>
</body>

</html>
