<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>萬年曆</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      background-image: url(./img/bg.jpg);
      background-size: 100%;
      width: 1900px;
      height: 860px;
      animation-name:bg;
      animation-duration: 70s;
      animation-iteration-count:infinite;
      animation-timing-function:linear;
    }

    @keyframes bg {
      from{
        background-size: 100%;
      }
      50%{
        background-size: 120%;
      }
      to{
        background-color: 100%;
      }
    }


    .container {
      margin: 0 auto;
      text-align: center;
      display: flex;
      flex-wrap: wrap;
      width: 1200px;
      height: 95vh;
      margin-top: 15px;
  
      justify-content: center;
      padding: 55px 100px 95px 100px;
      align-content:flex-start;

    }

    .container>div {
      width: calc(100% / 7.6);
      height: 90px;
      margin: 5px;
      padding-top: 5px;
background: rgba(255, 255, 255, 0.08);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(0px);
-webkit-backdrop-filter: blur(0px);
border: 1px solid rgba(255, 255, 255, 0.93);
      font-size: 24px;
    }

    .container>.days:hover,
    .container>.today:hover,
    .container>.weekend:hover,
    .container>.holiday:hover,
    .container>.work:hover {

      
background: rgba(255, 255, 255, 0.36);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(0px);
-webkit-backdrop-filter: blur(0px);
border: 1px solid rgba(255, 255, 255, 0.93);
      font-size: 26px;

    }

    .container>.today {
      border: 2px solid yellowgreen;
      color:yellowgreen;
    }

    .container>.weekend {
      color: yellow;
    }

    .month {
      text-align: center;
      display: flex;
      justify-content: center;
      margin: 0 auto;
      margin-top: 10px;
    }

    .month>a {
      width: 100px;
      margin: 0 5px;
    }

    .month>span {
      width: 100px;
      margin: 0 5px;
    }

    .container>.holiday {
      color: yellow;
    }

    .container>.work {
      color: white;
    }
    .container>.days{
      color:white;
    }
    .container>.title {
      width: 980px;
      height: 100px;
      background: rgba(255, 255, 255, 0.08);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(0px);
-webkit-backdrop-filter: blur(0px);
border: 1px solid rgba(255, 255, 255, 0.93);
color:white;
      margin-bottom: 20px;
      font-family: 'Roboto Mono', monospace;
    }
    .title>span{
      font-size: 50px;
      line-height: 90px;
  
    }
    .left-arrow{
      height: 250px;
      width: 150px;
      position: fixed;
      
      position: fixed;
      right: 1625px;
      top: 345px;
    }
    .right-arrow{
      height: 250px;
      width: 150px;
      position: fixed;
      left: 1625px;
      top: 345px;
    }
    .arrow:hover{
      height: 280px;
      width: 180px;
      top:330px;
    }
    .star{
      height: 800px;
      width: 800px;
      scale: 0.5;
      position: fixed;
      animation-name:star;
      animation-duration: 15s;
      animation-iteration-count:infinite;
      animation-timing-function:linear;
    }
    @keyframes star{
      from{
        left: -500px;
        top: -500px;
      }
      to{
        left: 70vw;
        top: 1000px;
      }
    }
    .star2{
      height: 800px;
      width: 800px;
      scale: 0.5;
      position: fixed;
      animation-name:star2;
      animation-duration: 25s;
      animation-iteration-count:infinite;
      animation-timing-function:linear;
    }
    @keyframes star2{
      from{
        left: 0;
        top: -1000px;
      }
      to{
        left: 100vw;
        top: 1000px;
      }
    }
    .star3{
      height: 800px;
      width: 800px;
      scale: 0.5;
      position: fixed;
      left: -1000px;
      animation-name:star3;
      animation-duration: 30s;
      animation-iteration-count:infinite;
      animation-timing-function:linear;
      animation-delay:5s;
    }
    @keyframes star3{
      from{
        left: -500px;
        top: -1000px;
      }
      to{
        left: 100vw;
        top: 1000px;
      }
    }
    .star4{
      height: 800px;
      width: 800px;
      scale: 0.4;
      position: fixed;
      left:-1000px;
      animation-name:star4;
      animation-duration: 30s;
      animation-iteration-count:infinite;
      animation-timing-function:linear;
      animation-delay:5s;
    }
    @keyframes star4{
      from{
        left: -500px;
        top: -500px;
      }
      to{
        left: 70vw;
        top: 1000px;
      }
    }
    .star5{
      height: 800px;
      width: 800px;
      scale: 0.5;
      position: fixed;
      left: -1000px;
      animation-name:star5;
      animation-duration: 10s;
      animation-iteration-count:infinite;
      animation-timing-function:linear;
      animation-delay:5s;
    }
    @keyframes star5{
      from{
        left: -900px;
        top: -500px;
      }
      to{
        left: 25vw;
        top: 1000px;
      }
    }
  </style>
</head>

<body>

    <img src="./img/star.png" alt="" class="star">
    <img src="./img/star.png" alt="" class="star2">
    <img src="./img/star.png" alt="" class="star3">
    <img src="./img/star.png" alt="" class="star4">
    <img src="./img/star.png" alt="" class="star5">



  <div style="height:90vh">
    <?php
