<?php 
	/*if (!isset($_POST[txtUsername])){
		die('');
	}*/

	include('connect.php');
	
	header('Content-Type: text/html; charset=utf-8');

	//Get data from file sign_up.php
	$user_id = $_POST["txtUser_id"];
	$username = $_POST["txtUsername"];
	$firstname = $_POST["txtFirstname"];
	$lastname = $_POST["txtLastname"];
	$passwords = $_POST["txtPasswords"];
	$email = $_POST["txtEmail"];
	$birthday = $_POST["txtBirthday"];
	$sex = $_POST["txtSex"];
	$location = $_POST["txtLocation"];

	//Check data filled

	if(!$user_id || !$username || !$firstname || !$lastname || !$passwords || !$email
		|| !$birthday || !$sex || !$location){
		echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Go Back</a>";
        exit;
	}
	//Decode passwords to MD5
	$passwords = md5($passwords);

	//Check if user_name has been created
	if (mysqli_num_rows(mysqli_query($conn,"SELECT username FROM user WHERE username='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    //Check email format

	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) === true) {
	   echo("$email is not a valid email address");
	}
	

    //Check if email has been created
    if (mysqli_num_rows(mysqli_query($conn,"SELECT email FROM user WHERE email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    //Add data filled to database
    $adduser = "insert into user values ('$user_id','$username','$firstname', '$lastname', '$passwords', '$email','$birthday','$sex','$location')";

    //Database respond
    if (mysqli_query($conn,$adduser))
    	echo "Chúc mừng! Bạn đã là thành viên. <a href='/'>Về trang chủ</a>";
    else {
    	echo "Có lỗi xảy ra trong quá trình đăng kí, xin chân thành xin lỗi vì sự bất tiện này, xin hãy liên hệ với admin để được trợ giúp <a href='/'>Về trang chủ</a>";
    }




?>