<html>
<head>
  <title>T E S S E R A C T</title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/css2.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src = "js/homeindex.js"></script>


<body>

  <div class=" tan-display-container tan-opacity-min" id="home">
    <div class=" tan-display-middle" style="white-space:nowrap;">
     <span class="tan-center tan-padding-large tan-black tan-wide tan-anima te-opacity">T E S S E R A C T</span>
     <form  action="#" method="REQUEST" style="display: inline-block;">
       <input class="searchbox" autocomplete="off" type="text" placeholder="Search" name="txtsearch" >
       <button  class="sb-buton tan-button tan-black" type="submit" name = "btnbutton">SEARCH</button>
     </form>
      </div>
  </div>
  
</div>
<?php
		class searcharray
		{
			protected $conn;
			protected $search_array;
			function connection{
				if($this->conn){
					$this->conn = mysqli_connect('localhost', 'root');
					mysqli_select_db($this->conn,"medicine") 
					or die(mysqli_error($this->conn, "Can not connect to the DATABASE");
					/*mysqli_query($this->conn, "SET 
						character_set_result='utf8',
					 	character_set_client='utf8',
						character_set_server='utf8'";);*/
					mysqli_set_charset($this->conn,"utf8");
				}
			}
			function dis_connect{
				if($this->conn){
					mysqli_close($this->conn);}
			}
			function search{
				if(isset($_REQUEST['s_butt'])){
					$this->search_array = $_REQUEST['arr_search'];
					if($this->search_array != ''){
						$query = mysqli_query($this->conn,
							"SELECT * FROM medicine WHERE TEN LIKE 
							'%$search_array%' OR KEYWORDS LIKE 
							'%$search_array%'")
						or die("Could not search, please try again, fill the form if possible");
					$result = mysqli_num_rows($query);
					if(($this->result) == 0){
						$output .= "Can not find any result with keywords: '$arr_search'";
					} else { //result > 0
						$output .= "All result with keywords: '$arr_search': $result";
						while ($row=mysqli_fetch_array($this->query)){
							$ten = $this->row['TEN'];
							$chidinh = $this->row['CHIDINH'];

							/*output .= "$TEN";*/
						}
					}
				} else { $this->output .= "Please enter your keywords";}
			}
		}
	/*connection(function __construct($conn)
	{
		$this->conn = $conn;
	});*/
?>