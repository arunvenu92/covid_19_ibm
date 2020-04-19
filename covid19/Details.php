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
		$sql = "select * from requester";
		
		$result = $conn->query($sql);	
		if ($result->num_rows > 0) 
		{
			// output data of each row
			echo'<div class="table-responsive">          
				  <table class="table">
					<thead>
					  <tr>
						<th>Requester ID</th>
						<th>Requester user name</th>
						<th>Phone number</th>
						<th>Request Type</th>
					 </tr>
					</thead>';
			while($row = $result->fetch_assoc()) 
			{
				echo'<tr>'; 
				echo '<td> <a href="localhost\covid19\Details.php?id='.$row["REQ_ID"].'">'.$row["REQ_ID"].'</a></td>';
				echo '<td>'.$row["USER_NAME"].'</td>';
				echo '<td>'.$row["PHONE"].'</td>';
				echo '<td>'.$row["REQ_TYPE"].'</td>';
				echo'<tr>';
			}
			echo '</table>';
			echo '</div>';
			echo '</div>';
		}
?>	 
	</table>
  </div>
</div>
</body>
</html>
