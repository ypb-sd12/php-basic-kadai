<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];
        function sort_2way($array, bool $order)
        {
            $sorted_array = $array;
            echo $order ? "昇順にソートします。<br>" : "降順にソートします。<br>";
            $order ? sort($sorted_array) : rsort($sorted_array);
            // var_dump($sorted_array);
            foreach ($sorted_array as $index => $value) {
                echo $value . "<br>";
            }
        }
        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>