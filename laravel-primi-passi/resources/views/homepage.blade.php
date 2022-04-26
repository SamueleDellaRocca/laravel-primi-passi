<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* style css  */
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }


        nav {
            height: 100px;
            width: 100%;
            background-color: lightgreen;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 2rem;
            text-transform: uppercase;
            font-size: 2rem;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .red {
            color: red;
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <div>
                <a href="/contatti">contatti</a>
            </div>

            <div>
                <a href="/immagini">immagini</a>
            </div>

            <div>
                <a href="/indirizzi">indirizzi</a>
            </div>
        </nav>
    </header>

    <h1 class="red">HELLO WORLD</h1>
    <h1 class="red"> {{ $testo }} </h1>


</body>

</html>