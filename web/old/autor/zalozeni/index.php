<?php
require('session.php');
$name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$extension = substr($name, strpos($name, '.') + 1);

$kapacita_q = "SELECT kapacita FROM kapacita WHERE cislo = '2/2019'";
$kapacita_q1 = "SELECT kapacita FROM kapacita WHERE cislo = '3/2019'";
$result_k = mysqli_query($connection, $kapacita_q);
$result_k1 = mysqli_query($connection, $kapacita_q1);
$vysl_k = mysqli_fetch_array($result_k, MYSQLI_NUM);
$vysl_k1 = mysqli_fetch_array($result_k1, MYSQLI_NUM);


if(isset($_POST['nazev'])){
if(isset($name) && !empty($name)){
    if($extension == "pdf" || $extension == "docx" || $extension == "doc"){
        $location = "/home/vol15_1/epizy.com/epiz_23015580/htdocs/prispevky/";
        $rand = rand(1,100);                
        $full_name = $rand. "_" .$name;    
        $location .= $full_name;    
        if(move_uploaded_file($tmp_name, $location)){
               $query = "INSERT INTO `prispevky` (nazev, kontakt, cislo, location, stav, autor) VALUES ('".$_POST["nazev"]."', '".$_POST["kontakt"]."', '".$_POST["Rok"]."', '$full_name', '1', '".$_SESSION['login_user']."')";            
              $result = mysqli_query($connection, $query);

              $query_rok = "UPDATE kapacita SET kapacita = kapacita - 1 WHERE cislo = '".$_POST["Rok"]."'";
              $result2 = mysqli_query($connection, $query_rok);
               
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
}


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
    
  <title>Zalozeni Prispevku</title>
</head>
<body>


<div class="container">
    
    <div class="img"> <img src="../../images/logo.png" alt=""> </div>

    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php">AUTOR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Založit přispěvek</a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="../pokyny.php">Důležita informace</a>
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
    

<div class="table-test">
    <h2>Založení přispěvku</h2>
    <form class="form-signin" method="POST" action="" enctype="multipart/form-data" >
        <div class="inp">
            <label>Název příspěvku</label>
            <input type="text" class="input" name="nazev">
            <br>
            <label>Kontaktní údaje</label>
            <input type="text" class="input" name="kontakt">
            <br>
            <label>Tematicke čislo časopisu</label>
            <select name="Rok">
               <?php if($vysl_k[0] != 0) {?><option value="2/2019">2/2019</option><?php } ?>
                <?php if($vysl_k1[0] != 0) {?><option value="3/2019 ">3/2019</option><?php } ?>
            </select>
            <br>
			<label>Aktualní kapacita</label>
			<strong>2/2019: </strong><?php echo $vysl_k[0]; ?> volnych mist <strong>3/2019: </strong> <?php echo $vysl_k1[0]; ?>  volnych mist
			<br>
            <label>Soubor:</label>
            <input type="file" name="file" id="exampleInputFile"><br>
            <button class="btn btn-odeslat btn-success" type="submit">Přidat</button>
            <br>
			</div>       
    </form>
</div>
<br>

<?php if(isset($smsg)){ ?>
<div class="alert alert-success" style="width: 100%; text-align: center;"><?php echo $smsg; }?> </div>
<?php if(isset($fmsg)){ ?>
<div class="alert alert-danger" style="width: 100%; margin: 10 auto; text-align: center;"> <?php echo $fmsg; }?> </div>

    </div>
    </body>
</html>
