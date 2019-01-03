<!DOCTYPE html>
<?php 
require("session.php");
$sql = "SELECT id, nazev, cislo, stav.popis, posudek.datum FROM posudek INNER JOIN prispevky ON posudek.id_prispevek = prispevky.id  INNER JOIN stav ON prispevky.stav = stav.id_stav WHERE stav = 2 AND id_oponent = (SELECT userid FROM users WHERE username = '".$_SESSION['login_user']."' )";
$result = mysqli_query($connection, $sql);


$sql_pridelene = "SELECT id, nazev, cislo, stav.popis, posudek.datum FROM posudek INNER JOIN prispevky ON posudek.id_prispevek = prispevky.id  INNER JOIN stav ON prispevky.stav = stav.id_stav WHERE stav = 7 AND id_oponent = (SELECT userid FROM users WHERE username = '".$_SESSION['login_user']."' )";
$result_pridelene = mysqli_query($connection, $sql_pridelene);


if(isset($_POST['sch_button']))
{
    $sql_schvalit = "UPDATE prispevky SET stav = 7 WHERE id = '". $_POST['id_hidden'] ."'";
    $exec_schvalit = mysqli_query($connection, $sql_schvalit);
    echo("<meta http-equiv='refresh' content='1'>");
}
else
{
    if(isset($_POST['odm_button']))
    {
        $sql_odmitnout = "DELETE FROM posudek WHERE id_prispevek = '". $_POST['id_hidden'] ."'";
        $exec_odmitnout = mysqli_query($connection, $sql_odmitnout);
        echo("<meta http-equiv='refresh' content='1'>");
    }
}



?>


<html lang="cz">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">


    <script>
        $(document).ready(function(){
        $('.search').on('keyup',function(){
            var searchTerm = $(this).val().toLowerCase();
            $('#userTbl tbody tr').each(function(){
                var lineStr = $(this).text().toLowerCase();
                if(lineStr.indexOf(searchTerm) === -1){
                    $(this).hide();
                }else{
                    $(this).show();
                }
            });
        });
    });
  </script>


    <title>Oponent</title>
</head>

<body>

    <div class="container">

        <div class="img"><a href="../index.php"><img src="../images/logo.png" alt=""></a></div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">OPONENT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="search form-control mr-sm-2" type="text" placeholder="Hledat...">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profil
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item disabled" href="#"><strong>Užívatel: </strong>
                                    <?php echo $_SESSION['login_user']; ?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">Odhlašit</a>
                            </div>
                        </li>
                    </ul>
                </form>

            </div>
        </nav>
        <h3 class="text-center">Přispevky čekajicí na schvalení</h3>

        <div class="table-test">
            <table class="table " id="userTbl">
                <thead>
                    <tr>
                        <th>Nazev přispevku</th>
                        <th>Tematicke čislo</th>
                        <th>Do kdy vydat posudek</th>
                        <th>Stav</th>
                        <th>Akce</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
	$loc = "http://plogos.epizy.com/prispevky/";
  	while($r = mysqli_fetch_assoc($result)){
   ?>
                    <tr>
                        <td>
                            <?php echo $r['nazev'] ?>
                        </td>
                        <td>
                            <?php echo $r['cislo'] ?>
                        </td>
                        <td>
                            <?php echo $r['datum'] ?>
                        </td>
                        <td>
                            <?php echo $r['popis'] ?>
                        </td>
                        <td>
                            <form method="post" action="">
                                <button type="submit" name="sch_button" class="btn btn-success">Schvalit</button>
                                <input type="hidden" name="id_hidden" value="<?php echo $r['id']; ?>">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Odmitnout</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Potvrzení</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Opravdu chcete odmitnout přispěvek: <strong>
                                                    <?php echo $r[nazev]; ?></strong>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavřit</button>
                                                <button type="submit" name="odm_button" class="btn btn-danger">Odmitnout</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                    <?php
    }
    ?>
                </tbody>
            </table>
        </div>
        <h3 class="text-center">Přidělene přispěvky</h3>
        <div class="table-test">
            <table class="table " id="userTbl">
                <thead>
                    <tr>
                        <th>Nazev přispevku</th>
                        <th>Tematicke čislo</th>
                        <th>Do kdy vydat posudek</th>
                        <th>Stav</th>
                        <th>Akce</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
	$loc = "http://plogos.epizy.com/prispevky/";
  	while($q = mysqli_fetch_assoc($result_pridelene)){
   ?>
                    <tr>
                        <td>
                            <?php echo $q['nazev'] ?>
                        </td>
                        <td>
                            <?php echo $q['cislo'] ?>
                        </td>
                        <td>
                            <?php echo $q['datum'] ?>
                        </td>
                        <td>
                            <?php echo $q['popis'] ?>
                        </td>
                        <td>
                            <a href="view.php?id=<?php echo $q['id'] ?>" title="Nahled" >
                                <i class="fas fa-eye"></i>
                            </a>
                            
                           <a href="posudek.php?id=<?php echo $q['id']?>" title="Vydat Posudek">
                               <i class="fas fa-user-edit"></i>
                            </a>
                            
                        </td>
                    </tr>
                    <?php
    }
    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
