<?php
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
</header>
<body>
     
   <div class="nav">
       <div class="logo">
           <img class="adoppegea" src="img/adoppegea.png">
           <p><a hreft="home.php">logo</a></p>
        </div>

        <div class="right-links">

           <?php
           $id = $_SESSION['id'];
           $query = mysqli_query($con, "SELECT * FROM users WHERE Id=$id");

           while($result = mysli_fetch_assoc($query)){
              $res_Uname = $result['Username'];
              $res_Email = $result['Email'];
              $res_Age =  $result['Age'];
              $res_id = $result['Id'];
            }

            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            <a hreft ="php/logout.php" > <button class="btn">Cerrar session</button> </a>

        </div>
   </div>
    <main>


     <div class="main-box top">
       <div class="top">
        <div class="box">
         <p>Hola<b><?php echo $res_Uname?></b>,  Bienvenido</p>
        </div>
        <div class="box">
         <p>Su correo electronico es <b><?php echo $res_Email ?></b>.</p>
        </div>
      </div>
      <div class="botton">
        <div class="box">
            <p>Y tu eres <b><?php echo $res_Age ?>Años</b>.</p>
        </div>
      </div>
      <div class="botton">
        <div class="box">
            <p>Pagina <b> <?php echo $res_Age ?> Años</b>.</p>
        </div>
      </div>
     </div>

    </main>
</body>
</html>