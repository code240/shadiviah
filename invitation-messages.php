<?php
error_reporting(0);
session_start();
if(!$_SESSION['phone'] || !$_SESSION['wedscode']){
   header('location:Invitation-Shadiviah');
   exit;
}
include 'source-php/invite-msg-php.php';

$msg1 = "We start a new journey of our life together👩‍❤️‍👨 Your presence at our wedding means a lot to all of us 🙋‍♀️ Your presence will be a blessing to us 😃. Please let us have the honour to host you on this beautiful celebrations of love and loyalty 🎊🎆 We warmly invite you and your family to join us this beautiful occasion♥️🎁. Visit our shadiviah link for more info : "."http://www.shadiviah.in/Wedding/".$pagename."?invite=".$encryption;
$msg2 = "My Dearest Friend!🥰 I Could Not Forget About You🙆🏻‍♀️ On My Wedding Day👩‍❤️‍👨. I Sincerely Hope That You  Will Give Me The Honor Of Attending💃🕺 My Wedding✨. Let Us Unite🍻 Once Again As Two Loving Souls 🎻Of Children Creates An Everlasting Bond 💝Of Marriage💒💒. Your Presence🤲 Will Make This Event🌃🌌 More Special🥳! Please Come 🤩 And Join🤝🤝Us. For Ⓜ️ More Details🕵️Check The Link Given Below🔽: "."http://www.shadiviah.in/Wedding/".$pagename."?invite=".$encryption;
$msg3 = "Our marriage marks the beginning of a new chapter in our lives ♥️Only with the participation of our beloved friends🤝would this event become complete 👩‍❤️‍💋‍👨You are highely encouraged to attend my wholesome marriage 👰Our marriage ceremony 💍would be quite incomplete without them ♥️We bring glad tiding grace us with your presence 🙋‍♀️at our marriage ceremony ♥️💍. Kindly visit our shadiviah link:"."http://www.shadiviah.in/Wedding/".$pagename."?invite=".$encryption;
$msg4 = "With a lot of pleasure we would like to invite you to our wedding ceremony 💍👰And bless us with your presence 🙋‍♀️ We hope that you will make it to our special day and see the strengthening of our unbreakable union in person 🤝♥️I would love to invite you to the greatest event of our life 👨‍❤️‍👨which is happening quite soon 🙌 We love you and we are waiting for you! 👩‍❤️‍💋‍👨❗. Kindly Visit our shadiviah link for more info:"."http://www.shadiviah.in/Wedding/".$pagename."?invite=".$encryption;
$msg5 = "We are happy to announce that we would like to make our dream 💫of being eternally together come true,and become tied with the eternal promise 🤞We invite you to our amazing wedding ceremony 💍👰and join us in our happy emotion and the joy 🎊of your presence on our special day 💫We are waiting and exicted to see you there❗♥️. Kindly visit our shadiviah link for more info, This link is specially for you: "."http://www.shadiviah.in/Wedding/".$pagename."?invite=".$encryption;
$msg6 = "This Is Not Just A Day To Have The Most Delicious Food🍝🧆, Have Fun And Wear The Newest Dresses👗. This Is The Day When We Take The Brand New Step In Our 👩‍❤️‍💋‍👨Relationship👩‍❤️‍👨, Which Will Be The First Day Of Our Married🌹🌹 Life. And This Day Will Only Be Complete If My Wonderful Friends And Relatives👨‍👩‍👧‍👧 Are There To See Me Tying The Knot With My Love👫. So, We Want To Invite You And Your Family To Our Festive Day💥💥! For More Details 🥰Visit The Link Given Below⬇️ : "."http://www.shadiviah.in/Wedding/".$pagename."?invite=".$encryption;
$msg7 = "Dear Colleagues💁🏻‍♂️🙋🏻! I Would Appreciate🌹Your Presence At My Special Event🎆 My Wedding 👩‍❤️‍💋‍👨 With The Person I Love And Treasure. Without you 🙆🏻‍♀️ , The Wedding Ceremony Will Not Be The Same. I Will Be Extremely Grateful💞 If You Decide To Come And Celebrate🥳 This Happy Occasion Together With Me👩‍❤️‍👨! For More Details🔍 Open The Link Given Below:"."http://www.shadiviah.in/Wedding/".$pagename."?invite=".$encryption;

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="site_image/love.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootcss/animate.css">
    <link rel="stylesheet" href="bootcss/bootstrap.min.css"/>
    <link rel="stylesheet" href="bootcss/bootstrap.css"/>
    <link rel="stylesheet" href="mycss/index_css.css"/>
    <link rel="stylesheet" href="mycss/about_css.css"/>
    <link rel="stylesheet" href="mycss/contact_css.css"/>
    <link rel="stylesheet" href="mycss/invitations_css.css"/>
    <link rel="stylesheet" href="mycss/wedding_select_css.css"/>
    <link rel="stylesheet" href="mycss/invitation_messages_css.css"/>
    <title>Invitation Messages</title>
    <meta name="keywords" content="Invitation-messages,Shadiviah">
    <meta name="description" content="Shadiviah: Make your Wedding memorable. Online Invitations in wedding, Register Wedding online, Get a beautiful Theme, Get an e-card, Share your wedding clips, Share Your wedding album and much more.">
    <meta name="author" content="Shadiviah">
    <!-- <meta http-equiv="refresh" content="30"> -->
  </head>
  <body>
