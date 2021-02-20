<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <!-- <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li> -->
        <?php
            $list = scandir('./data');
            $i = 0;
            while($i<count($list)) {
                if($list[$i] != '.') {
                    if($list[$i] != '..') { 
                        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
                    }
                }
                $i = $i + 1;
            }
            // echo "<li>$list[0]</li>\n";
            // echo "<li>$list[1]</li>\n";
            // echo "<li>$list[2]</li>\n";
            // echo "<li>$list[3]</li>\n";
            // echo "<li>$list[4]</li>\n";
            // echo "<li>$list[5]</li>\n";
        ?>
    </ol>
    <h2>
        <?php 
            if(isset($_GET['id'])) { // 값이 세팅되어 있으면
                echo $_GET['id'];
            } else{ // 값이 세팅되어 있지 않으면
                echo "Welcome";
            }
        ?>
    </h2>
    <?php
        if(isset($_GET['id'])) {
            echo file_get_contents("data/".$_GET['id']);
        }else {
            echo "Hello. PHP!";
        }
        
    ?>
</body>
</html>