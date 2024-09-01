<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Produtos - Laravel 11</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="container">
        <h3 class=" mt-3">CRUD de produtos usando Laravel 11 - <a href="https://www.allphptricks.com/"
                target="_blank">AllPHPTricks.com</a>
        </h3>
        @yield('content')
        <!-- <div class="row justify-content-center text-center mt-3"> -->
        <div class="mt-3">
            <div class="col-md-12">
                <p>Tutorial:
                    <a href="https://www.allphptricks.com/simple-laravel-11-crud-application-tutorial/"
                        target="_blank"><strong>Tutorial
                            Link</strong></a>
                </p>
                <!-- <p>
                    For More Web Development Tutorials Visit: <a
                        href="https://www.allphptricks.com/"><strong>AllPHPTricks.com</strong></a>
                </p> -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
