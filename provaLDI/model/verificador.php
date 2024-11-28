<?php
session_start();  

include_once "../factory/conexao.php";
$email = $_POST['cxemail'];
$senha = $_POST['cxsenha'];

$query = "SELECT nome, email, senha, perfil FROM tbusuario WHERE email = '$email' AND senha = '$senha' ";
$result = mysqli_query($conn, $query);
$linha = mysqli_fetch_assoc($result);

if ($linha) {
    $perfil = $linha['perfil'];

    if ($perfil == 'Aluno') {  
        $_SESSION['nome'] = $linha['nome'];
        $_SESSION['email'] = $linha['email'];
        header('Location: ../view/aluno.php');
        echo "Perfil inválido";  
    }
    else if ($perfil == 'Professor') {  
        $_SESSION['nome'] = $linha['nome'];
        $_SESSION['email'] = $linha['email'];
        header('Location: ../view/professor.php');
        echo "Perfil inválido";  
    }
    else if ($perfil == 'Diretor') {  
        $_SESSION['nome'] = $linha['nome'];
        $_SESSION['email'] = $linha['email'];
        header('Location: ../view/diretor.php');
        echo "Perfil inválido";  
    }
    
} else {
    echo "Usuário ou senha inválidos";  

}
?>