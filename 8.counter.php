<?php
    session_start();
    if (!isset($_SESSION["counter"])) //計算值的個數
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=reset_counter.php>重置counter</a>"; //Run過後重置
?>