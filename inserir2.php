<?php include "conecta.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// echo $nome; "<br>";
// echo $email; "<br>";
// echo $senha; "<br>";



    $sql = "INSERT INTO usuario (nome, senha , email) values ('Testando', 'teste' , 'teste')";
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado > 0) {
echo "Cadastrado com Sucesso!"; 

    }  
    ?>
