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
            color:aqua;
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
    <main>  </main>
        <div id="imagem">
            <img src="imagem.jpg"> 
        </div>

        <div id="dados">
<span> ID: </span>
<span> NOME: </span>

<?php
    include "conecta.php";
    $sql = "SELECT id, nome, senha, email FROM usuario";
    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($resultado) > 0){
        while ($registro = mysqli_fetch_assoc($resultado)){
            echo "<span> ID </span>". $registro["id"];
            echo "<span> NOME </span>". $registro["nome"];
            echo "<span> E-mail </span>". $registro["email"];
            echo "<br>";
        }
    } 
    else {
        echo "Nenhum registro encontrado!";
    }


    ?>
        </div>
        </main>
</body>

</html>
