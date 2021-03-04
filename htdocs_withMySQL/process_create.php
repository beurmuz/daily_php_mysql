<?php
    $conn = mysqli_connect("localhost", "root", "S10803a", "opentutorials");
    $sql = "
        INSERT INTO topic
            (title, description, created)
            VALUES(
                '{$_POST['title']}',
                '{$_POST['description']}',
                NOW()
            )
        ";
    $result = mysqli_query($conn,$sql);
    if($result ===false) {
        echo '저장하는 과정에서 문제가 발생했습니다. 관리자에게 문의해주세요.';
        error_log(mysqli_error($conn)); // 어떤 문제가 발생했는지 확인하기 위해 사용자가 접근할 수 없는 곳에 기록하기
    }else {
        echo '성공했습니다. <a href="index.php">';
    }
    echo $sql;
?>