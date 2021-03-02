<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop.php</title>
</head>
<body>
    <?php
        echo '1<br>';
        echo '2<br>';
        echo '3<br>';
    ?>

    <h1>while</h1>
    <?php
        echo '1<br>';
        $i = 0;
        while($i<3) {
            echo '2<br>';
            $i = $i +1;
        }
        echo '3<br>';
    ?>
</body>
</html>