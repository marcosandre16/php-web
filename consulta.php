<?php
    include "conecta.php";
    $sql = "SELECT id, nome, senha, email FROM usuario";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0){
        while ($registro = mysqli_fetch_assoc($resultado)){
            echo "id: " . $registro["id"]. " nome: " . $registro["nome"].
            " senha: ". $registro["senha"]. "email:". $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado!";
    }
    ?>
