<?php
echo '
<head>
<html lang="fr">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="include/style/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="include/style/style.css">

<center >
    	<h2 class="page_head">  	 
  		   <label >Qui a vue les Canards Et où Et à quelle heure</label>
        </h2>
</center >
  </head>
<body   class="body">
 <center >
  <form   method="POST"  >
    <h4  >
    	<div>
		  <label>
			 Nom: <input type="Nom" name="Nom" placeholder="Votre Nom">
			</label> 
		  </div>
    </h4>
    <h4>
        <div>
			<label>
				Lieu: <input type="Nom" name="Lieu" placeholder="Lieu de le Canard">
			</label> 
		</div>
    </h4>
    <h4>
 		<div>
		  <label>
		  	Heure:<input type="text" name="Heure" placeholder="à quelle heure">
		  </label> 
		</div>
    </h4>
    <h4>  
	      <button  class="btn btn-info "type="vaild" name="vaild">Enregistrer votre info</button>
    </h4>
   
   </form>
   <form action="include/select.php" method="POST" >
    <h4>
	  <button class="btn btn-large btn-primary" name="Liste" > Liste qui a vue les canards
	  </button> 
   </h4>
   </form>
 </center>


  
 <script type="text/javascript" src="include/js/jquery.min.js"></script>
 <script type="text/javascript" src="include/js/bootstrap.min.js"></script>
 </body>
';
	if (isset($_POST['vaild'] ))
	{ 	 
		$conn = new PDO('mysql:host=localhost;dbname=canard;charset=utf8', 'max','SINin0913630343&');	
        $nom=$_POST['Nom'];
		$lieu=$_POST['Lieu'];
		$heure=$_POST['Heure'];
		$conn->query("INSERT INTO list(nom,lieu,heure) VALUES
		('$nom','$lieu','$heure')");
		error($k);
    }
function error($data)
{ 
 			 echo '<script>';
			  echo 'console.log('. json_encode( $data ) .')';
			  echo '</script>';
}
?>
