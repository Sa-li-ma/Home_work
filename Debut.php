<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .grand{
            width: 95%;
            height: 95%;
            background-color: rgb(160, 107, 160);
        }
    </style>
</head>
<body>
    <div class="grand">
        <div class="petit">
            <h1>Calcul</h1>
        </div>
        <div>
            <?php
              $rayon = $_post["number"]
            ?>
            <form action="" method="post">
            <input type="text">
            <label for="">Taper le rayon</label>
            </form>

        </div>

    </div>
</body>
</html>