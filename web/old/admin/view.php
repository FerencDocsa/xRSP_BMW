<!DOCTYPE html>
<?php 
require("session.php");
$sql = "SELECT * FROM prispevky WHERE id = '".$_GET["id"]."'";
$result = mysqli_query($connection, $sql);
$r = mysqli_fetch_assoc($result);

?>


<html lang="cz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <link rel="stylesheet" href="style/style.css">

  
 <title>Administrator</title>
</head>
<body>

<div class="header">
    <h1 align="center">Přehled přispevku</h1>
</div>
    
    
<div class="btns">
    <a class="btn btn-dark" href="#">Přispěvký</a>
     <a class="btn btn-dark" href="users.php">Uživatele</a>
     <a class="btn btn-dark" href="#">Agenda Autora</a>
     <a class="btn btn-dark" href="#">Agenda Redaktora</a>
    <a id="logout" class="btn btn-dark" href="logout.php">Odhlašit</a>
    <label id="user_l">Jste přihlašen jako: <strong><?php echo $_SESSION['login_user']?></strong></label>
</div>
    
    

<div class="tablx2">
     <h2> Informace o prispevku</h2>

	<label>ID</label>
    <br>
	<input type="text" value=" <?php echo $r['id'];?>" disabled="true" />
	<br>
	<label>Nazev</label>
    <br>
    <input type="text" value=" <?php echo $r['nazev']; ?>" disabled="true" />
	<br>
	<label>Kontaktni udaje</label>
    <br>
    <input type="text" value="<?php echo $r['kontakt'];?>" disabled="true" />
	<br>
	<label>Cislo</label>
    <br>
    <input type="text" value=" <?php echo $r['cislo'];?>" disabled="true" />
	<br>
    <br>
	<label>Soubor</label>
	<a class="btn btn-secondary"  href="<?php echo $loc.$r['location'] ?> "> Stahnout </a> <br>
    </div>
</div>

</body>
<div class="footer">Toto je projekt tymů <strong>BMW</strong> || Předmět xRSP rok 2018.</div>
</html>

    