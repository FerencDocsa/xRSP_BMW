<!DOCTYPE html>
<?php 
require("session.php");
$sql = "SELECT id, nazev, cislo, popis FROM prispevky INNER JOIN stav ON prispevky.stav = stav.id_stav WHERE autor = '".$_SESSION['login_user']."'";
$result = mysqli_query($connection, $sql);
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

  
 <title>Autor</title>
</head>
<body>

<div class="header">
    <h1 align="center">Přehled přispevku</h1>
</div>


<div class="btns">
    <a class="btn btn-dark" href="#">Hlavní</a>
    <a class="btn btn-dark" href="zalozeni/index.php">Založit přispevek</a>
     <a class="btn btn-dark" href="pokyny.php">Důležíta informace</a>
    <a id="logout" class="btn btn-dark" href="logout.php">Odhlašit</a>
    <label id="user_l">Jste přihlašen jako: <strong><?php echo $_SESSION['login_user']?></strong></label>
</div>


    
    
    
<div class="tablx">
<table class="table table-striped" id="userTbl">
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
	  <td><?php echo $r['popis'] ?></td>
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
    
<div class="srch">
<input type="text" class="search form-control" placeholder="Hledát...">
</div>

    
</body>
</html>
