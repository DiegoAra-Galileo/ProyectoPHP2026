<?php
echo "Hola mundo, soy Diego Ara";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Diego Ara</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #b1bbe5 0%, #465193 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            padding: 40px;
            text-align: center;
            max-width: 500px;
            width: 90%;
        }
        
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
        }
        
        .message {
            color: #667eea;
            font-size: 20px;
            margin-bottom: 30px;
            font-weight: 500;
        }
        
        img {
            width: 300px;
            height: 300px;
            border-radius: 10px;
            object-fit: cover;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido</h1>
        <div class="message">
            <?php echo "Hola mundo, soy Diego Ara"; ?>
        </div>
        <img src="foto.jpg" alt="Foto de perfil">
    </div>
</body>
</html>