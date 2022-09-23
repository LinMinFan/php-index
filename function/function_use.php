<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資料庫常用自訂函式</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
        }

        h1 {
            text-align: center;
        }

        .quiz {
            width: 100%;
            padding: 0.6rem 1rem;
            border: blue;
            background: lightblue;
            box-shadow: 1px 1px 10px #ccc;
            margin: 0.5rem;
        }
    </style>
</head>

<body>
    <?php
    //先宣告全部函式都會用到的資料庫連線設定及建立PDO資料庫物件
    //$dsn = "mysql:host=localhost;charset=utf8;dbname=school2";
    //$pdo = new PDO($dsn, 'root', '');

    ?>
    <div class="quiz">
        all()-給定資料表名後，會回傳整個資料表的資料
    </div>
    <?php
    $table = isset($_GET['table']) ? $_GET['table'] : 'status'

    ?>
    <form action="function_use.php">
        資料表:<input type="text" name="table" value="<?= $table; ?>">&nbsp;&nbsp;

        <input type="submit" value="列出">
    </form>
    <?php

    $rows = all($table);
    echo "<ul>";
    foreach ($rows as $row) {
        echo "<li>";
        show($row);
        echo "</li>";
    }
    echo "</ul>";
    //all()-給定資料表名後，會回傳整個資料表的資料
    //sql語法字串"SELECT * FROM `資料表`;"
    function all($table)
    {
        $pdo = pdo('school2');
        $sql = "SELECT * FROM `$table`";
        return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    //自訂連線函式，參數給予資料庫名稱，連接資料庫。
    function pdo($db)
    {
        $dsn = "mysql:host=localhost;charset=utf8;dbname=$db";
        return new PDO($dsn, 'root', '');
    }
    //檢查資料表是否為陣列，輸入表單回傳值須為陣列
    function show($row)
    {

        if (is_array($row)) {
            foreach ($row as $key => $value) {
                echo $value;
                echo "--";
            }
        } else {
            echo "這不是一筆標準的資料，請重新輸入";
        }
    }

    /**
     * all()-給定資料表名和條件後，會回傳符合條件的所有資料(增加條件須考慮where語法)
     * $table - 資料表名稱 字串型式
     * ...$arg - 參數型態
     *           1. 沒有參數，撈出資料表全部資料
     *           2. 一個參數：
     *              a. 陣列 - 撈出符合陣列key = value 條件的全部資料
     *              b. 字串 - 撈出符合SQL字串語句的全部資料
     *           3. 二個參數：
     *              a. 第一個參數必須為陣列，同2-a描述
     *              b. 第二個參數必須為字串，同2-b描述
     */
    /*判斷是否有輸入表單，若未輸入則使用預設表單 
        function all($table,...$arg){
        global $pdo;
    
        建立共有的基本SQL語法
        $sql="SELECT * FROM $table ";
    
        依參數數量來決定進行的動作因此使用switch...case
        switch(count($arg)){
            case 1:

            判斷參數是否為陣列
            if(is_array($arg[0])){
                
                使用迴圈來建立條件語句的字串型式，並暫存在陣列中
                foreach($arg[0] as $key => $value){
                    
                    $tmp[]="`$key`='$value'";
                    
                }
                
                使用implode()來轉換陣列為字串並和原本的$sql字串再結合
                $sql.=" WHERE ". implode(" AND " ,$tmp);
            }else{
                
                如果參數不是陣列，那應該是SQL語句字串，因此直接接在原本的$sql字串之後即可
                $sql.=$arg[0];
            }
            break;
            case 2:
                
                第一個參數必須為陣列，使用迴圈來建立條件語句的陣列
                foreach($arg[0] as $key => $value){
                    
                    $tmp[]="`$key`='$value'";
                    
                }
                
                將條件語句的陣列使用implode()來轉成字串，最後再接上第二個參數(必須為字串)
                $sql.=" WHERE ". implode(" AND " ,$tmp) . $arg[1];
                break;
                
                執行連線資料庫查詢並回傳sql語句執行的結果
            }
            
            fetchAll()加上常數參數FETCH_ASSOC是為了讓取回的資料陣列中
            只有欄位名稱,而沒有數字的索引值
            return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            
        }
        */
    ?>
    <div class="quiz">
        find()-會回傳資料表指定id的資料
    </div>
    <?php
    $id = isset($_GET['id']) ? $_GET['id'] : '1';
    $tablefind = isset($_GET['tablefind']) ? $_GET['tablefind'] : 'students';

    ?>
    <form action="function_use.php">
        資料表:<input type="text" name="tablefind" value="<?= $tablefind; ?>">&nbsp;&nbsp;
        id:<input type="text" name="id" value="<?= $id; ?>">&nbsp;&nbsp;

        <input type="submit" value="列出">
    </form>
    <?php
    //給定表單,id參數,回傳id資料
    $row = find($tablefind, $id);

    echo "<ul><li>";
    show($row);
    echo "</li></ul>";

    //find()-會回傳資料表指定id的資料
    //sql語法字串"SELECT * FROM `資料表` WHERE `id`='$id';"
    function find($table, $id)
    {
        $pdo = pdo('school2');
        $sql = "SELECT * FROM `$table` WHERE `id`='$id'";
        return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    ?>

</body>

</html>