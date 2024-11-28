<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
    <img src="img/abra-o-livro.png" alt="Logo">
    <h1>Colégio Alpha</h1>
    </header>

    <div class="form-container">
    <form action="model/verificador.php" method="POST">
        <label for="cxemail">E-mail:</label>
        <input type="text" id="cxemail" name="cxemail">
        
        <label for="cxsenha">Senha:</label>
        <input type="password" id="cxsenha" name="cxsenha">
        
        <input type="submit" value="Enviar">
    </form>
</div>

    <footer>
        <p>&copy; 2024 Julia Dias. Todos os direitos reservados.</p>
    </footer>
</body>
</html>