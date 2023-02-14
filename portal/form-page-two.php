<?php
error_reporting(0);

if(!isset($_COOKIE['SHADIVIAH_MEDIATOR'])){
    header('location:../Home-Shadiviah');
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../site_image/love.png"/>
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootcss/animate.css">
    <link rel="stylesheet" href="../bootcss/bootstrap.min.css"/>
    <link rel="stylesheet" href="../bootcss/bootstrap.css"/>
    <link rel="stylesheet" href="portalcss/changepasscode.css"/>
    <link rel="stylesheet" href="portalcss/formone.css"/>
    <link rel="stylesheet" href="portalcss/formtwo.css"/>

    <title>Couples Images</title>
  </head>
  <body onload="window.history.forward();">
<!-- ############################################################################ -->

<header class="container-fluid">
   <a href="" style="text-decoration: none;">
    Shadiviah.in
   </a> 
</header>
<center>
    <h1>
        Images Of Boy / Girl / Couples.
    </h1>    
</center>
<div  class="container-fluid form_div">
  <form action="php/pagetwoimage.php" method="POST" enctype="multipart/form-data" name="form" onsubmit="return validform();">

     <label class="label_two"> Image One</label>
     <input type="file" accept="image/*"  name="i1"  class="imageupload" ><br>
     <input type="text" name="c1" class="imagecaption" autocomplete="off" id="" placeholder="Image caption 1">
     
     <label class="label_two"> Image Two</label>
     <input type="file" accept="image/*"  name="i2"  class="imageupload"><br>
     <input type="text" name="c2" class="imagecaption" autocomplete="off" id="" placeholder="Image caption 2">
     
     <label class="label_two"> Image Three</label>
     <input type="file" accept="image/*"  name="i3"  class="imageupload"><br>
     <input type="text" name="c3" class="imagecaption" autocomplete="off" id="" placeholder="Image caption 3">
     
     <label class="label_two"> Image Four</label>
     <input type="file"  accept="image/*" name="i4"  class="imageupload"><br>
     <input type="text" name="c4" class="imagecaption" autocomplete="off" id="" placeholder="Image caption 4">
     

   <input type="submit" id="submit" value="Next" class="btn btn-primary submit_btn">


  </form>
  <button onclick="window.location.assign('form-page-three.php');" class="btn btn-success latter_btn">Latter</button>
</div>








<script>
  function validform(){
    document.getElementById('submit').disabled=true;
      var i1 = document.forms['form']['i1'].value;
      var i2 = document.forms['form']['i2'].value;
      var i3 = document.forms['form']['i3'].value;
      var i4 = document.forms['form']['i4'].value;
      var c1 = document.forms['form']['c1'].value;
      var c2 = document.forms['form']['c2'].value;
      var c3 = document.forms['form']['c3'].value;
      var c4 = document.forms['form']['c4'].value;
    
    if(i1!=""){
        if(c1==""){
          document.getElementById('submit').disabled=false;
          alert("PLEASE ENTER THE CAPTION FOR IMAGE");
          return false;
        }
    }
    if(i2!=""){
        if(c2==""){
          document.getElementById('submit').disabled=false;
          alert("PLEASE ENTER THE CAPTION FOR IMAGE");
          return false;
        }
    }
    if(i3!=""){
        if(c3==""){
          document.getElementById('submit').disabled=false;
          alert("PLEASE ENTER THE CAPTION FOR IMAGE");
          return false;
        }
    }
    if(i4!=""){
        if(c4==""){
          document.getElementById('submit').disabled=false;
          alert("PLEASE ENTER THE CAPTION FOR IMAGE");
          return false;
        }
    }



    if(c1!=""){
      if(i1==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE SELECT THE IMAGE FOR CAPTION ONE");
        return false;
      }
    }

    if(c2!=""){
      if(i2==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE SELECT THE IMAGE FOR CAPTION TWO");
        return false;
      }
    }

    if(c3!=""){
      if(i3==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE SELECT THE IMAGE FOR CAPTION THREE");
        return false;
      }
    }

    if(c4!=""){
      if(i4==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE SELECT THE IMAGE FOR CAPTION FOUR");
        return false;
      }
    }
    else{
        return true;
    }
    return true;
  }

</script>











<!-- ############################################################################ -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>