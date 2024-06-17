<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }

        h1{
            text-align: center;
        }

        li{
            font-size: 25px;
        }
        </style>
</head>
<body>
    <h1>Todos os países da Europa</h1>
    <?php
    foreach($países as $país){
    echo "<li>País: ".$país->países."</li>";
    }
    ?>
    <a href="/Inicio"><h2>Retornar</h2></a>
</body>
</html>