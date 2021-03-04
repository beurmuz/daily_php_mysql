<?php
    $conn = mysqli_connect("localhost", "root", "S10803a", "opentutorials");

    echo "<h1>single row</h1>"; 
    $sql = "SELECT *FROM topic WHERE id ='5';
    $result = mysqli_query($conn, $sql);
    -- var_dump($result->num_rows);
    $row = mysqli_fetch_array($result); // 배열로 가져오기
    echo '<h2>'.$row['title'].'</h2>';
    echo $row['description'];
?> 