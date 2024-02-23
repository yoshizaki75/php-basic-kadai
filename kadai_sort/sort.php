<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];
        function sort_2way($array, $order) {
            if($order) {
                echo '昇順にソートします。<br>';
                sort($array);
            } elseif ($order == FALSE) {
                echo '降順にソートします、<br>';
                rsort($array);
                }
              foreach ($array as $num) {
                echo $num . '<br>';
              }
        }

        sort_2way($nums, TRUE);

        sort_2way($nums, FALSE);
               
        ?>
    </p>
</body>

</html>