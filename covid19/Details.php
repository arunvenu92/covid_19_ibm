<html>
<head>
	<meta charset="UTF-8" />
	<title>COVID 19 Requests</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/css" />
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/spacelab/bootstrap.min.css" rel="stylesheet" integrity="sha384-nl8CRcNYOGaXP68QRJeVTXCWAhwqBhRha0QbuubX1qDQpGT3GgclpvyzkR2JzyfZ" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
</head>
<body>
<header>
</header>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" align="center">COVID-19 Emergency Requests</h3>
  </div>
 <div class="panel-body">
   <table class="table">
	<?php
		include_once 'php/connect.php';		
		if($_GET['id'] != NULL)
		{
			$req_id = $_GET['id'];
			$sql = "select * from requester where REQ_ID='$req_id'";
			
			$result = $conn->query($sql);
			while ($row = $result->fetch_assoc())
			{
				echo'<div class="table-responsive">          
						  <table class="table">
							  <tr>
								<th>Requester ID</th>
								<th>'.$row["REQ_ID"].'</th>
							  </tr>
							   <tr>
								<th>Requester User Name</th>
								<th>'.$row["USER_NAME"].'</th>
							  </tr>
							   <tr>
								<th>Request type</th>
								<th>'.$row["REQ_TYPE"].'</th>
							  </tr>
							  <tr>
								<th>Requester Text</th>
								<th>'.$row["REQ_TEXT"].'</th>
							  </tr>
							  <tr>
								<th>Location Reference</th>
								<th> <iframe
									  width="600"
									  height="450"
									  frameborder="0" style="border:0"
									  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDbBrYDQ2nyNOjOQx4ZAq1oPCRte4W34is&q='.$row["LATITUDE"].','.$row["LONGITUDE"].'&zoom=18&maptype=roadmap" allowfullscreen>
									</iframe>
								</th>
							  </tr>s
							 </table>';
			}
		}
?>	 
	</table>
  </div>
</div>
</body>
</html>

