<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_sort</title>
</head>

<body>
    <p>
        <?php
        //配列
        $nums = [15, 4, 18, 23, 10 ];

        //関数
        function sort_2way($array,$order) {
          if($order === true) {
            echo '昇順にソートします。<br>';
            sort($array);
          } else {
            echo '降順にソートします。<br>';
            rsort($array);
          }
          foreach ($array as $element) {
            echo $element . '<br>';
          }
        }

        sort_2way($nums,true);
        sort_2way($nums,false);
        
        ?>
    </p>
</body>

</html>

<!-- http://localhost:8888/kadai_sort/sort.php -->
