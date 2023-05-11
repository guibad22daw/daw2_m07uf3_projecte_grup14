<html>

<head>
    <title>
        Inici - Happy Flower Family Hotel
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');


        * {
            box-sizing: border-box;
            padding: 5;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100%;
            margin-top: -50px;
        }

        body {
            width: 100%;
            height: 100%;
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(-60deg, rgb(150, 76, 54), rgb(126, 33, 68), rgb(22, 99, 127), rgb(21, 122, 98));
            background-size: 400% 400%;
            animation: gradient 20s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .centered-element {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .centered-element h1 {
            font-weight: bold;
            font-size: 55px;
        }


        .btn {
            width: 200px;
            display: block;
            padding: 10px;
            border-radius: 20px;
            font-size: 15px;
            outline: 0;
            background: rgba(255, 255, 255, 1);
            color: black;
            border: none;
            transition: 0.5s;
        }

        .btn:hover {
            color: white;
            background-color: black;
            transition: 0.5s;
            cursor: pointer;
            outline: 0;
            background: rgba(0, 0, 0, 0.6);
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="/img/logo_white.png" width="200px" height="200px">
        <div class="centered-element">
            <h1> HAPPY FLOWER FAMILY HOTEL</h1>
            <h4> Aplicació de gestió d'habitacions, clients, reserves i usuaris.</h4>
            @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}" class="btn mt-3">Dashboard</a>
                @else
                <a href="{{ url('/login') }}" class="btn mt-3">Inicia sessió</a>
                @endauth
            @endif
        </div>
    </div>
</body>

</html>