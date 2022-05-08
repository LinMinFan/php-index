<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>日期/時間</h1>
    <hr>
    <h3>date("Y m d,$time")函式</h3>
    <?php
    //date(string , int $timestamp = ?): string
    //string識別對應參考php官網，$timestamp 秒數 未指定為當下
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y m d") . "<br>";
    ?>
    <br>
    <h3>date("Y m d,$time")函式</h3>
    <?php
    //date(string , int $timestamp = ?): string
    //string識別對應參考php官網，$timestamp 秒數 未指定為當下
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y m d") . "<br>";
    //strtotime(string $datetime, int $now = time()): int（自 January 1 1970 00:00:00 UTC 起的秒數）
    $d = strtotime("tomorrow");
    echo date("Y m d", $d);
    ?>
    <hr>
    <br>
    <h3>使用陣列來做月曆</h3>
    <table>
        <tr>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>
        <?php
        $month = date("m");

        $firstDay = date("Y-").$month."-1"; //定義每月第一天
        $ft = strtotime($firstDay);  //第一天秒數
        $firstWeekday = date("w", $ft);    //第一天為這星期中之第幾天0(表示星期天)~6(表示星期六)
        $monthDays = date("t", $ft);   //指定月份有幾天28~31
        $lastDay = date("Y-") . $month . "-" . $monthDays;  //定義指定月份最後一天(當月天數)
        $today = date("Y-m-d");

        $dateHouse = [];    //定義月份空陣列
        for ($i = 0; $i < $monthDays; $i++) {   //依當月天數執行迴圈
            $date = date("Y-m-d", strtotime("+$i days", $ft));
            $dateHouse[] = $date;
            //依當月天數填入陣列date("Y m d",1~monthdays),填入格式為[Y-m-d,Y-m-d+1,Y-m-d+2...]
        }

        echo "<pre>";
        print_r($dateHouse);
        echo "</pre>";

        echo "月份" . $month;
        echo "<br>";
        echo "第一天是" . $firstDay;
        echo "<br>";
        echo "第一天秒數" . $ft;
        echo "<br>";
        echo "第一天是這週中之第" . $firstWeekday . "天";
        echo "<br>";
        echo "最後一天是" . $lastDay;
        echo "<br>";
        echo "當月天數共" . $monthDays;
        echo "<br>";
        for ($i = 0; $i < 6; $i++) {    //月曆行數6
            echo "<tr>";

            for ($j = 0; $j < 7; $j++) {    //月曆列數7
                $d = $i * 7 + ($j + 1) - $firstWeekday - 1; //位置校正由1~42=>(1~42)-(0~6)-1 ex:四月修正為-5~36

                if ($d >= 0 && $d < $monthDays) {   //$d>=0 第一天 $d<$monthdays 最後一天
                    $fs = strtotime($firstDay); //$firstday 算出第一天秒數
                    $shiftd = strtotime("+$d days", $fs);   //$shiftd 算出每天秒數
                    $date = date("d", $shiftd); // 將每天秒數轉換為字串日期
                    $w = date("w", $shiftd);    //$w 將每天秒數轉換為星期中的第幾天以0~6表示
                    $chktoday = "";
                    if (date("Y-m-d", $shiftd) == $today) {
                        $chktoday = "today";    //確認日期是否與今日秒數同
                    }
                    //$date=date("Y-m-d",strtotime("+$d days",strtotime($firstDay)));
                    if ($w == 0 || $w == 6) {   //標記星期中第0或是第6為假日
                        echo "<td class='weekend $chktoday' >";
                    } else {
                        echo "<td class='workday $chktoday'>";  //非假日為工作日
                    }
                    echo $date;
                    echo "</td>";
                } else {
                    echo "<td></td>";
                }
            }

            echo "</tr>";
        }



        ?>


    </table>
</body>

</html>