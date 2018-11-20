<!DOCTYPE html>
<?php
require('session.php');
$name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$extension = substr($name, strpos($name, '.') + 1);

if(isset($name) && !empty($name)){
	if($extension == "pdf" || $extension == "docx" || $extension == "doc"){
		$location = "/home/vol15_1/epizy.com/epiz_23015580/htdocs/prispevky/";
		$rand = rand(1,100);				
		$full_name = $rand. "_" .$name;	
		$location .= $full_name;	
		if(move_uploaded_file($tmp_name, $location)){
		 	  $query = "INSERT INTO `prispevky` (nazev, kontakt, cislo, location, stav, autor) VALUES ('".$_POST["nazev"]."', '".$_POST["kontakt"]."', '".$_POST["Rok"]."', '$full_name', 'Nehodnoceno', '".$_SESSION['login_user']."')";			
        		$result = mysqli_query($connection, $query);
			$smsg = "Uspesne pridano";	
		}else{
			$fmsg = "Doslo k chybe";
		}
	}else{
		$fmsg = "Prispevek ma byt v formatu doc(x)/pdf";
	}
}else{
	$fmsg = "Prosim vyberte soubor";
}

$kapacita_q = "SELECT kapacita FROM kapacita WHERE cislo = '2/2019'";
$kapacita_q1 = "SELECT kapacita FROM kapacita WHERE cislo = '3/2019'";
$result_k = mysqli_query($connection, $kapacita_q);
$result_k1 = mysqli_query($connection, $kapacita_q1);
$vysl_k = mysqli_fetch_array($result_k, MYSQLI_NUM);
$vysl_k1 = mysqli_fetch_array($result_k1, MYSQLI_NUM);

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="style/main.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <title>Zalozeni Prispevku</title>
</head>
<body>

  <div class="header">
    <h1 align="center">Zalozeni prispevku</h1>
    <a href="logout.php" class="button1">Log out</a>
  </div>



  <section class="buttons">
      <a href="../"	  class="button1">Hlavni</a>
      <a href="index.php" class="button1">Zalozit prispevek</a>
  </section>

<div class="form">
<fieldset><legend>Založení přispěvku</legend>

     <form class="form-signin" method="POST" action="" enctype="multipart/form-data" >
	   <div class="inp">
          <label>Název příspěvku</label>
          <input type="text" class="input" name="nazev" placeholder="Nazev prispevku">
		  <br><br>
           <label>Kontaktní údaje</label>
          <input type="text" class="input" name="kontakt" placeholder="Kontaktní údaje">
		  <br><br>
          <label>Výběr tematického čísla časopisu:</label>
		  <select name="Rok">
				<option value="2/2019">2/2019</option>
				<option value="3/2019 ">3/2019</option>
		   </select>
		   <br>
		   <label>Aktualni kapacita: </label> 
		   <br>
		   <label style="color: red">Cislo 2/2019: <?php print $vysl_k[0]; ?></label>	
		   <br>
		   <label>Cislo 3/2019: </label>	<?php print $vysl_k1[0]; ?>
	
		   
 
	  <div class="form-group">
	  <br>
	    <input type="file" name="file" id="exampleInputFile">
	  </div></div>
        <button class="btn btn-success" type="submit">Přidat</button>
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      </form>
	  </div>
</fieldset>

	
	  
</form>   </div>

      </form>
    </div>
  </section>
</body>
</html>
