<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
      //  独自のソート関数を作る
      function sort_2way($array, $order) {

      if($order === true) {
        echo '昇順にソートします。<br>';
        sort($array);
        
      } else {
        echo '降順にソートします。<br>';
        rsort($array);
      }
      
      foreach($array as $num) {
        echo $num. '<br>';
    }
  }

    // ソート対象の配列を用意する
    $nums = [15, 4, 18, 23, 10];

    // 独自のソート関数を呼び出す
    // 昇順ソート
    sort_2way($nums, true);

    // 降順ソート
    sort_2way($nums, false);
    ?>
  </p>
</body>

</html>