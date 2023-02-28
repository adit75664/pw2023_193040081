<!DOCTYPE html>
<html>
<head>
    <title>2c</title>
    <style>
        .kotak {
            background-color: salmon;
            border: 1px solid black;
            width: 30px;
            height: 30px;
            display: inline-block;
            text-align: center;
            margin: 0px;
        }
    </style>
</head>
    <body>
        <?php
              for ($i = 1; $i <= 10; $i++) {
                    for ($j = $i; $j <= 10; $j++) {
                        echo "<div class='kotak'>" . $j . "</div>";
                 }
                    echo "<br>";
             }
         ?>
    </body>
</html>
