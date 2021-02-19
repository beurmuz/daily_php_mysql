<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function.php</title>
</head>
<body>
    <h1>function</h1>
    <?php  
        $str = "소금 - 위로";
        echo $str;
    ?>

    <h2>strlen()</h2>
    <?php
        echo strlen($str);
    ?>

    <h2>nl2br()</h2>
    <?php
        $str2 = "오늘 일 많이 힘들었지?
        눈에 써있지만 너는 웃어 보여
        지친 어깨 위로 슬픔이 보여
        눈에 써있지만 애써 웃어 보여
        이리 와 안아줄게
        내가 해줄 수 있는 게 있다면
        해줄 수 있는 말이 있다면
        이제 맛있는 거
        먹으러 가자
        점점 투정이 늘어
        서운함도 늘지만
        우리 사랑이 커져서
        커져서 그래
        이렇게 하루 끝에
        너와 내가 만나 마주함에
        감사해 감사해지네
        너에게 되어줄게
        하루 끝에 위로가
        너는 내게 기대도 돼
        힘이 되어줄게
        위로해보지만
        오히려 받고 있어 ";
        echo nl2br($str2);
    ?>
</body>
</html>