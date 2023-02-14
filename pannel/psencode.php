<?php
if(!isset($_COOKIE['Shadiviah_Login'])){
    header('location:../Home-Shadiviah');
    exit;
}
?>

    
<?php
  $basic_password = "decode";
  $message = "Result Will shown here";
  if(!isset($_POST['code']) && isset($_POST['psw'])){
    $message = "Enter Password";
  }
  if(isset($_POST['code']) && !isset($_POST['psw'])){
    $message = "What to decode?";
  }
  if(!isset($_POST['code']) && !isset($_POST['psw'])){
    $message = "Result will shown here!!";
  }
  if(isset($_POST['code']) && isset($_POST['psw'])){
      if($_POST['psw']==$basic_password){
          $message=base64_encode($_POST['code']);
      }
      if($_POST['psw']!=$basic_password){
          $message="Incorrect Password";
      }

  }
//   echo base64_encode("hello");
?>






<html>
    <head>
        <title>
            Decode - Shadiviah System
        </title>
        <style>
            h1{
                display: block;
                margin: 1% 35%;
                font-size: 3rem;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
           .main{
               height: auto;
               border: 2px solid #444444;
               width: 50%;
               padding-bottom: 1rem;
               padding-top: 1rem;
               margin: 0 auto;
               margin-top: 3%;
           }
           .input-code{
               width: 90%;
               border: 2px solid #999999;
               font-size: 2rem;
               display: block;
               margin: 5% auto;
               border-radius: 1rem;
               padding-left: 1rem;
               padding-top: 0.4rem;
               padding-bottom: 0.4rem;
           }
           .btn-submit{
               width: 50%;
               font-size: 1.6rem;
               border: 0;
               padding-top: 0.5rem;
               padding-bottom: 0.5rem;
               border-radius: 1rem;
               background-color: rgb(255, 41, 130);
               color: aliceblue;
               transition: 0.5s ease-in-out;

           }
           .basic{
              width: 70%;
           }
           .btn-submit:hover{
               background-color: rgb(241, 0, 100);
               color: aliceblue;
           }
           .result{
               height: auto;
               padding-top:5px;
               padding-bottom: 5px;
               padding-left: auto;
               border: 2px solid rgb(184, 184, 184);
               width: 80%;
               margin: 10% auto;
               background-color: rgb(228, 255, 255);
               border-radius: 2rem;
               padding-left: 10%;
           }
           .result-font{
               font-size: 2rem;
               font-family: sans-serif;
           }


           @media screen and (max-width:991px) {
            h1{
                display: block;
                margin: 3% 10%;
                font-size: 5rem;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
           .main{
               height: auto;
               border: 2px solid #444444;
               width: 90%;
               padding-bottom: 1rem;
               padding-top: 1rem;
               margin: 0 auto;
               margin-top: 10%;
           }
           .input-code{
               width: 90%;
               border: 2px solid #999999;
               font-size: 4rem;
               display: block;
               margin: 10% auto;
               border-radius: 1rem;
               padding-left: 1rem;
               padding-top: 0.4rem;
               padding-bottom: 0.4rem;
           }
           .btn-submit{
               width: 50%;
               font-size: 3.5rem;
               border: 0;
               padding-top: 1rem;
               padding-bottom: 1rem;
               border-radius: 1rem;
               background-color: rgb(255, 41, 130);
               color: aliceblue;
               transition: 0.5s ease-in-out;

           }
           .basic{
              width: 70%;
           }
           .btn-submit:hover{
               background-color: rgb(241, 0, 100);
               color: aliceblue;
           }
           .result{
               height: auto;
               padding-top:5px;
               padding-bottom: 5px;
               padding-left: auto;
               border: 2px solid rgb(184, 184, 184);
               width: 80%;
               margin: 10% auto;
               background-color: rgb(228, 255, 255);
               border-radius: 2rem;
               padding-left: 10%;
           }
           .result-font{
               font-size: 3.5rem;
               font-family: sans-serif;
           }

               
           }
        </style>
    </head>

<body>
    <h1>SHADIVIAH.IN</h1>
    <div class="main">
        <form action="" method="post">
       <input type="text" name="code" autocomplete="off" class="input-code" placeholder="Encode Text">
       <input type="Password" name="psw" autocomplete="off" class="input-code basic" placeholder="Basic Password">

       <input type="submit" class="input-code btn-submit">
        </form>
       <div class="result">
          <pre class="result-font"><?php echo $message; ?></pre>
       </div>

    </div>
    <!-- decode -->
</body>
</html>