<!-- ############################################################################ -->

<div class="container-fluid top">
   

</div>

<header class="container-fluid header header_pc" >
  <div class="container-fluid header-div-row row" >
      <div class="col-lg-3 header-row-col-1" >
          <a href="Home-Shadiviah" style="text-decoration:none;"><img src="site_image/shadi_viah_logo.png" alt="shadi-viah-logo"  style="cursor:pointer;"></a>
     </div>
     <div class="col-xl-1 header-row-gap"></div>
     <div class="col-xl-8 header-row-col-2">

      <nav class="navbar navbar-expand-lg navbar-light options">
          <a class="navbar-brand" href="#"><span id="magic-nav-text">select category -></span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse option2 bgpink" id="navbarNavDropdown">
        
            <ul class="navbar-nav pinkbg">
              <li class="nav-item navlisthover" >
                <a class="nav-link buttons" href="Home-Shadiviah"><span class="clrwhite" >Home</span></a>
              </li>
              <li class="nav-item navlisthover">
                <a class="nav-link buttons btn1" href="Invitation-Shadiviah"><span class="clrwhite" >Invite-links</span></a>
              </li>
              <li class="nav-item navlisthover">
                <a class="nav-link buttons" href="Themes-Shadiviah"><span class="clrwhite">Themes</span></a>
              </li> 
              <li class="nav-item navlisthover">
                <a class="nav-link  buttons" href="Mediator-Shadiviah"><span class="clrwhite">Mediators</span></a>
              </li>
              <li class="nav-item navlisthover" >
                <a  class="nav-link buttons" href="Signin"><span class="clrwhite"  style="font-weight:600;color:#d1007a;">Signin</span></a>
              </li>
              
            </ul>
          </div>
        </nav>
     </div>
  </div>
</header>
<!-- ###################################################################################### -->
<!-- ###################################################################################### -->
<!-- ###################################################################################### -->
<!-- ############################ PHONE HEADER STARTS ##################################### -->
<!-- ###################################################################################### -->
<!-- ###################################################################################### -->
<!-- ###################################################################################### -->
<header class="container-fluid header_phone">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <hr style="margin:0;">
  <a href="">Home</a>
  <hr style="margin:0;">
  <a href="Invitation-Shadiviah">Invitation Links</a>
  <hr style="margin:0;">
  <a href="Themes-Shadiviah">Themes</a>
  <hr style="margin:0;">
  <a href="Mediator-Shadiviah">Mediators</a>
  <hr style="margin:0;">
  <a href="Signin">Signin</a>
  <hr style="margin:0;">
  <a href="Contact-Shadiviah">Contact us</a>
  <hr style="margin:0;">

</div>



<div class="container-fluid row inside_header_mobi">
  <div class="col-3 nav_icon_div">
     <img src="site_image/navbar_shadiviah.png" onclick="openNav()" alt="navbar_shadiviah">
  </div>
  <div class="col-9 logo_div_mobi">
     <img src="site_image/shadi_viah_logo.png" alt="shadiviah.in_official-logo">
  </div>
</div>
    
</header>
<!-- ************************************* ************************ -->

<div class="container-fluid image_shower">
  <h6 class="about_us_heading6">Inviting:<?php echo " ".$inv_prsn; ?></h6>
  <span class="span_about_column">Shadiviah.in / Invitations</span>
</div>

<!-- ############################################################################ -->

