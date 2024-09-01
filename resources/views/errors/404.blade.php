<!-- resources/views/errors/404.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Não Encontrada</title>
    <style>
        body {
            text-align: center;
            padding: 50px;
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 50px;
        }

        p {
            font-size: 20px;
        }

        a {
            color: #3490dc;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>404</h1>
    <p>A página que você está procurando não foi encontrada.</p>
    <p>Você pode voltar para a <a href="{{ url('/products') }}">página de produtos</a>.</p>
</body>

</html>
