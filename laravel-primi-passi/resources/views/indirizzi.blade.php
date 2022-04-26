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

    ol {
        display: inline-block;
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
    <h1>QUESTI SONO GLI INDIRIZZI</h1>

    <ol>
        <li>{{ $paese }}</li>
        <li>{{ $citta }}</li>
        <li>{{ $via }}</li>
        <li>{{ $cap }}</li>
    </ol>

    <br>
    <a href="/">Go to homepage</a>

</body>

</html>