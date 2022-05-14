<?php

$a=0;
$b=null;

if (isset($a)) {    //isset() 檢查的變數存不存在
    echo "是";
} else {
    echo "否";
}
echo "<br>";


if (empty($a)) {    //empty()檢查的變數內的值是否為空
    echo "是";
} else {
    echo "否";
}
echo "<br>";

if (is_null($a)) {    //is_null()：檢查變數是否為null
    echo "是";
} else {
    echo "否";
}
echo "<br>";


?>