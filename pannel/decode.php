<?php
if(!isset($_COOKIE['Shadiviah_Login'])){
    header('location:../Home-Shadiviah');
    exit;
}
?>
<?php
function decode($text){

    $set=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9',' ');
    
                          //  63 ELEMENTS & 62 INDEXES
    
    $encodeset = array('we','sw','yu','tu','3r','5h','3l','6q','9i','3p','2w','0w','1b','oe','0q','qw','pw','jg','qj','qp','ip','mt','av','er','zs','xo','WE','SW','YU','TU','3R','5H','3L','6Q','9I','3P','2W','0W','1B','OE','0Q','QW','PW','JG','QJ','QP','IP','MT','AV','ER','ZS','XO', 'zz','oo','tt','rr','uu','vv','xx','qq','gg','nn','ss');
    
    $num = strlen($text);
    if($num%2!=0){
        return 0;
    }
    $decoded="";
    $couple="";
    for($i=0;$i<strlen($text);$i++){
        $couple = $couple.$text[$i].$text[$i+1];
        $i++;
        if(in_array($couple,$encodeset)){
            for($j=0;$j<63;$j++){
                if($couple==$encodeset[$j]){
                    $decoded = $decoded.$set[$j];
                }
               
            }	
        }
        else{
                $decoded = $decoded.$couple[0];
            }
    
        $couple="";
    }
    return $decoded;
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
          $message=decode($_POST['code']);
      }
      if($_POST['psw']!=$basic_password){
          $message="Incorrect Password";
      }

  }
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