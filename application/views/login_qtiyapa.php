<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Welcome to P-Club</title>
    <style>#canvas { background:url(img/new5.jpg) }</style>  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
    <link rel="stylesheet" href="<?php echo base_url()  ?>css/normalize.css" />
    <link rel="stylesheet" href="<?php echo base_url()  ?>css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url()  ?>css/index.css" />
    <!-- If you are using the gem version, you need this only -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/app.css" />

    <script src="<?php echo base_url()  ?>js/vendor/custom.modernizr.js"></script>
    <script src="<?php echo base_url()  ?>js/vendor/jquery.js"></script>
    <script src="<?php echo base_url()  ?>js/test.js"></script>
  </head>

  <body>
    <canvas id="canvas" style="position:absolute; left:0px; top:0px" height="0px" width="0px";opacity:0.5;></canvas>
     <script src="<?php echo base_url()  ?>js/test.js"></script>
     <?php
      $log="wrong";
      if($status == $log )
        {
          echo "<div data-alert class='alert-box alert radius'>";
          echo "Wrong username or password";
          echo "<a href='#' class='close'>&times;</a></div>";
        }
     ?>
    <div class="row" style="margin : 0">
      <div class="large-6 columns"><h1 class="subheader" id="subheader">P-CLUB</h1></div>
      <div class="large-6 columns">
        <ul class="inline-list" style="float:right;">
          <li>
            <?php
              $log = "logout";
              $log1="login";
              $log2 ="wrong";
              if($status==$log || $status == $log2 )
                  echo "  <a href='#' data-reveal-id='myModal'>
                          <font class='font' color='#FCFF00' style='opacity:0.6'>
                          Login</font></a></li>";
              else {
                echo "<a href='#' data-reveal-id='username'>";
                echo  "<font class='font' color='#FCFF00' style='opacity:0.6'>
                      $username</font> </a></li>";
                }
            ?> 
          <li>
            <?php
              $log = "logout";
              $log1="login";
              $log2 ="wrong";
              if($status==$log || $status == $log2)
                echo "  <a href='#' data-reveal-id='myModal1'>
                <font class='font' color='#FCFF00' style='opacity:0.6'>Register
                </font></a></li>";
              else {
                echo "<a href='http://localhost/ci/home/logout'>
                <font class='font' color='#FCFF00' style='opacity:0.6'>Logout
                </font></a></li>";
              }
            ?>
        </ul>
      </div>
    </div>

   <script>
      document.write('<script src=' +
      ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
      '.js><\/script>')
    </script>
    <script src="<?php echo base_url() ;?>js/foundation/foundation.js"></script>
    <script src="<?php echo base_url() ;?>js/foundation/foundation.alerts.js"></script>
    <script src="<?php echo base_url() ;?>js/foundation/foundation.clearing.js"></script>
    <script src="<?php echo base_url() ;?>js/foundation/foundation.cookie.js"></script>
    <script src="<?php echo base_url() ;?>js/foundation/foundation.dropdown.js"></script>
    <script src="<?php echo base_url() ;?>js/foundation/foundation.forms.js"></script>
    <script src="<?php echo base_url() ;?>js/foundation/foundation.joyride.js"></script>
    <script src="<?php echo base_url() ;?>js/foundation/foundation.magellan.js"></script>
    <script src="<?php echo base_url() ;?>js/foundation/foundation.orbit.js"></script>
    <script src="<?php echo base_url() ;?>js/foundation/foundation.placeholder.js"></script>
    <script src="<?php echo base_url() ;?>js/foundation/foundation.reveal.js"></script>
    <script src="<?php echo base_url() ;?>js/foundation/foundation.section.js"></script>
    <script src="<?php echo base_url() ;?>js/foundation/foundation.tooltips.js"></script>
    <script src="<?php echo base_url() ;?>js/foundation/foundation.topbar.js"></script>
    <script src="<?php echo base_url() ;?>js/foundation/foundation.interchange.js"></script>
    <script>
      $(document).foundation();
    </script>

    <script>
      $('body').css('background-image', 'url(<?php echo base_url() ?>img/new.png")');
      function validateLoginForm()
      {
        var x=document.forms['loginForm']['username'].value;
        var flag=true;
        if(x==null||x=="") 
        {
          $("#loginform_username").addClass("error");
          flag=false;
        }
        else $("#loginform_username").removeClass("error");
        x=document.forms['loginForm']['password'].value;
        if(x.length<3)
        {
          $("#loginform_pwd").addClass("error");
          flag=false;
        }
        else $("#loginform_pwd").removeClass("error");
        if(!flag) document.getElementById("login_error_info").innerHTML="* invalid form submission";
        //$("#login_error_info").addClass("error");
        return flag;
      }
      function validateSignUpForm()
      {
        var x=document.forms['signupForm']['username'].value;
        var flag=true;
        if(x==null||x=="") 
        {
          $("#signupform_username").addClass("error");
          flag=false;
        }
        else $("#signupform_username").removeClass("error");

        x=document.forms['signupForm']['name'].value;
        if(x==null||x=="") 
        {
          $("#signupform_name").addClass("error");
          flag=false;
        }
        else $("#signupform_name").removeClass("error");

        x=document.forms['signupForm']['password'].value;
        if(x.length<6)
        {
          $("#signupform_pwd").addClass("error");
          flag=false;
        }
        else $("#signupform_pwd").removeClass("error");

         x=document.forms['signupForm']['emailid'].value;
        if(x==null || x=="")
        {
          $("#signupform_email").addClass("error");
          flag=false;
        }
        else $("#signupform_email").removeClass("error");
        if(!flag) document.getElementById("signup_error_info").innerHTML="* invalid form submission";
        //$("#login_error_info").addClass("error");
        return flag;
      }
      $(document).ready(function(){
        var x=document.getElementById('url');
        x.value=location;
        var x=document.getElementById('url1');
        x.value=location;
      });
    </script>

    <div id="myModal" class="reveal-modal">
      <form name="loginForm" action="http://localhost/ci/verifylogin" method="POST" onsubmit="return validateLoginForm()">
        <fieldset>
          <legend>Login to continue</legend>

              <div class="row">
                <div class="large-6 columns">
                    <label>Login Id</label>
                    <input id="loginform_username" type="text" placeholder="Enter login Id" name="username">
                </div>
                <div  class="large-6 columns">
                    <img src="<?php echo base_url(); ?>img/login.gif">
                </div>
              </div>

              <div class="row">
                <div class="large-6 columns">
                    <label>Password</label>
                    <input id= "loginform_pwd" type="password" placeholder="Enter your password" name="password">
                </div>
              </div>


              <input id= "url" value="url" name="url" style="display:none;">
               

          <button id="loginn_button">Login</button>
          <font color="red"> <div id="login_error_info" class="error"></div></font>
        </fieldset>
      </form>
      <a class="close-reveal-modal">&#215;</a>
    </div>

    <div id="myModal1" class="reveal-modal">
      <form name="signupForm" action="PHP/register.php"  method= "POST" onsubmit="return validateSignUpForm()">
        <fieldset>
          <legend>Register Here</legend>
          <div class="row">
            <div class="large-6 columns">
              <label>Login Id</label>
              <input id="signupform_username" type="text" placeholder="Enter login Id" name="username">
            </div>
          </div>

          <div class="row">
            <div class="large-6 columns">
              <label>Name</label>
              <input id="signupform_name" type="text" placeholder="Enter Your Name" name="name">
            </div>
          </div>

          <div class="row">
            <div class="large-6 columns">
              <label>Password(minimum 6 characters)</label>
              <input id="signupform_pwd" type="password" placeholder="Enter your password" name="password">
            </div>
          </div>

          <div class="row">
            <div class="large-6 columns">
              <label>Email Id</label>
              <input id="signupform_email" type="email" placeholder="Enter your email id" name="emailid">
            </div>
          </div>

          <input id= "url1" value="url" name="url" style="display:none;">

          <button>Register</button>
          <font color="red"> <div id="signup_error_info" class="error"></div></font>
        </fieldset>
      </form>
      <a class="close-reveal-modal">&#215;</a>
    </div>
