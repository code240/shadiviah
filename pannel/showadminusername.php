<?php
if(!isset($_COOKIE['Shadiviah_Login'])){
    header('location:../Home-Shadiviah');
    exit;
}
?>
<?php
   session_start();
   if(!isset($_SESSION['recentlyregister'])){
       header("location:pannel.php");
   }
   $username = $_SESSION['recentlyregister'];

?>
<!DOCTYPE html>
<html>
    <head>
       <title>ADMIN REGISTER</title>
       <link rel="icon" src="site_image/love.png"/>
       <style>
        body{
            margin-top:6vw;
            background : #eee;
        }
        h1{
            font-family:sans-serif;
            font-weight:bold;
            font-size:4vw;
            color:#999;
            width:60vw;
        }
        #sp1{
            color:#c21e50;
        }
        .button_pannel{
            display:block;
            width:40vw;
            height:auto;
            font-size:1.8vw;
            margin-top:8vw;
            padding:1vw;
            text-decoration:none;
            background:red;
            color:#fff;
            font-size:bold;
            font-family:sans-serif;
            boder:1px solid red;
            border-radius:1vw;
        }
        a{
            text-decoration:none;
        }
        </style>
        <title>Admin Record added</title>
    </head>
<body>
    <center>
      <h1>
          Admin has been register with the username of :<br>
               <span id="sp1">  <?php echo $username;  ?>  </span>
      </h1> 
      <a href="pannel.php"><button class="button_pannel">Back to Pannel</button> </a>
    </center>

<?php
// $_SESSION['recentlyregister']="";
unset($_SESSION['recentlyregister']);
?>

</body>
</html>