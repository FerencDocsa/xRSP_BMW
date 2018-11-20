<!DOCTYPE html>
<?php
require("session.php");
$loc = "http://plogos.epizy.com/prispevky/";
$sql = "SELECT * FROM prispevky WHERE id = '".$_GET["id"]."'";
$result = mysqli_query($connection, $sql);
$r = mysqli_fetch_assoc($result);
?>


<html lang="cz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<title>Prehled Prispevku</title>
<body>
  <div class="header">
    <h1 align="center">Prehled Prispevku</h1>
    <a href="logout.php" class="button1">Log out</a>
  </div>

  
  <section class="buttons">
      <a href="index.php" class="button1">Hlavni</a>
      <a href="zalozeni/" class="button1">Zalozit prispevek</a>
  </section>
  
  
 <div class="form">
 <fieldset><legend>Informace o prispevku</legend>
   <div class="inp">

	<label>ID: </label><?php echo $r['id'];?>
	<br>
	<label>Nazev: </label><?php echo $r['nazev']; ?>
	<br>
	<label>Kontaktni udaje: </label><?php echo $r['kontakt'];?>
	<br>
	<label>Cislo: </label><?php echo $r['cislo'];?>
	<br>
	<label>Stahnout: </label>
	<button class="btn btn-success">
	<a href="<?php echo $loc.$r['location'] ?> ">  
		<i class="fas fa-download"></i>
	</a>
	</button>

  </div>
</fieldset>
</div>
</body>