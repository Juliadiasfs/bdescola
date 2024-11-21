<?php
include_once "../factory/conexao.php";
    $email = $_POST['cxemail'];
    $senha = $_POST['cxsenha'];
    $query = "SELECT nome, email, senha, perfil FROM tbusuario WHERE email = '$email' AND senha = '$senha' ";
    $result = mysqli_query($conn, $query);
    $busca = mysqli_num_rows($result);
    $linha = mysqli_fetch_assoc($result);
    console.log($result)
            if($percorrer = mysql_fetch_array($result) ){
                    $perfil = $percorrer['perfil'];

                    if($perfil == aluno){

                $_SESSION['nome'] = $linha['nome'];
                $_SESSION['email'] = $linha['email'];
                header('location: aluno.php');
                }


            }
        


        

?>