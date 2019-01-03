<?php
include("db.php");
session_start();
?>
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
<div class="img"> <img src="images/logo.png" alt=""> </div>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">HLAVNÍ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="casopisy.php">Časopisý</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="prisp.php">Pro přispěvatele</a>
      </li>
          <li class="nav-item active">
        <a class="nav-link" href="onas.php">O nás</a>
      </li>
    </ul>
  </div>
</nav>
    
<div class="middle">
    <div class="row">
        <div class="form-cleaner"></div>
         <div class="col-xs-12 col-sm-9 col-md-8 col-lg-9" id="main" role="main">
            <div class="tabl1">
                <strong>LOGOS POLYTECHNIKOS</strong> je vysokoškolský odborný recenzovaný časopis, který slouží pro publikační aktivity akademických pracovníků Vysoké školy polytechnické Jihlava i jiných vysokých škol, univerzit a výzkumných organizací. Je veden na seznamu recenzovaných odborných a vědeckých časopisů <strong><a href="https://dbh.nsd.uib.no/publiseringskanaler/erihplus/periodical/info?id=488187">ERIH PLUS</a> - </strong>European Reference Index for the Humanities and the Social Sciences</p>
                <p><strong>Časopis</strong> je vydáván od roku 2010 a <strong>vychází čtyřikrát ročně</strong>. Redakční rada časopisu sestává z&nbsp;interních i externích odborníků. Funkci šéfredaktora zastává prorektor pro tvůrčí a projektovou činnost Vysoké školy polytechnické Jihlava. Funkce odpovědných redaktorů jednotlivých čísel přísluší vedoucím kateder Vysoké školy polytechnické Jihlava. Veškeré vydávané příspěvky prochází recenzním řízením a jsou pečlivě redigovány.&nbsp;</p>
                <div style="color: red">
                    <strong> Přihlasovací udaje:</strong> <br>
                    Autor - autor1 <br>
                    Redaktor - redaktor <br>
                    Admin - admin <br>
                    Heslo - 123456 <br>
                </div> 
            </div>
          </div>

          <div class="col-xs-12 col-sm-3 col-md-4 col-lg-3 pull-right login-home">
            <form enctype="application/x-www-form-urlencoded" action="" method="post"><dl class="zend_form">
                
               <?php
                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    $myusername1=mysqli_real_escape_string($connection,$_POST['username']);
                    $mypassword1=mysqli_real_escape_string($connection,$_POST['password']);
                    $mypassword=MD5($mypassword1);

                    $sql="SELECT * FROM users WHERE username='$myusername1' and password='$mypassword'";
                    $result=mysqli_query($connection,$sql);
                    $row=mysqli_fetch_array($result);
                    $_SESSION['userid']=$row['userid'];
                    $_SESSION['role']=$row['role'];
                    $count=mysqli_num_rows($result);
                    if($count==1)
                    {
                        if ($row['role']=="1")
                        {
                            $_SESSION['login_user'] = $myusername1;
                            header ("location: ./autor");

                        }
                        if ($row['role']=="2")
                        {
                            $_SESSION['login_user'] = $myusername1;
                            header ("location: ./redaktor");
                        }
                         if ($row['role']=="3")
                        {
                            $_SESSION['login_user'] = $myusername1;
                            header ("location: ./sefredaktor");

                        }
                        if ($row['role']=="4")
                        {
                            $_SESSION['login_user'] = $myusername1;
                            header ("location: ./admin");
                        }
                    }
                    else
                    {
                        $error="Login nebo heslo je nespave. Opakujte zadani";
                    }
                }
                ?>

                    <dt id="username-label"><label for="username" class="required">Uživatelské jméno</label></dt>
                    <input type="text" name="username" id="username" value="" autocomplete="off" title="" required="required" />
                    <dt id="password-label"><label for="password" class="required">Heslo</label></dt>
                    <dd id="password-element"><input type="password" name="password" id="password" value="" required="required"></dd>
                    <input type="submit" name="tlacitko" id="tlacitko" value="Přihlásit" class="btn btn-info"> </dd></dl>
                    <div style = "font-size:11px; color:green; margin-top:10px"><?php if(isset($_SESSION['success'])) { echo $_SESSION['success'];  $_SESSION['success'] = "";}?></div>
                    <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error;?></div>   
                    <a href="registrace/register.php">Založit učet</a>
        </div>
    </div>
</div>
</body>
