<!DOCTYPE html>
<?php 
require("session.php");
$sql = "SELECT userid, username, jmeno, prijmeni, email, role.nazev FROM users INNER JOIN role ON users.role = role.id_role WHERE userid = '".$_GET['id']."'";
$result = mysqli_query($connection, $sql);
$r = mysqli_fetch_assoc($result);

$sql_role = "SELECT * FROM role";
$result_role = mysqli_query($connection, $sql_role);


if(isset($_POST['userid'])){
$sql_update = "UPDATE users SET username = '".$_POST['username']."', jmeno = '".$_POST['jmeno']."', prijmeni = '".$_POST['prijmeni']."', email = '".$_POST['email']."', role = '".$_POST['select_role']."' WHERE userid = '".$_POST['userid']."' ";
$result_update = mysqli_query($connection, $sql_update);

echo("<meta http-equiv='refresh' content='1'>");    
}

?>


<html lang="cz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="style/style.css">



    <title>Administrator</title>
</head>

<body>

    <div class="header">
        <h1 align="center">Admin Panel</h1>
    </div>


    <div class="btns">
        <a class="btn btn-dark" href="index.php">Přispěvký</a>
        <a class="btn btn-dark" href="users.php">Uživatele</a>
        <a id="logout" class="btn btn-dark" href="logout.php">Odhlašit</a>
        <label id="user_l">Jste přihlašen jako: <strong>
                <?php echo $_SESSION['login_user']?></strong></label>
    </div>


    <div class="tablx2">
        <h2> Uprava profilu </h2>

        <form method="post" action="" enctype="multipart/form-data">
            <label>ID</label>
            <br>
            <input type="text" name="userid" value="<?php echo $r['userid'];?>" readonly="true" />
            <br>
            <label>Jmeno</label>
            <br>
            <input type="text" name="jmeno" value="<?php echo $r['jmeno']; ?>" />
            <br>
            <label>Prijmeni</label>
            <br>
            <input type="text" name="prijmeni" value="<?php echo $r['prijmeni'];?>" />
            <br>
            <label>Username</label>
            <br>
            <input type="text" name="username" value="<?php echo $r['username'];?>" />
            <br>
            <label>Email</label>
            <br>
            <input type="text" name="email" value="<?php echo $r['email'];?>" />
            <br>
            
            
            <label>Role</label>
            <br>
            
             <select name="select_role" style="width: 15%; margin-left: 5%;">
                <?php while($r = mysqli_fetch_assoc($result_role)){?>
                <option value="<?php echo $r['id_role'];?> "> <?php echo $r['nazev']; ?></option>    
                <?php } ?>
            </select>
            
            <br><br>
            <label>Potvrzeni</label>
           <button class="btn btn-success" type="submit">OK</button>
        </form>
    </div>

</body>

</html>
