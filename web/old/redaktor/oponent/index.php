<!DOCTYPE html>


<?php
require("session.php");
$sql = "SELECT id, nazev, popis, autor FROM prispevky INNER JOIN stav ON prispevky.stav = stav.id_stav WHERE id = '".$_GET["id"]."' ";
$sql2 = "SELECT userid, username FROM users WHERE role = 6";
$result = mysqli_query($connection, $sql);
$result2 = mysqli_query($connection, $sql2);

$check_oponent = "SELECT stav FROM prispevky WHERE id = '".$_GET["id"]."' ";
$get_oponent = "SELECT username, id_prispevek FROM posudek INNER JOIN users ON posudek.id_oponent = users.userid WHERE id_prispevek = '".$_GET["id"]."' ";
$oponent_query = mysqli_query($connection, $check_oponent);
$oponent_query2 = mysqli_query($connection, $get_oponent);

if(isset($_POST['oponent']))
{
	$rw = mysqli_fetch_array($oponent_query, MYSQLI_ASSOC);
	
	if($rw['stav'] != "1")
	{	
		$update_oponent = "UPDATE posudek SET id_oponent = '".$_POST['oponent']."' WHERE id_prispevek = '".$_GET["id"]."'";
		$res_update = mysqli_query($connection, $update_oponent);
	}
		else
	{
		$query = "UPDATE prispevky SET stav = 2 WHERE id = '".$_GET["id"]."'";
		$res1 = mysqli_query($connection, $query);
		
		$query2 = "INSERT INTO posudek(id_prispevek, id_oponent) VALUES('".$_GET['id']."', '".$_POST['oponent']."')";
		$res2 = mysqli_query($connection, $query2);	
	}

	 echo "<meta http-equiv='refresh' content='0'>";
}


$uspech_msg = "Oponent byl uspesne pridelen";
	


?>


<html lang="cz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">  
  <link rel="stylesheet" href="style/style.css">
 
 <title>Prideleni Oponenta</title>
</head>
<body>

  <div class="header">
    <h1 align="center">Oponent</h1>
    <h4 align="center">Prideleni oponenta</h4>
  </div>


<div class="btns">
    <a class="btn btn-dark" href="../">Hlavní</a>
    <a id="logout" class="btn btn-dark" href="logout.php">Odhlašit</a>
    <label id="user_l">Jste přihlašen jako: <strong><?php echo $_SESSION['login_user']?></strong></label>
</div>

<div class = "tablx3">
<h3 class="text-center">Vybarny přispevek</h3>
</div>

<div class = "tablx2">
<table class="table  table-striped"> 
    <thead>
	<tr>
      <th>ID</th>
      <th>Nazev přispevku</th>
      <th>Aktualni Stav</th>
	  <th>Oponent</th>
	  <th>Autor Prispevku</th> 
    </tr>
	</thead>
  <tbody>

<?php
  	while($r = mysqli_fetch_assoc($result)){
   ?>
    <tr>
      <th scope="row"><?php echo $r['id'] ?></th>
      <td><?php echo $r['nazev'] ?></td>
	  <td><?php echo $r['popis'] ?></td>
	  <td><?php while ($row = mysqli_fetch_assoc($oponent_query2)) { echo $row['username']; }?></td>
	  <td><?php echo $r['autor'] ?></td>
    </tr>
    <?php
    }
    ?>
	  </tbody>
</table>
</div>

<br> 

<div class = "tablx4">

Vyberte oponenta ze seznamů: 
<form method="POST" action="" enctype="application/x-www-form-urlencoded">
<select name="oponent">
<?php while($r2 = mysqli_fetch_assoc($result2)){?>
	<option value=" <?php echo $r2['userid'];?> "><?php echo $r2['username']; ?> </option> 
<?php } ?>		
</select>
    

<button id="pridelit" class="btn btn-success">Přidelit</a>
</form>
</div>
    
 