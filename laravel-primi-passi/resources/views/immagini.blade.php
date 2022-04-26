<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        text-align: center;
    }

    .img {
        margin-bottom: 2rem;
    }

    a {
        text-decoration: none;
        background-color: red;
        padding: 10px 20px;
        color: white;
        border-radius: 15px;
    }
</style>

<body>
    <h1>QUESTE SONO LE IMMAGINI</h1>

    <div class="img">
        <img src="{{ $immagine }}" alt="">
    </div>

    <a href="/">Go to homepage</a>

</body>

</html>