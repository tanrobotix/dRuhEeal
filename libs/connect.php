<?php
    
    $conn=mysqli_connect("localhost","root","")
    or die("Không thể kết nối database");

    mysqli_select_db($conn,"project") 
    or die("Không thể chọn database");
?>