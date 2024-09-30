<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>萬年曆</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <button type="button" onclick="location.href='../'" class="back">回作品集</button>

  <!-- 背景的流星 -->
  <img src="./img/star.png" alt="" class="star">
  <img src="./img/star.png" alt="" class="star2">
  <img src="./img/star.png" alt="" class="star3">
  <img src="./img/star.png" alt="" class="star4">
  <img src="./img/star.png" alt="" class="star5">
  <img src="./img/star.png" alt="" class="star6">




  <?php
  $year = (isset($_GET["year"])) ? $_GET["year"] : date("Y"); //get year存在 year = get year 不存在=今年
  $month = (isset($_GET["month"])) ? $_GET["month"] : date("n");
  $nextMonth = $month + 1;
  $lastMonth = $month - 1;
  $nextYear = $year;
  $lastYear = $year;
  if ($nextMonth >= 13) {
    $nextYear += 1;
    $nextMonth = 1;
  }
  if ($lastMonth <= 0) {
    $lastYear -= 1;
    $lastMonth = 12;
  }

  $firstDay = strtotime(date("$year-$month-1")); //這個月第一天
  $days = date("t", $firstDay); //這個月有幾天
  $firstDay = date("w", $firstDay); //這個月第一天是星期幾 0~6
  $week = ($firstDay + $days) / 7; //這個月有幾周
  $tmp = 1;
  $months = [];
  //將這個月的日期先存在months陣列裡面
  for ($i = 0; $i < $week; $i++) {
    for ($j = 0; $j < 7; $j++) {
      if ($i == 0 && $j < $firstDay || $tmp > $days) {
        $months[] = '';
      } else {
        $months[] = date("$year-$month-$tmp");
        $tmp++;
      }
    }
  }
  //今年節日的陣列
  $holiday = [
    "2024-1-1" => "元旦",
    "2024-2-8" => "春節",
    "2024-2-9" => "春節",
    "2024-2-10" => "春節",
    "2024-2-11" => "春節",
    "2024-2-12" => "春節",
    "2024-2-13" => "春節",
    "2024-2-14" => "春節",
    "2024-2-28" => "和平紀念日",
    "2024-4-4" => "兒童節 清明節",
    "2024-4-5" => "調整放假",
    "2024-6-10" => "端午節",
    "2024-9-17" => "中秋節",
    "2024-10-10" => "國慶日",
  ];
  //補班日陣列
  $work = [
    "2024-2-17" => "補行上班",
  ];

  ?>
  <div class="contain">
    <a href="?year=<?= $lastYear ?>&month=<?= $lastMonth ?>"><img src="./img/left-arrow.png" alt=""
        class="left-arrow arrow"></img></a>
    <!-- 回上個月 -->

    <div class="container">
      <a href="?" class="title">
        <span><?= $year ?>年</span>
        <span><?= $month ?>月</span>
        <div class="test">點擊回今日</div>
      </a>
      <!-- 顯示年跟月 點擊可以回到今天 -->

      <div style="line-height:10vh;font-size:26px;color:yellow">日</div>
      <div style="line-height:10vh;font-size:26px;color:white">一</div>
      <div style="line-height:10vh;font-size:26px;color:white">二</div>
      <div style="line-height:10vh;font-size:26px;color:white">三</div>
      <div style="line-height:10vh;font-size:26px;color:white">四</div>
      <div style="line-height:10vh;font-size:26px;color:white">五</div>
      <div style="line-height:10vh;font-size:26px;color:yellow">六</div>


      <?php
      

      for ($i = 0; $i < count($months); $i++) {
        if (date("Y-n-j") == $months[$i]) {//如果是今日加入today的class
          echo "<div class=\"today";
        }
        if ($i % 7 == 0 || $i % 7 == 6) {//如果是六日加入weekend的class
            echo "<div class=\"weekend";
        }else{//如果是平日加入days的class
            echo "<div class=\"days";
        }
          if (isset($holiday[$months[$i]])) {//如果是節日加入holiday的class
            echo " holiday\">";
          } else if (isset($work[$months[$i]])) {//如果是補班日加入work的class
            echo " work\">";
          } else {
            echo "\">";
          }
    
          echo date("j", strtotime($months[$i]));//顯示日期
          echo "<div>";
    
          if (isset($holiday[$months[$i]])) {
            echo $holiday[$months[$i]];//如果有節日顯示節日
          } else if (isset($work[$months[$i]])) {
            echo $work[$months[$i]];//如果需要補班顯示補班
          }
          echo "</div>";
    
          echo "</div>";
          
        }
      
      ?>
    </div>
    <!-- 到下個月 -->
    <a href="?year=<?= $nextYear ?>&month=<?= $nextMonth ?>"><img src="./img/right-arrow.png" alt=""
        class="right-arrow arrow"></img></a>

  </div>
</body>

</html>