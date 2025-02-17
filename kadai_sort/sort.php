<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        function sort_2way(array $array, bool $order): array {
            if ($order === true) {
                sort($array);  // 昇順ソート
            } else {                
                rsort($array); // 降順ソート
            }
            return $array;
        }

        $array = [15, 4, 18, 23, 10];
        
        echo '昇順にソートします。<br>';
        $sortedAsc = sort_2way($array, true);
        foreach ($sortedAsc as $num) {
            echo $num . '<br>';
        }

        echo '降順にソートします。<br>';
        $sortedDesc = sort_2way($array, false);
        foreach ($sortedDesc as $num) {
            echo $num . '<br>';
        }
        ?>
    </p>
</body>
</html>