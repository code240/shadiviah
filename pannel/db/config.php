<?php
if(!isset($_COOKIE['Shadiviah_Login'])){
    header('location:../Home-Shadiviah');
    exit;
}
?>
<?php
if(isset($_GET['wed'])){
    session_start();
    $_SESSION['test'] = "test";
    session_unset();
    $_SESSION['wedcode']=$_GET['wed'];
    $wed = $_SESSION['wedcode'];
    $con=mysqli_connect('localhost','root','','shadiviah');

    if(mysqli_connect_errno()){
    $con=mysqli_connect('localhost','root','','shadiviah');
    } 
    $queryfire = "SELECT * FROM wedding WHERE wedding_code = '$wed' AND deletestatus = 0";
    $getdata = mysqli_query($con,$queryfire);
    $rowcount = mysqli_num_rows($getdata);
    if($rowcount==0){
        echo "<script>window.history.back();</script>";
        mysqli_close($con);
        exit;
    }
    while($result = mysqli_fetch_array($getdata)){
        $pagename  =  $result['pagename'];
        $themecode = $result['theme'];
    }
    
    

    // Theme source code
     $theme_three_one = "../../Wedding/source/main/theme_3_1_pink_page_six_thirty_two_pm_home_rewari_oiebcowiehfbwoeoihedbfbweh_min_php.php";
     $theme_one_one = "../../Wedding/source/main/theme_1_1_blue_transform_four_thirty_two_pm_uiedbeuiwfewfvuewgic.php";
     $theme_two_one = "../../Wedding/source/main/theme_2_1_wedding_gradient_two_six_pm_iuyvefhruwfbweufbcowh_min_php_main.php";
     $theme_four_one = "../../Wedding/source/main/theme_4_1_black_addition_ten_thirty_two_pm_wuioqhdf238hiwhdoewjhfkewgfkwjefkjwefbkjwefkcb_min_theme_min.php";
    // Theme source over




    if(isset($_POST['url'])){
      $url = $_POST['url'];
      $queryfire2 = "INSERT INTO config (wedding_code,pagename,location_url,deletestatus) VALUES ('$wed','$pagename','$url',0)";
      mysqli_query($con,$queryfire2);
      session_destroy();
      mysqli_close($con);

     
      // Create client page
      if($themecode=="any"){
        $myFilename= $theme_three_one;
        $randomly = rand(0,3);
        if($randomly==0){
            $myFilename= $theme_three_one;
        }
        if($randomly==1){
            $myFilename= $theme_two_one;
        }
        if($randomly==2){
            $myFilename= $theme_one_one;
        }
        if($randomly==3){
            $myFilename= $theme_four_one;
        }        
        $myfile = fopen($myFilename, "r") or die("Unable to open file!");
        $data= fread($myfile,filesize($myFilename));
        fclose($myfile);

        $file_to_be_created = "../../wedding/".$pagename.".php";


        $myfile = fopen($file_to_be_created, "w") or die("Unable to open file!");
        fwrite($myfile, $data);
        fclose($myfile);

    }
                if($themecode=="4-1"){
                    $myFilename= $theme_four_one;
                    $myfile = fopen($myFilename, "r") or die("Unable to open file!");
                    $data= fread($myfile,filesize($myFilename));
                    fclose($myfile);

                    $file_to_be_created = "../../wedding/".$pagename.".php";


                    $myfile = fopen($file_to_be_created, "w") or die("Unable to open file!");
                    fwrite($myfile, $data);
                    fclose($myfile);

                }

                if($themecode=="3-1"){
                    $myFilename= $theme_three_one;
                    $myfile = fopen($myFilename, "r") or die("Unable to open file!");
                    $data= fread($myfile,filesize($myFilename));
                    fclose($myfile);

                    $file_to_be_created = "../../wedding/".$pagename.".php";


                    $myfile = fopen($file_to_be_created, "w") or die("Unable to open file!");
                    fwrite($myfile, $data);
                    fclose($myfile);

                }
                if($themecode=="1-1"){
                    $myFilename= $theme_one_one;
                    $myfile = fopen($myFilename, "r") or die("Unable to open file!");
                    $data= fread($myfile,filesize($myFilename));
                    fclose($myfile);

                    $file_to_be_created = "../../wedding/".$pagename.".php";


                    $myfile = fopen($file_to_be_created, "w") or die("Unable to open file!");
                    fwrite($myfile, $data);
                    fclose($myfile);

                }
                if($themecode=="2-1"){
                    $myFilename= $theme_two_one;
                    $myfile = fopen($myFilename, "r") or die("Unable to open file!");
                    $data= fread($myfile,filesize($myFilename));
                    fclose($myfile);

                    $file_to_be_created = "../../wedding/".$pagename.".php";


                    $myfile = fopen($file_to_be_created, "w") or die("Unable to open file!");
                    fwrite($myfile, $data);
                    fclose($myfile);

                }

    //   create page complete


      header('location:Wedding_db.php');
    }
}