<div class="container-fluid our_card_div">
   <h5 class="try_our_heading">
      Try our e-card image with the invitation link and message.
   </h5>
   <center>
   <span class="aware_for_use_text">
         You can use our ecard  ( generated by shadiviah ) with your message and link which look more pretty.
   </span>
   
   <a style="text-decoration:none;" href="Shadiviah-E-card">
   <button class="btn btn-success our_btn">View Image - HD</button>
   </a>
   <span class="aware_for_use_text notice_span_new">
    (Copy the below message or link and share with this ecard image)
</span>
</center>
</div>


<div class="container-fluid url_main_div">
  <h5 class="url_div_heading">
    Use this link to invite <span style="color:rgb(255, 31, 106);"><?php echo " ".$inv_prsn; ?></span>
 </h5>
 <center>
 <table class="table_margin">
   <tr>
     <td>
        <div class="container-fluid url_saver text-truncate" id="text1">
            http://www.shadiviah.in/Wedding/<?php echo $pagename; ?>?invite=<?php echo $encryption; ?>
        </div>
     </td>
     <td>
     
         <div onclick="copy('#text1');" role="button" class="copyButton url_copy_btn_div" id="copyButton1">
         <span onclick="" class="copybtnspan" class="copy_span">
          COPY
         </span>
         
        </div>
     </td>
</tr>
 </table>

 <span id="copied" class="alert">
  COPIED!!!!
 </span>
 </center>
</div>




<div class="container-fluid scroll_div">
    <table><tr>
        <td>
            <div class="mini_message_container_div">
               <div class="container-fluid upperpart">
               <span class="messages"  id="msg1">
               We start a new journey of our life together👩‍❤️‍👨 Your presence at our wedding means a lot to all of us 🙋‍♀️ Your presence will be a blessing to us 😃. Please let us have the honour to host you on this beautiful celebrations of love and loyalty 🎊🎆 We warmly invite you and your family to join us this beautiful occasion♥️🎁. Visit our shadiviah link for more info :  <span class="link-color"> http://www.shadiviah.in/Wedding/<?php echo $pagename; ?>?invite=<?php echo $encryption; ?> </span>
                </span>
               </div>
               <div class="container-fluid lowerpart">
                  <table><tr><td>
                      <div class="share_1"></div>
                    </td><td>
                        <div class="share_2">
                        <?php
                           echo<<<share
                           <a href="whatsapp://send?text=$msg1" style="text-decoration:none;"><img src="site_image/whatsapp.png" alt="shadiviah.in"></a>
share;
                           ?>
                        </div>
                    </td><td>
                        <div class="share_2">
                            <img src="site_image/copya.png" alt="shadiviah.in" onclick="copy2('#msg1');">
                        </div>
                    </td></tr></table>  
            </div>
            </div>
        </td>
        <td>
            <div class="mini_message_container_div">
              <div class="container-fluid upperpart">
              <span class="messages" id="msg2">
              My Dearest Friend!🥰 I Could Not Forget About You🙆🏻‍♀️ On My Wedding Day👩‍❤️‍👨. I Sincerely Hope That You  Will Give Me The Honor Of Attending💃🕺 My Wedding✨. Let Us Unite🍻 Once Again As Two Loving Souls 🎻Of Children Creates An Everlasting Bond 💝Of Marriage💒💒. Your Presence🤲 Will Make This Event🌃🌌 More Special🥳! Please Come 🤩 And Join🤝🤝Us. For Ⓜ️ More Details🕵️Check The Link Given Below🔽:   <span class="link-color"> http://www.shadiviah.in/Wedding/<?php echo $pagename; ?>?invite=<?php echo $encryption; ?> </span>
                </span>
              </div>
              <div class="container-fluid lowerpart">
                 <table><tr><td>
                     <div class="share_1"></div>
                   </td><td>
                       <div class="share_2">
                       <?php
                           echo<<<share
                           <a href="whatsapp://send?text=$msg2" style="text-decoration:none;"><img src="site_image/whatsapp.png" alt="shadiviah.in"></a>
