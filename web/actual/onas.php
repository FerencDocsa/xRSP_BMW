<?php
include("db.php");
session_start();
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


    <title>LOGOS POLYTECHNIKOS</title>

</head>
<body>


<div class="container">


<div class="img"><a href="index.php"><img src="images/logo.png" alt=""></a></div>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
         <?php    if($_SESSION['role'] == 1) { ?>
         <a class="navbar-brand" href="./autor">AUTOR</a>
       <?php } ?>
        
       <?php    if($_SESSION['role'] == 2) { ?>
         <a class="navbar-brand" href="./redaktor">AUTOR</a>
       <?php } ?>
        
       <?php    if($_SESSION['role'] == 3) { ?>
         <a class="navbar-brand" href="./sefredaktor">AUTOR</a>
       <?php } ?>
        
       <?php    if($_SESSION['role'] == 4) { ?>
         <a class="navbar-brand" href="./admin">AUTOR</a>
       <?php } ?>
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">        
        
      <li class="nav-item">
        <a class="nav-link" href="casopisy.php">Časopisý</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="prisp.php">Pro přispěvatele</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="onas.php">O nás</a>
      </li>
    </ul>
         
          <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">
            <?php if(!(isset($_SESSION['role']))) { } else { ?>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Odhlašit</a>
      </li>
            <?php } ?>
        </ul>
    </form>      
  </div>
</nav>
    
    
  <div class="border-main">

      <h5>Šéfredaktor</h5>
<p>doc. Ing. Zdeněk Horák, Ph.D. (Vysoká škola polytechnická Jihlava)</p>
<h5>Redakční rada</h5>
<p>doc. PhDr. Ladislav Benyovszky, CSc. (Univerzita Karlova v Praze)<br />prof. PhDr. Ivan Blecha, CSc. (Univerzita Palackého v Olomouci)<br />doc. RNDr. Helena Brožová, CSc. (Česká zemědělská univerzita v Praze)<br />doc. Mgr. Ing. Martin Dlouhý, Dr. (Vysoká škola ekonomická v Praze)<br />prof. Ing. Tomáš Dostál, DrSc. (Vysoké učení technické v Brně)<br />Ing. Jiří Dušek, Ph.D. (Vysoká škola evropských a regionálních studií)<br /> Ing. Veronika Hedija, Ph.D. (Vysoká škola polytechnická Jihlava)<br />doc. PhDr. Martin Hemelík, CSc. (Univerzita Karlova v Praze)<br />prof. RNDr. Ivan Holoubek, CSc. (Masarykova univerzita)<br />Mgr. Petr Chládek, Ph.D. (Vysoká škola technická a ekonomická a Českých Budějovicích)<br />prof. PhDr. Ivo Jirásek, Ph.D. (Univerzita Palackého v Olomouci)<br />prof. Ing. Bohumil Minařík, CSc. (Vysoká škola polytechnická Jihlava) <br />doc. PhDr. Ján Pavlík (Vysoká škola ekonomická v Praze)<br />doc. PhDr. Karel Pstružina, CSc. (Vysoká škola ekonomická v Praze)<br />prof. MUDr. Aleš Roztočil, CSc. (Vysoká škola polytechnická Jihlava)<br />prof. Ing. Jan Váchal, CSc. (Vysoká škola technická e ekonomická v Českých Budějovicích)<br />doc. Ing. Libor Žídek, Ph.D (Masarykova univerzita v&nbsp;Brně)</p> 
<p><strong>Adresa nakladatele:</strong> Vysoká škola polytechnická Jihlava, redakce LOGOS POLYTECHNIKOS, Tolstého 16, 586 01 Jihlava.</p>

    </div>