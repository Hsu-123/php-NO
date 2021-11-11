<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234")) //用來判斷
        echo "Welcome"; //成功 
    else
        echo "fail login"; //失敗
?>
 