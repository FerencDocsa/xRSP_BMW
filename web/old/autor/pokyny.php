<!DOCTYPE html>
<?php 
require("session.php");
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
        <a class="nav-link" href="#">Důležita informace</a>
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
    <h5>Soubory ke stažení: </h5>
    <ul>
        <li><a class="my-link" target="_blank" href="http://www.vspj.cz/soubory/download/id/4203">Pokyny pro přispěvatele</a></li>
        <li><a class="my-link" target="_blank" href="https://www.vspj.cz/soubory/download/id/4186">Šablona</a></li>
        <li><a class="my-link" target="_blank" href="http://www.vspj.cz/soubory/download/id/6907">Recenzní řízení</a></li>
    </ul>
    <h5>Jazyky, ve kterých lze publikovat</h5>
    <ul>
    <li>Angličtina</li>
    <li>Čeština </li>
    <li>Slovenština</li>
    </ul>
    <h5>Termíny uzávěrek pro sběr příspěvků</h5>
    <ul>
        <li>4/2018 - elektrotechnika, informatika, matematika, cizí jazyky (31. 08. 2018)</li>
        <li>1/2019 - ošetřovatelství, porodní asistence a další zdravotnické obory (31. 10. 2018)</li>
        <li>2/2019 - ošetřovatelství, porodní asistence a další zdravotnické obory, sociologie, sport, psychologie, sociální práce (31. 03. 2019)</li>
        <li>3/2019 - ekonomika, management, marketing, statistika, operační výzkum, finanční matematika, pojišťovnictví, cestovní ruch, regionální rozvoj, <br> veřejná správa (31. 05. 2019)</li>
    </ul>
    <strong>  Pokud rozsah doručených příspěvků překročí kapacitu příslušného vydání, bude přijímání příspěvků ukončeno před uvedeným termínem.</strong>
    <br>
    <br>
</div>    
    </div>
    </body>
</html>