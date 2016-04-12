<?php

$con=mysqli_connect("crowngaming.ipagemysql.com","twitter","Hipporules2?","twtid");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	
  $result = mysqli_query($con, "SELECT * FROM amt WHERE here='here'");          //query
  $array = mysqli_fetch_array($result);                         //fetch result    

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  echo number_format($array['amt']);

mysqli_close($con);
?>