share;
                           ?>
                       </div>
                   </td><td>
                       <div class="share_2">
                           <img src="site_image/copya.png" alt="shadiviah.in" onclick="copy2('#msg2');">
                       </div>
                   </td></tr></table>  
           </div>
            </div>
        </td>
        <td>
            <div class="mini_message_container_div">
              <div class="container-fluid upperpart">
              <span class="messages" id="msg3">
              Our marriage marks the beginning of a new chapter in our lives ♥️Only with the participation of our beloved friends🤝would this event become complete 👩‍❤️‍💋‍👨You are highely encouraged to attend my wholesome marriage 👰Our marriage ceremony 💍would be quite incomplete without them ♥️We bring glad tiding grace us with your presence 🙋‍♀️at our marriage ceremony ♥️💍. Kindly visit our shadiviah link: <span class="link-color"> http://www.shadiviah.in/Wedding/<?php echo $pagename; ?>?invite=<?php echo $encryption; ?> </span>
                </span>
              </div>
              <div class="container-fluid lowerpart">
                 <table><tr><td>
                     <div class="share_1"></div>
                   </td><td>
                       <div class="share_2">
                         <?php
                           echo<<<share
                           <a href="whatsapp://send?text=$msg3" style="text-decoration:none;"><img src="site_image/whatsapp.png" alt="shadiviah.in"></a>
share;
                           ?>
                       </div>
                   </td><td>
                       <div class="share_2">
                           <img src="site_image/copya.png" alt="shadiviah.in" onclick="copy2('#msg3');">
                       </div>
                   </td></tr></table>  
           </div>
            </div>
        </td>
        <td>
            <div class="mini_message_container_div">
              <div class="container-fluid upperpart">
              <span class="messages" id="msg4">
                 With a lot of pleasure we would like to invite you to our wedding ceremony 💍👰And bless us with your presence 🙋‍♀️ We hope that you will make it to our special day and see the strengthening of our unbreakable union in person 🤝♥️I would love to invite you to the greatest event of our life 👨‍❤️‍👨which is happening quite soon 🙌 We love you and we are waiting for you! 👩‍❤️‍💋‍👨❗. Kindly Visit our shadiviah link for more info:   <span class="link-color"> http://www.shadiviah.in/Wedding/<?php echo $pagename; ?>?invite=<?php echo $encryption; ?> </span>
                </span>
              </div>
              <div class="container-fluid lowerpart">
                 <table><tr><td>
                     <div class="share_1"></div>
                   </td><td>
                       <div class="share_2">
                       <?php
                           echo<<<share
                           <a href="whatsapp://send?text=$msg4" style="text-decoration:none;"><img src="site_image/whatsapp.png" alt="shadiviah.in"></a>
share;
                           ?>
                       </div>
                   </td><td>
                       <div class="share_2">
                           <img src="site_image/copya.png" alt="shadiviah.in" onclick="copy2('#msg4');">
                       </div>
                   </td></tr></table>  
           </div>
            </div>
        
        </td>
        <td>
            <div class="mini_message_container_div">
              <div class="container-fluid upperpart">
              <span class="messages" id="msg5">
              We are happy to announce that we would like to make our dream 💫of being eternally together come true,and become tied with the eternal promise 🤞We invite you to our amazing wedding ceremony 💍👰and join us in our happy emotion and the joy 🎊of your presence on our special day 💫We are waiting and exicted to see you there❗♥️. Kindly visit our shadiviah link for more info, This link is specially for you:  <span class="link-color"> http://www.shadiviah.in/Wedding/<?php echo $pagename; ?>?invite=<?php echo $encryption; ?> </span>
                </span>
              </div>
              <div class="container-fluid lowerpart">
                 <table><tr><td>
                     <div class="share_1"></div>
                   </td><td>
                       <div class="share_2">
                       <?php
                           echo<<<share
                           <a href="whatsapp://send?text=$msg5" style="text-decoration:none;"><img src="site_image/whatsapp.png" alt="shadiviah.in"></a>
share;
                           ?>
                       </div>
                   </td><td>
                       <div class="share_2">
                           <img src="site_image/copya.png" alt="shadiviah.in" onclick="copy2('#msg5');">
                       </div>
                   </td></tr></table>  
           </div>
            </div>
        </td>
        <td>
            <div class="mini_message_container_div">
              <div class="container-fluid upperpart">
              <span class="messages" id="msg6">
              This Is Not Just A Day To Have The Most Delicious Food🍝🧆, Have Fun And Wear The Newest Dresses👗. This Is The Day When We Take The Brand New Step In Our 👩‍❤️‍💋‍👨Relationship👩‍❤️‍👨, Which Will Be The First Day Of Our Married🌹🌹 Life. And This Day Will Only Be Complete If My Wonderful Friends And Relatives👨‍👩‍👧‍👧 Are There To See Me Tying The Knot With My Love👫. So, We Want To Invite You And Your Family To Our Festive Day💥💥! For More Details 🥰Visit The Link Given Below⬇️ : <span class="link-color"> http://www.shadiviah.in/Wedding/<?php echo $pagename; ?>?invite=<?php echo $encryption; ?> </span>
                </span>
              </div>
              <div class="container-fluid lowerpart">
                 <table><tr><td>
                     <div class="share_1"></div>
                   </td><td>
                       <div class="share_2">
                       <?php
                           echo<<<share
                           <a href="whatsapp://send?text=$msg6" style="text-decoration:none;"><img src="site_image/whatsapp.png" alt="shadiviah.in"></a>
