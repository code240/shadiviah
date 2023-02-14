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
    <link rel="stylesheet" href="portalcss/changepasscode.css">
    <link rel="stylesheet" href="portalcss/formone.css">

    <title>Register Wedding</title>
    <style>
        body{
            padding-bottom:10rem;
        }
    </style>
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
        Register a wedding!!!
    </h1>    
</center>
<div  class="container-fluid form_div">
  <form action="php/registerwedding.php" method="POST" onsubmit="return formvalidation();" name="form">
     <label class="label_wedding_of" for="boyname">
     Wedding is of :
     </label>
     <label class="inline-boy-label" for="e">Boy</label>
     <input type="radio" id="e" value="boy" name="weddingof">
     <label for="f" class="inline-girl-label">Girl</label>
     <input id="f" type="radio" value="girl" name="weddingof">
<br>
     <label class="label_one" for="boyname">
         Name of boy:
     </label>
     <input type="text" autocomplete="off" name="boyname" id="boyname" placeholder="Name of Boy" class="boyname"><br>
     
     <label class="label_one" for="i2">
       Name of girl:
   </label>
   <input type="text" autocomplete="off"  name="girlname" id="i2" placeholder="Name of Girl" class="boyname"><br>
   
   <label class="label_one" for="i3">  
       Father's Name of boy:  &#160;
   </label>
   <input type="text" autocomplete="off"  name="boyfather" id="i3" placeholder="Father's name (boy)" class="boyname"><br>

   
   <label class="label_one" for="i4">
       Mother's Name of boy:
   </label>
   <input type="text" autocomplete="off"  name="boymother" id="i4" placeholder="Mother's name (boy)" class="boyname"><br>


   
   <label class="label_one" for="i5">
       Father's Name of girl: &#160;
   </label>
   <input type="text" autocomplete="off"  name="girlfather" id="i5" placeholder="Father's name (girl)" class="boyname"><br>

   
   <label class="label_one" for="i6">
       Mother's Name of girl:
   </label>
   <input type="text" autocomplete="off"  name="girlmother" id="i6" placeholder="Mother's name (girl)" class="boyname"><br>

   
   <label class="label_one" for="i7">
       Address of boy:
   </label>
   <input type="text" autocomplete="off"  name="boyaddress" id="i7" placeholder="Address of boy" class="boyname"><br>

   
   <label class="label_one" for="i8">
      Address of girl: 
   </label>
   <input type="text" autocomplete="off"  name="girladdress" id="i8" placeholder="Address of girl" class="boyname"><br>

  <label class="label_one" for="ph">
      Phone Number: 
   </label>
  <input type="Number" autocomplete="off"  name="phonenumber" id="ph" placeholder="Mobile Number" class="boyname"><br>

   
   <label class="label_one" for="i9">
    Date of lagan cermony: 
   </label>
   <input type="date"   name="lagandate" id="i9" placeholder="Address of girl" class="boyname date_input"><br>

   <label class="label_one" for="i10">
      Wedding Date: 
   </label>
   <input type="date"  name="baratdate" id="i10" placeholder="Address of girl" class="boyname date_input"><br>




   <label class="label_one" for="x">
     Barat Address :
    </label>
    
    <input type="text" id="x" placeholder="Barat Address" class="boyname" name="weddingvenue">
   
  
<br>
   <label class="label_one" for="i11">
      Lagan address: 
   </label>
   <input type="text"  autocomplete="off"  name="programaddress" id="i11" placeholder="lagan Address" class="boyname"><br>


  <label class="label_one" for="i12">
      Please select theme : 
   </label>
    <select name="theme" id="i12" class="select_input">
       <option value="any">Any</option>
       <!-- <optgroup label="SECOND"> -->
       <option value="1-1">1-1</option>
       <option value="2-1">2-1</option>
       <option value="3-1">3-1</option>
       <option value="4-1">4-1</option>
       <!-- <option value="5-1">5-1</option> -->
    </select>


   <input type="submit" value="Next" id="submit" class="btn btn-primary submit_btn">
  </form>
</div>

<script>
  function formvalidation(){
    document.getElementById('submit').disabled=true;
      var weddingof = document.forms['form']['weddingof'].value;    
      var boyname = document.forms['form']['boyname'].value;
      var girlname = document.forms['form']['girlname'].value;
      var boyfather = document.forms['form']['boyfather'].value;
      var boymother = document.forms['form']['boymother'].value;
      var girlfather = document.forms['form']['girlfather'].value;
      var girlmother = document.forms['form']['girlmother'].value;
      var boyaddress = document.forms['form']['boyaddress'].value;
      var girladdress = document.forms['form']['girladdress'].value;
      var lagandate = document.forms['form']['lagandate'].value;
      var baratdate = document.forms['form']['baratdate'].value;
      var weddingvenue = document.forms['form']['weddingvenue'].value;
      var programaddress = document.forms['form']['programaddress'].value;
      var theme = document.forms['form']['theme'].value;
      var phonenumber = document.forms['form']['phonenumber'].value;
    
    if(weddingof==""){
        document.getElementById('submit').disabled=false;
        alert("PLESE SELECT BOY / GIRL");
        return false;
    }
    
       
    if(boyname==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE ENTER NAME OF BOY");
        return false;
    }
    if(girlname==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE ENTER NAME OF GIRL");
        return false;
    }
    if(boyfather==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE ENTER FATHER'S NAME OF BOY");
        return false;
    }
    if(boymother==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE ENTER MOTHER'S NAME OF BOY");
        return false;
    }
    if(boyaddress==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE ENTER ADDRESS OF BOY");
        return false;
    }
    if(girlfather==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE ENTER FATHER'S NAME OF GIRL");
        return false;
    }
    if(girlmother==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE ENTER MOTHER'S NAME OF GIRL");
        return false;
    }
    if(girladdress==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE ENTER ADDRESS OF GIRL");
        return false;
    }
    if(phonenumber==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE ENTER PHONE NUMBER");
        return false;
    }
    if(lagandate==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE ENTER LAGAN DATE");
        return false;
    }
    if(baratdate==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE ENTER BARAT DATE");
        return false;
    }
    if(weddingvenue==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE ENTER WEDDING VENUE");
        return false;
    }

    if(programaddress==""){
        document.getElementById('submit').disabled=false;
        alert("PLEASE ENTER PROGRAM ADDRESS");
        return false;
    }
    if(theme==""){
      document.getElementById('submit').disabled=false;
      alert("PLEASE SELECT THEME");
      return false;
  }
    else{
        return true;
    }
    return true;
  }

</script>
<script> 
    function displayRadioValue() { 
        var ele = document.getElementsByName('weddingof'); 
        alert(ele);
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