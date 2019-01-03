<!DOCTYPE html>

<?php

require("session.php");

$sql = "SELECT id, nazev, popis, autor FROM prispevky INNER JOIN stav ON prispevky.stav = stav.id_stav";

$result = mysqli_query($connection, $sql);

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 <title>Sefredaktor</title>

</head>
<div class="header">
    <h1 align="center">Sefredaktor - Hlavni</h1>
</div>


<div class="btns">
    <a class="btn btn-dark" href="#">Hlavní</a> <!-- Agenda Autor/Redaktora -->
    <a class="btn btn-dark" href="agautora/index.php">Agenda autora</a>
     <a class="btn btn-dark" href="pokyny.php">Důležíta informace</a>
    <a id="logout" class="btn btn-dark" href="logout.php">Odhlašit</a>
    <label id="user_l">Jste přihlašen jako: <strong><?php echo $_SESSION['login_user']?></strong></label>
</div>




<body>

<div class = "tablx2">

<table class="table  table-striped">

    <thead>

	<tr>

      <th>ID</th>

      <th>Nazev přispevku</th>

      <th>Aktualni Stav</th>

	  <th>Autor Prispevku</th>

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

	  <td><?php echo $r['popis'] ?></td>

	  <td><?php echo $r['autor'] ?></td>

      <td>

		<a title="Nahled" href="view.php?id=<?php echo $r['id']?>">

		<i class="fas fa-eye"></i>

		</a>

	   <a title="Přidělit oponentá" href="oponent/index.php?id=<?php echo $r['id']?>">

	   <i class="fas fa-user-alt"></i>

	   </a>

	   </td>

    </tr>

    <?php

    }

    ?>

	  </tbody>

</table>


</body>