share;
                           ?>
                       </div>
                   </td><td>
                       <div class="share_2">
                           <img src="site_image/copya.png" alt="shadiviah.in" onclick="copy2('#msg6');">
                       </div>
                   </td></tr></table>  
           </div>
            </div>
        </td>
        <td>
            <div class="mini_message_container_div">
              <div class="container-fluid upperpart">
                <span class="messages" id="msg7">
                Dear Colleagues💁🏻‍♂️🙋🏻! I Would Appreciate🌹Your Presence At My Special Event🎆  My Wedding 👩‍❤️‍💋‍👨 With The Person I Love And Treasure. Without you 🙆🏻‍♀️ , The Wedding Ceremony Will Not Be The Same. I Will Be Extremely Grateful💞 If You Decide To Come And Celebrate🥳 This Happy Occasion Together With Me👩‍❤️‍👨! For More Details🔍 Open The Link Given Below:    <span class="link-color"> http://www.shadiviah.in/Wedding/<?php echo $pagename; ?>?invite=<?php echo $encryption; ?> </span>
                </span>
              </div>
              <div class="container-fluid lowerpart">
                 <table><tr><td>
                     <div class="share_1"></div>
                   </td><td>
                       <div class="share_2">
                       <?php
                           echo<<<share
                           <a href="whatsapp://send?text=$msg7" style="text-decoration:none;"><img src="site_image/whatsapp.png" alt="shadiviah.in"></a>
share;
                           ?>
                       </div>
                   </td><td>
                       <div class="share_2">
                           <img src="site_image/copya.png" alt="shadiviah.in" onclick="copy2('#msg7');">
                       </div>
                   </td></tr></table>  
           </div>
            </div>
        
        </td>
    </tr></table>
        
</div>





<div class="container-fluid how_its_work_div">
  <h5 class="How_work_heading">How its work?</h5>
  <center>
  <ul style="list-style-type:disc; ">
    <li class="li_works">
      First of all you have to select your wedding by searching it with the help of your Phone number (Which you give us while registeration of wedding), wedding code or couple names. 
    </li><br>
    <li class="li_works">
      shadiviah recomend you to search your wedding by the help of registered Phone number , It will give you the exact result.
    </li><br>
    <li class="li_works">
      After selecting your wedding you have to enter your name of friend or relative whom you want to invite.
   </li><br>
   <li class="li_works">
      After it , we provide you same messages which contain your wedding url and e-cards  and you can share it on whatsapp and other social medias.
   </li><br>
  </ul>
  </center>
</div>







<!-- <div class="null"></div> -->
<!-- ############################################################################ -->

