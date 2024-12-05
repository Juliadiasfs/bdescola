<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: green; 
            font-family: Arial, sans-serif; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
        }

      
        .button {
            background-color: #4CAF50; 
            color: white; 
            padding: 20px 50px; 
            text-align: center; 
            text-decoration: none; 
            display: inline-block;
            font-size: 24px; 
            margin: 20px; 
            border-radius: 10px; 
            cursor: pointer; 
            transition: background-color 0.3s; 
        }

 
        .button:hover {
            background-color: #45a049; 
        }
    </style>
</head>
<body>

  
    <a href="aluno.php">
        <button class="button">Aluno</button>
    </a>
    <a href="professor.php">
        <button class="button">Professor</button>
    </a>

</body>
</html>