?>




















<html>
    <head>
        <title>
            Config 
        </title>
        <link rel="stylesheet" href="../../bootcss/animate.css">
        <link rel="stylesheet" href="../../bootcss/bootstrap.min.css"/>
        <link rel="stylesheet" href="../../bootcss/bootstrap.css"/>

        <style>

            body{
                padding-bottom: 4rem;
            }
             h1{
                 font-size: 3rem;
                 margin-top: 3rem;
                 text-align: center;
                 margin-bottom: 3rem;
             }
             .form-div{
                 border: 1px solid rgb(78, 78, 78);
                 width:50vw ;
                 margin: 0 auto;
                 padding-top: 3rem;
                 height: auto;
                 padding-bottom:3rem ;
             }
             h2{
                 text-align: center;
                 font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                 font-size: 2rem;
             }
             .Input-div{
                 width: 90%;
                 height: auto;
                 border: 0px solid rgb(99, 99, 99);
                 margin: 0 auto;

             }
             .inp{
                 width: 100%;
                 padding-top: 0.3rem;
                 padding-bottom: 0.3rem;
                 padding-left: 0.5rem;
                 font-size: 1.5rem;
                 margin-top: 2rem;
             }
             .btn-save{
                 display: block;
                 width: 60%;
                 margin: 3rem auto;
                 font-size: 1.4rem;
                 
             }
             .load-div{
                 width: 5rem;
                 height: 5rem;
                 border: 0px solid red;
                 margin: 3rem auto;
                 background-image: url(../../site_image/load.gif);
                 background-size: 100% 100%;
             }
             @media screen and (max-width:1000px){
                body{
                    padding-bottom: 30vw;
                }
                 h1{
                     font-size: 10vw;
                     margin-top: 3rem;
                     margin-bottom: 10vw;
                     text-align: center;
                 }
                 .form-div{
                     border: 1px solid rgb(122, 122, 122);
                     width:98% ;
                     margin: 0 auto;
                     padding-top: 20vw;
                     height: auto;
                     padding-bottom:15vw ;
                 }
                 h2{
                     text-align: center;
                     font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                     font-size: 6vw;
                 }
                 .Input-div{
                     width: 90%;
                     height: auto;
                     border: 0px solid red;
                     margin: 10vw auto;
    
                 }
                 .inp{
                     width: 100%;
                     padding-top: 1vw;
                     padding-bottom: 1vw;
                     padding-left: 1vw;
                     font-size: 6vw;
                     border: 1px solid rgb(184, 184, 184);
                     margin-top: 6vw;
                 }
                 .btn-save{
                     display: block;
                     width: 70%;
                     margin: 3rem auto;
                     font-size: 6vw;
                     
                 }
                 .load-div{
                    width: 10vw;
                    height: 10vw;
                    border: 0px solid red;
                    margin: 3rem auto;
                    background-image: url(../../site_image/load.gif);
                    background-size: 100% 100%;
                }
                 
             }
        </style>
    </head>
    <body>
        <h1>
            Shadiviah.in
        </h1>
        <div class="form-div">
           <h2>
               Embeded Location Url
           </h2>
           <form action="" method="POST">
           <div class="Input-div">
               <input type="text" autocomplete="off" placeholder="URL IFRAME" name="url" class="inp" value="leave_me_as_it_is">
           </div>
           <input type="submit" value="SAVE" class="btn btn-success btn-save">
           </form>
        </div>
        <div class="load-div">
            
        </div>



        
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>