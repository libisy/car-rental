<div class="header">
  <div class="banner">
    <div class="title-holder">
      <h1 class="title">ONLINE VEHICLE RENTING</h1>
      <span class="slogan text-right row">"travelling has never been so fun"</span>
    </div>
    <div class ="logo">
    </div>
  </div>
  <div class="clearfix">
  </div>
 <div class="login">
 <h3><a href="loginform.php">login</a>&nbsp; <a href="signupform.php">Signup</a></h3>
 </div>
 <div class ="menu">
   <ul>
     <li
        <?php if ($active_page == "home") {?>
          class = "underline"
        <?php } ?>
     ><b><a href="index.php">Home</a></b></li>
     <li
        <?php if ($active_page == "about") {?>
          class = "underline"
        <?php } ?>
        ><b><a href="about.php">About us</a></b></li>
         <li
        <?php if ($active_page == "contact") {?>
          class = "underline"
        <?php } ?>
     ><b><a href ="contact.php">Contact us</a></b></li>
     <li
        <?php if ($active_page == "services") {?>
          class = "underline"
        <?php } ?>
     ><b><a href="services.php">Services</a></b></li>
     <li
        <?php if ($active_page == "admin") {?>
          class = "underline"
        <?php } ?>
     ><b><a href="admin.php">Admin</a></b></li>
   </ul>
 </div>
</div>