<!-- *********************************************************************** -->
<footer class="container-fluid footer_1">
    <div class="container-fluid row main_in_footer">
       <div class="col-xl-4 col-lg-4 footer_1_col_1">
          <div class="container-fluid foot_div_1_top">
              <table>
                <tr>
                  <td>
                    <div class="img_div">
                       <img src="site_image/shadi_viah_logo_white.png" alt="shadiviah.in-official-logo" onclick="window.location.assign('Home-Shadiviah');" style="cursor:pointer;">
                    </div>
                  </td>
                </tr>
              </table>
          </div>
          <div class="container-fluid foot_div_1_mid">
            <h6 class="follow_us_h6"> Follow us:</h6>
            <table>
              <tr>
                <td>
                  <div class="icon_one">
                     <img src="site_image/facebook_shadiviah.png" alt="facebook_shadiviah" onclick="window.location.assign('https://www.facebook.com/Shadiviahin-100283152027266');" style="cursor:pointer;">
                  </div>
                </td>
                <td>
                  <div class="icon_two">
                      <img src="site_image/instagram_shadiviah.png" alt="twitter_shadiviah" onclick="window.location.assign('https://www.instagram.com/shadiviah.in');" style="cursor:pointer;">
                  </div>
                </td>
                <td>
                  <div class="icon_three">
                      <img src="site_image/youtube_shadiviah.png" alt="youtube_shadiviah" onclick="window.location.assign('https://www.youtube.com/channel/UCq1fDJfuGuesgMsm0p5ILjQ');" style="cursor:pointer;">
                  </div>
                </td>
                <td>
                  <div class="icon_four">
                      <img src="site_image/twitter_shadiviah.png" alt="twitter_shadiviah" onclick="window.location.assign('https://twitter.com/ShadiviahI');" style="cursor:pointer;">
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="container-fluid foot_div_1_low">
            <h6 class="contact_us_h6"> Contact us:</h6>
            <p class="contact_info_ptag">
              Email:<a href="mailto:contact@shadiviah.in"><span style="color:aqua;">contact@shadiviah.in</span></a><br>
              Contact: (+91) 7206865227<br>
              Instagram: <a href="https://www.instagram.com/shadiviah.in"><span style="color:aqua;">instagram.com/shadiviah.in/</span></a><br>
              Facebook: <a href="https://www.facebook.com/Shadiviahin-100283152027266"><span style="color:aqua;">facebook.com/shadiviah.in/</span></a><br>
            </p>
          </div>
       </div>
       <div class="col-xl-4 col-lg-4 footer_1_col_2">
          <h6 class="About_us_h6_footer"> About us:</h6>
          <p class="p_tag_foot_about_para">
            Shadiviah is a online platform where you can store your 
            marriage info and can invite freinds and relative online. 
            It is like a wedding e-card which can store all your wedding
            detail private like couples name , RSVP , location, dates
            and many more thing. Shadiviah is a step towards digital 
            india.<br><br>
            We provide a QR code to every user and user can print that
             QR code on there wedding card.Because the Qr code is also 
             going to store your location.
          </p>
       </div>
       <div class="col-xl-4 col-lg-4 footer_1_col_3">
          <h6 class="instant_h6_footer">Instant Links:</h6>
          <ul>
            <a href="Home-Shadiviah" class="atag">
              <li class=" li-text">Home</li>
            </a><br>
            <a href="Invitation-Shadiviah" class="atag">
              <li class=" li-text">Invite Links</li>
            </a><br>
            

            <a href="Themes-Shadiviah" class="atag">
              <li class=" li-text">Themes</li>
            </a><br>
            <a href="Mediator-Shadiviah" class="atag">
              <li class=" li-text">Mediators</li>
            </a><br>
            <a href="Signin" class="atag">
              <li class=" li-text">Signin</li>
            </a>  <br>
          </ul>
          <h6 class="other_h6_footer">Other Links:</h6>
          <ul>
            <a href="Terms-and-condition-Shadiviah" class="atag">
              <li class=" li-text">Terms and condition</li>
            </a><br>
            <a href="Help-Shadiviah" class="atag">
              <li class=" li-text">Help</li>
            </a><br>
            <a href="Contact-Shadiviah" class="atag">
              <li class=" li-text">Contact us</li>
            </a><br>
            <a href="About-Shadiviah" class="atag">
              <li class=" li-text">About us</li>
            </a><br>
                   
          </ul>
       </div>
    </div>
  </footer>
  <footer class="container-fluid footer_2">
      <center>
        <label class="copyright_text">
          <span class="cpyryt_symbol">&#169; </span>Copyrights,
           Shadiviah.in-2021, All rights reserved.
          </label>
      </center>
  </footer>
  <span id="copied2" class="alert2">
  COPIED!!!!
 </span>
  
  
  
  <!-- ############################################################################ -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
      <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        /* Set the width of the side navigation to 0 */
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
      </script>
      <script>
        function copy(copyId){
          
          var $inp=$("<input>");
          $("body").append($inp);
          $inp.val($(""+copyId).text()).select();
          document.execCommand("copy");
          $inp.remove();
          $(".alert").fadeIn(500,
          function(){
            $(".alert").fadeOut(2000);
          });

          $(document).ready(function(){
             $("#copyButton1").click(
               function(){
                 copy('#text1');
               });

          });

        }
        function copy2(copyId){
          
          var $inp=$("<input>");
          $("body").append($inp);
          $inp.val($(""+copyId).text()).select();
          document.execCommand("copy");
          $inp.remove();
          $(".alert2").fadeIn(500,
          function(){
            $(".alert2").fadeOut(2000);
          });

          $(document).ready(function(){
             $("#copyButton1").click(
               function(){
                 copy('#text1');
               });

          });

        }
        
      </script>
    </body>
  </html> 
  