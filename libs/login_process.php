<?php
      session_start();
      header('Content-Type: text/html; charset = UTF-8');
      include('libs/connect.php');
      //Process login
      
    $username = $_POST["txtUsername"];
    $passwords = $_POST["txtPasswords"];

        //Check data filled

    if(!$username || !$passwords ){
      echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Go Back</a>";
      exit;
    }
        //Decode passwords to MD5
    $passwords = md5($passwords);

        //Check if user_name has been created
    if (mysqli_num_rows(mysqli_query($conn, "SELECT username FROM user WHERE username='$username'")) > 0){
      echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
      exit;
    }

        //Get passwords from database
    $row = mysqli_fetch_array($query);

        //Compare with passwords filled in
    if($passwords != $row['passwords']){
      echo "Mật khẩu không đúng, vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
      exit;
    }
        //Keep username
    $_SESSION ['username'] = $username;
    echo "Xin chào " .$username. "Chúc mừng bạn đã đăng nhập thành công"; die();
?>