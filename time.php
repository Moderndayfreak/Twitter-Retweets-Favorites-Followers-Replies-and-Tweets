<?php

$con=mysqli_connect("moderndayfreak.ipagemysql.com","twitter","themoderndayfreakband","twtid");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	
  $result = mysqli_query($con, "SELECT * FROM amt WHERE here='nothere'");          //query
  $array = mysqli_fetch_array($result);                         //fetch result    

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  echo $array['amt'];


mysqli_close($con);

?>