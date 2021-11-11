<?php
    $conn = mysqli_connect("localhost", "root", "", "mydb"); 
         //跟資料庫做連結                              //資料庫
    $result=mysqli_query($conn, "select * from user"); //從資料庫找出他的資料
                                    
    $row=mysqli_fetch_array($result); //從結果一筆一筆資料抓出來

    echo $row["id"] + " " + $row["pwd"]; 
?>