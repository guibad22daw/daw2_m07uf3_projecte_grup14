<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Error d'accés</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .btn {
                border-radius: 20px !important;
                padding: 7px 20px 7px 20px !important;
            }
        </style>
    </head>
    <body>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center">
                <h1 class="display-1 fw-bold">500</h1>
                <p class="fs-3"> <span class="text-danger">Oops!</span> Error del servidor intern</p>
                <p class="lead">
                    Ha ocorregut un error de connexió o lectura de la base de dades.
                </p>
                <a href="{{ url('/') }}" class="btn btn-danger mt-3">Torna a la pàgina d'inici</a>
            </div>
        </div>
    </body>
</html>