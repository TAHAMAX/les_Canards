<?php
echo '<head>
<html lang="fr">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Liste qui a vue les canards</title>
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style/style.css">
<center >
	<h2 class="page_head">  	 
		<label >Liste Qui a vue les Canards</label>
	</h2>
</center >
</head>';
		echo ' <body   class="body">  
		<center >
			<form action="index.php" method="POST"  >

					<table style="width:50%" class="table_border">
						<col align="left">
						<col align="left">
						<col align="right">
						  	<tr>
								<th class="table_border">Nom</th>
								<th class="table_border">Lieu</th>
								<th class="table_border">Heure</th>
							</tr>';
if (isset($_POST['Liste'] ))
{ 
	$conn = new PDO('mysql:host=localhost;dbname=canard;charset=utf8', 'max','SINin0913630343&');	
	$reuslt = $conn->query("SELECT * FROM list");

		while($row = $reuslt -> fetch())
		{
		echo
		'
							<tr>
								<td class="table_border">'. $row	['nom'].'</td>
								<td class="table_border">'.  $row['lieu'].'</td>
								<td class="table_border">'.  $row['heure'].'</td>
							</tr>';
         }
			echo '  </table>
		    </form> 
		 
			<form action="http://localhost/canar/index.php">
				<h4>
					<button class="btn btn-large btn-primary"> Enregistrer nouvelles info
					</button>  
				</h4>
			</form>
			</center >
		  </body>
		';
}
?>