$year = (isset($_GET["year"])) ? $_GET["year"] : date("Y");
$month = (isset($_GET["month"])) ? $_GET["month"] : date("n");
$nextMonth = $month + 1;
$lastMonth = $month - 1;
$nextYear = $year;
$lastYear = $year;
if ($nextMonth == 13) {
    $nextYear += 1;
    $nextMonth = 1;
}
if ($lastMonth == 0) {
    $lastYear -= 1;
    $lastMonth = 12;
}
$firstday = strtotime(date("$year-$month-1"));
$days = date("t",$firstday);
$firstday = date("N", $firstday);
if ($firstday == 7) {
    $firstday = 0;
}
$week = ($firstday + $days) / 7;
$tmp = 1;
$months = [];
for ($i = 0; $i < $week; $i++) {
    for ($j = 0; $j < 7; $j++) {
        if ($i == 0 && $j < $firstday || $tmp > $days) {
            $months[] = '';
        } else {
            $months[] = date("$year-$month-$tmp");
            $tmp++;
        }
    }
}

$holiday = [
    "2023-1-1" => "元旦",
    "2023-1-2" => "補假",
    "2023-1-20" => "調整放假",
    "2023-1-21" => "農曆除夕",
    "2023-1-22" => "春節",
    "2023-1-23" => "春節",
    "2023-1-24" => "春節",
    "2023-1-27" => "調整放假",
    "2023-2-27" => "調整放假",
    "2023-2-28" => "和平紀念日",
    "2023-4-3" => "調整放假",
    "2023-4-4" => "兒童節",
    "2023-4-5" => "清明節",
    "2023-5-1" => "勞動節",
    "2023-6-22" => "端午節",
    "2023-6-23" => "調整放假",
    "2023-9-3" => "軍人節",
    "2023-9-29" => "中秋節",
    "2023-10-9" => "調整放假",
    "2023-10-10" => "國慶日",
];
$work = [
    "2023-1-7" => "補行上班",
    "2023-2-4" => "補行上班",
    "2023-2-18" => "補行上班",
    "2023-3-25" => "補行上班",
    "2023-6-17" => "補行上班",
    "2023-9-23" => "補行上班",
];

?>

<a href="?year=<?=$lastYear?>&month=<?=$lastMonth?>"><img src="./img/left-arrow.png" alt="" class="left-arrow arrow"></img></a>
<a href="?year=<?=$nextYear?>&month=<?=$nextMonth?>"><img src="./img/right-arrow.png" alt="" class="right-arrow arrow"></img></a>

    <div class="container">
      <div class="title">
        <span><?=$year?>年</span>
        <span><?=$month?>月</span>
      </div>
      <div style="line-height:85px;font-size:26px;color:yellow">日</div>
      <div style="line-height:85px;font-size:26px;color:white">一</div>
      <div style="line-height:85px;font-size:26px;color:white">二</div>
      <div style="line-height:85px;font-size:26px;color:white">三</div>
      <div style="line-height:85px;font-size:26px;color:white">四</div>
      <div style="line-height:85px;font-size:26px;color:white">五</div>
      <div style="line-height:85px;font-size:26px;color:yellow">六</div>


      <?php

for ($i = 0; $i < count($months); $i++) {
    if (date("Y-n-j") == $months[$i]) {
        echo "<div class=\"today";
        if (isset($holiday[$months[$i]])) {
            echo " holiday\">";
        } else if (isset($work[$months[$i]])) {
            echo " work\">";
        } else {
            echo "\">";
        }
        echo date("j", strtotime($months[$i]));
        echo "<div>";
        if (isset($holiday[$months[$i]])) {
            echo $holiday[$months[$i]];
        } else if (isset($work[$months[$i]])) {
            echo $work[$months[$i]];
        }
        echo "</div>";

        echo "</div>";
    } else if ($i % 7 == 0 || $i % 7 == 6) {
        echo "<div class=\"weekend";
        if (isset($holiday[$months[$i]])) {
            echo " holiday\">";
        } else if (isset($work[$months[$i]])) {
            echo " work\">";
        } else {
            echo "\">";
        }
        if ($months[$i] != '') {
            echo date("j", strtotime($months[$i]));
            echo "<div>";
            if (isset($holiday[$months[$i]])) {
                echo $holiday[$months[$i]];
            } else if (isset($work[$months[$i]])) {
                echo $work[$months[$i]];
            }
            echo "</div>";
        }

        echo "</div>";
    } else {
        echo "<div class=\"";
        if (isset($holiday[$months[$i]])) {
            echo " holiday\">";
        } else if (isset($work[$months[$i]])) {
            echo " work>\"";
        } else {
            echo "days\">";
        }
        if ($months[$i] != '') {
            echo date("j", strtotime($months[$i]));
            echo "<div>";
            if (isset($holiday[$months[$i]])) {
                echo $holiday[$months[$i]];
            } else if (isset($work[$months[$i]])) {
                echo $work[$months[$i]];
            }
            echo "</div>";
        }

        echo "</div>";
    }
}
?>
    </div>
  </div>
  <div>
    <a href="?" style="position:fixed;bottom:0;right:0;">回當前月</a>
  </div>
</body>

</html>