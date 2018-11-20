<?php
include("db.php");
session_start();
?>
<head>

<html lang="cs" class="no-js"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="./files/style.css" media="all" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/favicon.ico">
    <title>Logos Polytechnikos</title>
</html>
</head>
<body>

<p class="screenreader">

<div class="container">
    <h3 class="screenreader">Školní elektronické systémy</h3>
    <div class="clearfix">
        <ul class="external-menu reset hidden-xs pull-left">
            <li><a title="Oficiální webové stránky Vysoké školy polytechnické" href="http://www.vspj.cz/">Web VŠPJ</a></li>
            <li><a title="Informační systém Vysoké školy polytechnické" href="http://is.vspj.cz/">Informační systém VŠPJ</a></li>
            <li><a title="E-learning - elektronická podpora výuky na VŠPJ" href="https://elearning.vspj.cz/">E-learning</a></li>
            <li class="last"><a title="Internetové rozhraní elektronické pošty pro studenty a zaměstnance VŠPJ" href="https://webmail.vspj.cz/">Pošta</a></li>
        </ul>
    </div>

    <div> <img src="images/logo.png" alt=""> </div>

    <div class="navbar-header navbar-default">
        <a href="https://praxe.vspj.cz/" class="navbar-brand visible-xs">Praxe VŠPJ</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
            <span class="sr-only">Zobrazit navigaci</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <nav class="mainmenu collapse navbar-collapse bs-navbar-collapse">
        <ul class="nav navbar-nav reset" id="menu">
            <li class="active">

            </li>

            <li>
                <a href="https://praxe.vspj.cz/kontakty">Kontakty</a>
            </li>
            <li>
                <a href="https://praxe.vspj.cz/faq">FAQ</a>
            </li>
            <li class="active">
                <a class="visible-xs" href="https://praxe.vspj.cz/">Odhlásit</a>
            </li>
        </ul>            </nav>
    <div class="middle">
        <div class="row">

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
                                if ($row['role']=="Autor")
                                {
									$_SESSION['login_user'] = $myusername1;
                                    header ("location: ./autor");

                                }
								if ($row['role']=="Redaktor")
                                {
									$_SESSION['login_user'] = $myusername1;
                                    header ("location: ./redaktor");

                                }
								
                            }
                            else
                            {
                                $error="Login nebo heslo je nespave. Opakujte zadani";
                            }
                        }
                        ?>

                        <dt id="username-label"><label for="username" class="required">Uživatelské jméno</label></dt>
                        <dd id="username-element">
                            <input type="text" name="username" id="username" value="" autocomplete="off" title="" required="required" data-original-title="U studentů stejné jako do IS, u firem e-mail použitý při registraci."></dd>
                        <dt id="password-label"><label for="password" class="required">Heslo</label></dt>
                        <dd id="password-element">
                               <input type="password" name="password" id="password" value="" required="required"></dd>
                        <dt id="tlacitko-label">&nbsp;</dt><dd id="tlacitko-element">
						<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error;?></div>
						
						   

                            <input type="submit" name="tlacitko" id="tlacitko" value="Přihlásit" class="btn btn-info"></dd></dl>
							<a href="registrace/register.php">Založit učet</a>
							</form>                        </div>
							
            <div class="form-cleaner"></div>

            <div class="col-xs-12 col-sm-9 col-md-8 col-lg-9" id="main" role="main"/>

<h2Vítejte v portálu časopisu VŠPJ!</h2><p>

<strong>LOGOS POLYTECHNIKOS je vysokoškolský odborný recenzovaný časopis</strong>, který slouží pro publikační aktivity akademických pracovníků Vysoké školy polytechnické Jihlava i jiných vysokých škol, univerzit a výzkumných organizací. Je veden na seznamu recenzovaných odborných a vědeckých časopisů <strong>ERIH PLUS - </strong>European Reference Index for the Humanities and the Social Sciences (https://dbh.nsd.uib.no/publiseringskanaler/erihplus/periodical/info?id=488187).</p>
<p><strong>Časopis</strong> je vydáván od roku 2010 a <strong>vychází čtyřikrát ročně</strong>. Redakční rada časopisu sestává z&nbsp;interních i externích odborníků. Funkci šéfredaktora zastává prorektor pro tvůrčí a projektovou činnost Vysoké školy polytechnické Jihlava. Funkce odpovědných redaktorů jednotlivých čísel přísluší vedoucím kateder Vysoké školy polytechnické Jihlava. Veškeré vydávané příspěvky prochází recenzním řízením a jsou pečlivě redigovány.&nbsp;</p><p><strong>Tematické a obsahové zaměření časopisu</strong>, především na obory sociálně-ekonomické, zdravotnické a technické, reflektuje potřeby oborových kateder Vysoké školy polytechnické Jihlava. Na základě souhlasu odpovědného redaktora mohou katedry poskytnout publikační prostor i&nbsp;odborníkům bez zaměstnanecké vazby k Vysoké škole polytechnické Jihlava.</p>
<p><strong>V časopisu je možné publikovat</strong> odborné články, statě, přehledové studie, recenze a další typy odborných příspěvků v&nbsp;českém, slovenském a anglickém jazyce. Do recenzního řízení jsou přijímány příspěvky tematicky odpovídající zaměření časopisu a formálně upravené dle redakční šablony (viz. níže).<br><br></p>

<div class="row">
                    <div class="col-md-6 col-sm-12">


                        </article>
                    </div>
                    <div class="col-md-6 col-sm-12">

                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <article>


                    </div>
                    <div class="col-md-6 col-sm-12">

                    </div>
                </div>      <p>
                    <a><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <a>
                <p>              </div>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 logo-projekt">
                <img src="./files/irv-logo.png" alt="" width="410" height="75">
            </div>
        </div>

        <ul class="contentinfo" role="contentinfo">
            <li>© Vysoká škola polytechnická Jihlava, Tolstého 16, 586 01 Jihlava</li>

        </ul>
    </footer>
</div>

</body></html>