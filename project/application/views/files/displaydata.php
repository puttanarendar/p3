<!DOCTYPE html>
<html>
<head>
<title>Display the view for database</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<h1 style="text-align:center;"><b></b></h1>
	<?php 
	//echo "<pre>";
	//print_r($res[0][1]);
	?>
<table class="table table-bordered" border="5" style="width:500px;margin-left:480px;">
	
	            <thead>
					<th>name</th>
					<th>fullname</th>
					<th>gender</th>
					<th>email</th>
	            </thead>
                <tbody>
					<?php for ($i=0;$i<count($res);$i++):?>
                   <tr>
					   <?php for ($j=0;$j<count($res);$j++):?>
					   <td><?php echo $res[$i][$j]; ?></td>
					   <?php endfor; ?>
					</tr>
                   <?php endfor; ?>
                 </tbody>
</table>  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>          
</body>
</html>
