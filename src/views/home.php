<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body { font-family: sans-serif; text-align: center; padding: 50px; background: #f4f4f4; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); max-width: 400px; margin: 0 auto; }
        h1 { color: #2c3e50; }
        .btn { display: inline-block; padding: 10px 20px; background: #27ae60; color: white; text-decoration: none; border-radius: 5px; margin-top: 15px; }
    </style>
</head>
<body>

    <div class="card">
        <h1> Power by <strong>Kaet</strong></h1>
        <p>Sua estrutura MVC está rodando perfeitamente.</p>
        <hr>
        <p>Próximo passo: Migrar o Login.</p>
        <a href="/login" class="btn">Ir para Login</a>
    </div>

</body>
</html>