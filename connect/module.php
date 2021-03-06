<!-- 在PHP中，用來引入檔案的主要指令有兩個include和require．
方便分工，將不同人負責的程式碼拆分成不同的檔案，各自開發和維護
減少重覆，經常使用到的程式碼片段可以獨立出來，需要時再引入即可，而且修改時只需要修改一個檔案，所以引用的檔案都會生效
模組化，將功能模組或是屬性類似的功能放在同一個檔案中，將來要維護時會比較好找
程式化管理，適當的拆解可以做到在程式有需要時再引入，不用佔據記憶體空間
隱藏檔案真實路徑，有時重要的程式碼片段會希望不要曝露在公開的網址上，透過引入的方式，使用者只會看到公開的主要檔案路徑及檔名 -->

<?php
//include 和 include_once
//include 可在php程式執行過程中來引入檔案
//可以放在程式的流程控制區段中
//include_once會在引入時先檢查同樣檔名的內容是否已經引用過了
//檔案不存在時會跳錯誤訊息，但繼續執行後面的程式

if($_GET['do']=='list'){
    include('list.php');
}
?>

<?php
//require 和 require_once
//在php檔案執行前先引入檔案
//一般會放在檔案的最前面先執行
//檔案不存在時會跳出嚴重錯誤，並中止程式
require('common.php');

echo $header;
?>