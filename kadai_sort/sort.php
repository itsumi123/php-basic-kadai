<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //ソート関数を作る
        function sort_2way($array, $order) {
            // もし引数$orderがtrueならば。。
            if ($order) {
              echo '昇順にソートします。<br>';

              // 引数$arrayを昇順にソートする
              sort($array);  

            } else {
              echo '降順にソートします。<br>';
              rsort($array);
            }

            // ソートした配列のデータを１行ずつ表示する
            foreach ($array as $num) {
            echo $num . '<br>';
            }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // 作ったソート関数を呼び出す（昇順）
        sort_2way($nums, true);

        // 作ったソート関数を呼び出す（降順）
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>