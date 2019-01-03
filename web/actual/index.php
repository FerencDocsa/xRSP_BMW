<?php
include("db.php");
session_start();
?>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">

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
            <a class="navbar-brand" href="./redaktor">REDAKTOR</a>
            <?php } ?>

            <?php    if($_SESSION['role'] == 6) { ?>
            <a class="navbar-brand" href="./oponent">OPONENT</a>
            <?php } ?>

             <?php    if($_SESSION['role'] == 3) { ?>
            <a class="navbar-brand" href="./sefredaktor ">SEFREDAKTOR</a>
            <?php } ?>
            
            <?php    if($_SESSION['role'] == 4) { ?>
            <a class="navbar-brand" href="./admin">ADMIN</a>
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

        <div class="middle">
            <div class="row">
                <div class="form-cleaner"></div>
                <div class="col-xs-12 col-sm-9 col-md-8 col-lg-9" id="main" role="main">

                    <strong>LOGOS POLYTECHNIKOS</strong> je vysokoškolský odborný recenzovaný časopis, který slouží pro publikační aktivity akademických pracovníků Vysoké školy polytechnické Jihlava i jiných vysokých škol, univerzit a výzkumných organizací. Je veden na seznamu recenzovaných odborných a vědeckých časopisů <strong><a href="https://dbh.nsd.uib.no/publiseringskanaler/erihplus/periodical/info?id=488187">ERIH PLUS</a> - </strong>European Reference Index for the Humanities and the Social Sciences</p>
                    <p><strong>Časopis</strong> je vydáván od roku 2010 a <strong>vychází čtyřikrát ročně</strong>. Redakční rada časopisu sestává z&nbsp;interních i externích odborníků. Funkci šéfredaktora zastává prorektor pro tvůrčí a projektovou činnost Vysoké školy polytechnické Jihlava. Funkce odpovědných redaktorů jednotlivých čísel přísluší vedoucím kateder Vysoké školy polytechnické Jihlava. Veškeré vydávané příspěvky prochází recenzním řízením a jsou pečlivě redigovány.&nbsp;</p>
                    <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Aktualni Stav Webu
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <strong> Přihlasovací udaje:</strong> <br>
                            Autor - autor1 <br>
                            Redaktor - redaktor <br>
                            Sefredaktror - sefredaktor<br>
                            Oponent - michal.dlouhy<br>
                            Admin - admin <br>
                            Heslo pro vsechny - 123456 <br><br>
                            <strong>Funkčnost:</strong><br>
                            Stavém na 03.01 pracé nad web je ukončena. Všechno co jsem stihl udělat mělo by fungovat. Aktualní funkčnost je popsana niže. <br>
                            Main: Přihlašení, Registrace, Role, Session atd.<br>
                            Autor: Přehled/Založení přispěvku, jejich stav, plny nahled, stahovaní. Formulař se kontroluje na vstupy. Přehled posudků oponenta po zpřistupnění redaktorem.<br>
                            Redaktor: Přehled všech přispěvku + podle stavu, přidělení/změna oponenta. Přehled vydanych posudku a zpřistupnění posudku autoroví. <br>
                            Oponent: Přehled nabidnutych a přidělenych přispěvku. Schvalení/Odmitnutí přispěvku. Přehled informace o přispěvku. Vydaní posudku<br>
                            Admin: prehled vsech prispevku, prehled a uprava profilu uzivatelu<br>
                            Sefredaktor: Agendy Autora, Oponenta, Redaktora <br><br>
                            <strong>Update LOG:</strong>  <br> 
                            16.12.2018 - aktualni fungujici web pro oponenty <br>
                            25.12.2018 - spovozneni Sefredaktora. Aktualni udaje jsou nahore<br>
                            28.12.2018 - dodatcne upravy stranky oponenta<br>
                            30.12.2018 - sprava profilu administratorem<br>
                            31.12.2018 - Prace nad logikou oponenta. Ted' může vydavat posudky kteři se ukladají v DB.  <br>
                            02.01.2018 - Ted' redaktor vidi vydany posůdek a může ho zpřistupnít autorovi.<br>
                            03.01.2018 - Autor ted' muze se podivat na posudek oponenta. <br>
                        </div>
                    </div>
                </div>



                <div class="col-xs-12 col-sm-3 col-md-4 col-lg-3 pull-right login-home">
                    <form enctype="application/x-www-form-urlencoded" action="" method="post">
                        <dl class="zend_form">

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
                            $_SESSION['role_user'] = 1;
                            echo "<meta http-equiv='refresh' content='0'>";

                             

                        }
                        if ($row['role']=="2")
                        {
                            $_SESSION['login_user'] = $myusername1;
                            $_SESSION['role_user'] = 2;
                            echo "<meta http-equiv='refresh' content='0'>";

                        }
                         if ($row['role']=="3")
                        {
                            $_SESSION['login_user'] = $myusername1;
                            echo "<meta http-equiv='refresh' content='0'>";


                        }
                        if ($row['role']=="4")
                        {
                            $_SESSION['login_user'] = $myusername1;
                            echo "<meta http-equiv='refresh' content='0'>";

                        }
                        if ($row['role']=="6")
                        {
                            $_SESSION['login_user'] = $myusername1;
                           	echo "<meta http-equiv='refresh' content='0'>";

                        }
                    }
                    else
                    {
                        $error="Login nebo heslo je nespave. Opakujte zadani";
                    }
                }
                ?>

                            <?php if(isset($_SESSION['role'])){ ?>
                            Jste přihlašen jako: <strong>
                                <?php echo $_SESSION['login_user']; ?></strong>
                            <?php } ?>

                            <?php if(!isset($_SESSION['role'])){ ?>
                            <dt id="username-label"><label for="username" class="required">Uživatelské jméno</label></dt>
                            <input type="text" name="username" id="username" value="" autocomplete="off" title="" required="required" />
                            <dt id="password-label"><label for="password" class="required">Heslo</label></dt>
                            <dd id="password-element"><input type="password" name="password" id="password" value="" required="required"></dd>
                            <input type="submit" name="tlacitko" id="tlacitko" value="Přihlásit" class="btn btn-info"> </dl>
                        <div style="font-size:11px; color:green; margin-top:10px">
                            <?php if(isset($_SESSION['success'])) { echo $_SESSION['success'];  $_SESSION['success'] = ""; } ?>
                        </div>
                        <div style="font-size:11px; color:#cc0000; margin-top:10px">
                            <?php echo $error; ?>
                        </div>
                        <a href="registrace/register.php">Založit učet</a>
                        <? } ?>
                    </form>
            </div>
        </div>
    </div>
</body>
