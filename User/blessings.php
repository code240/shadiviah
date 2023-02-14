<?php
include 'php/cookie_check.php';
include 'php/viewbles.php';
?>
<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <!-- <meta http-equiv="refresh" content="30"> -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       
        <link rel="icon" href="../site_image/love.png"/>
        <link rel="stylesheet" href="../bootcss/animate.css"/>
        <link rel="stylesheet" href="../bootcss/bootstrap.min.css"/>
        <link rel="stylesheet" href="../bootcss/bootstrap.css"/>
        <link rel="stylesheet" href="css/bless-css.css"/>
        
        <title>Blessings</title>
    

  </head>
<body>

    <header class="header">
     <div class="top">
         <span class="top-span container-fluid" onclick="window.location.assign('../Home-Shadiviah');" style="cursor:pointer;">
            SHADIVIAH.IN
         </span>
     </div>
    </header>
    
    <div class="ultimate-element container-fluid">
        <h1 class="h1-face">
            <?php echo ucfirst($firstname); echo " Weds "; echo ucfirst($secondname); ?>
        </h1>
        <h5 style="text-align:center;">
          We protect you from 125+ abusive words. 80% Message containing abusive word will auto disappear. 
        </h5><br><br>
        <div class="bless-div container-fluid">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Num</th>
                    <th scope="col">Name</th>
                    <th scope="col">Blessings</th>
                    <th scope="col">Bless to</th>
                    <th scope="col">Email</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Pin</th>


                  </tr>
                </thead>
                <tbody>
                <?php
                for($i=0;$i<$s;$i++){
                echo<<<tablebless

                  <tr>
                    <th scope="row">$num[$i]</th>
                    <td>$name[$i]</td>
                    <td>$message[$i]</td>
                    <td>$blessto[$i]</td>
                    <td>$email[$i]</td>
                    <td><button class="btn btn-danger" onclick="deletebless('$blesscode[$i]');">Delete</button></td>
                    <td>$pin_btn[$i]</td>
                  </tr>
tablebless;
                }
                  ?>
                </tbody>
              </table>
        </div>
    </div>




<script>
function pin(name){
  document.getElementById("code").value = name;
  document.getElementById("pinform").submit();
 
}
function unpin(name){
  document.getElementById("uncode").value = name;
  document.getElementById("unpinform").submit();
}
function deletebless(name){
  document.getElementById("deletecode").value = name;
  document.getElementById("deleteform").submit();
}
</script>


<form action="php/pin.php" method="POST" name="pinform" id="pinform">
 <input type="hidden" name="code" id="code">
</form>

<form action="php/unpin.php" method="POST" name="unpinform" id="unpinform">
 <input type="hidden" name="code" id="uncode">
</form>

<form action="php/deletebless.php" method="POST" name="deleteform" id="deleteform">
 <input type="hidden" name="code" id="deletecode">
</form>

    <br>
    <br>
<center><h6 class="btn btn-primary" onclick="window.location.assign('../User/Pannel');">Back</h6></center>


  <div class="container-fluid null "></div>  

    
<!-- ############################################################################ -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
</html> 


