<html>
<body>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <div class="jumbotron">
   <div class="row">
   <div class="col-md-offset-5">
   <div class="col-md-6">
 <form action="connectdb5.php" method="POST" role="form" enctype="multipart/form_data">
 	<legend><h2 style="color:green;">Enter Details</h2></legend>
 	</div>
 	</div>
 	</div>
 	</div>
 	
 <div class="row">
   <div class="col-md-offset-4">
   <div class="col-md-6" >
   
 	<div class="form-group">
 		<label for="">First Name :</label>
 		<input type="text" class="form-control" id="first" name="first" placeholder="type here">
 		
 	</div>
 	</div>
 	</div>
 	</div>
 	
 	
 	<div class="row">
 	 <div class="col-md-offset-4">
   <div class="col-md-6" >
   
 	<div class="form-group">
 		<label for="">Last Name :</label>
 		<input type="text" class="form-control" id="last" name="last" placeholder="type here">
 	</div>
 	</div>
 	</div>
 	</div>
 	<div class="row">
 	<div class="col-md-offset-5">
 	
 	<input type="submit" class="btn btn-success"  class="col-md-4" >
    
    </div>
    </div>
 	<div> <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></div>

 </form>

<?php
$mysqli = new mysqli("localhost", "root", "", "tutorial");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
#echo "connected successfully" ;
extract($_REQUEST);

if(isset($_post['submit'])){
$first = $_post['first'];
$last = $_post['last'];




}
$query = "INSERT INTO info(first,last) VALUES ('$first','$last')";
if ($mysqli->query($query)===TRUE) {
	#echo '<a href=\\"sayhello.php//"> Click here to view success level</a> ' ;
echo "<script type='text/javascript'>alert('data entered successfully');</script>";
}else
{echo "data not entered";}


$mysqli->close();


?>



  </body>
  </html>
