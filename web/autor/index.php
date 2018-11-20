<!DOCTYPE html>
<?php 
require("session.php");
$sql = "SELECT * FROM prispevky WHERE autor = '".$_SESSION['login_user']."'";
$result = mysqli_query($connection, $sql);
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



  
 <title>Autor Prehled</title>
</head>
<body>


  <div class="header">
    <h1 align="center">Hlavni</h1>
    <h4 align="center">Prispevky autora</h4>
    <a href="logout.php" class="button1">Log out</a>
  </div>



  <section class="buttons">
      <a href="index.php" class="button1">Hlavni</a>
      <a href="zalozeni/" class="button1">Zalozit prispevek</a>
  </section>

   </div>

<table class="table table table-striped" style="width: 91% !important; margin: auto;"> 
    <thead>
	<tr>
      <th>ID</th>
      <th>Nazev přispevku</th>
      <th>Aktualni Stav</th>
	  <th>Nahled</th>
    </tr>
	</thead>
  <tbody>

<?php
	$loc = "http://plogos.epizy.com/prispevky/";
  	while($r = mysqli_fetch_assoc($result)){
   ?>
    <tr>
      <th scope="row"><?php echo $r['id'] ?></th>
      <td><?php echo $r['nazev'] ?></td>
	  <td><?php echo $r['stav'] ?></td>
      <td><a href="view.php?id=<?php echo $r['id']?>">  <?php/* echo $loc.$r['location'] */?> 
		<i class="fas fa-eye"></i>
	   </a></td>
    </tr>
    <?php
    }
    ?>
	  </tbody>
</table>
</div>
</body>
</html>
