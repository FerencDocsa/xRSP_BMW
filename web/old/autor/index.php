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
        <input class="search form-control mr-sm-2" type="text" placeholder="Hledat...">
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

    
<!-- 

      <input class="search form-control mr-sm-2" type="text" placeholder="Hledat..">
       <strong>Užívatel: </strong> <?php echo $_SESSION['login_user']; ?>  
     <a class="btn btn-danger my-2 my-sm-0">Odhlašit</a>

-->    
    
<div class="table-test">
<table class="table " id="userTbl">
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
    

    </div>
    </body>
</html>