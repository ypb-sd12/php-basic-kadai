<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;
    $sum_score = 0;
    for($i = 1; $i <= 10; $i++){
        $score = "score{$i}";
        $sum_score += $$score;
    }
    // echo $sum_score . "<br>";
    $average_score = $sum_score/10;
    echo $average_score . "<br>";
    ?>
</body>
</html>