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
    </head>


<title>Prehled Prispevku</title>
<body>

<div class="container">
    
    <div class="img"> <img src="../images/logo.png" alt=""> </div>

    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">AUTOR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="zalozeni/index.php">Založit přispěvek</a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="pokyny.php">Důležita informace</a>
      </li>
       
    </ul>  
    <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item disabled" href="#"><strong>Užívatel: </strong> <?php echo $_SESSION['login_user']; ?></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Odhlašit</a>
        </div>
      </li>
        </ul>
    </form>

    </div>
</nav>

    
<div class="table-test table-view">
     <h4>Informace o prispevku</h4>

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
	<br><br>
	<label>Soubor</label>
	<a class="btn btn-secondary"  href="<?php echo $loc.$r['location'] ?> "> Stahnout </a> <br>
    </div>
</div>

</body>
<div class="footer">Toto je projekt tymů <strong>BMW</strong> || Předmět xRSP rok 2018.</div>
</html>

    