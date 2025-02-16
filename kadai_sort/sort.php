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
        $nums = [15, 4, 18, 23, 10];
        echo '昇順にソートします。<br>';
        sort($nums);        
        foreach($nums as $num) {
            echo $num . '<br>';
        }

        echo '降順にソートします。<br>';
        rsort($nums);        
        foreach($nums as $num) {
            echo $num . '<br>';
        }
        ?>
    </p>    
</body>
</html>