<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Corpo da página */
        body {
            background-color: green; /* Cor de fundo do site */
            font-family: Arial, sans-serif; /* Fonte simples */
            display: flex; /* Usando Flexbox para centralizar */
            justify-content: center; /* Centralizando horizontalmente */
            align-items: center; /* Centralizando verticalmente */
            height: 100vh; /* Garantindo que ocupe toda a altura da tela */
            margin: 0; /* Removendo margens */
        }

        /* Estilos para os botões */
        .button {
            background-color: #4CAF50; /* Cor de fundo do botão */
            color: white; /* Cor do texto */
            padding: 20px 50px; /* Aumentando o padding para deixar os botões maiores */
            text-align: center; /* Alinhando o texto ao centro */
            text-decoration: none; /* Retirando sublinhado dos links */
            display: inline-block; /* Exibindo os botões ao lado */
            font-size: 24px; /* Aumentando o tamanho da fonte */
            margin: 20px; /* Distância entre os botões */
            border-radius: 10px; /* Borda arredondada */
            cursor: pointer; /* Cursor de mão */
            transition: background-color 0.3s; /* Transição suave */
        }

        /* Efeito de hover nos botões */
        .button:hover {
            background-color: #45a049; /* Alteração da cor do botão ao passar o mouse */
        }
    </style>
</head>
<body>

    <!-- Botões para navegação -->
    <a href="aluno.php">
        <button class="button">Aluno</button>
    </a>
    <a href="professor.php">
        <button class="button">Professor</button>
    </a>

</body>
</html>

