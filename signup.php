<?php
  
  if(isset($_POST['submit'])){

    if(empty($_POST['email']) OR empty($_POST[''])){
      $error = "Email is required";
    }
  }

  ?>

<?php require "header&footer/header.php"; ?>




    <div class="signin">
      <div class="back-img">
        <div class="sign-in-text">
          <h2 class="active">Sign In</h2>
          <h2 class="nonactive">Sign Up</h2>
        </div><!--/.sign-in-text-->
        <div class="layer">
        </div><!--/.layer-->
        <p class="point">&#9650;</p>
      </div><!--/.back-img-->
      <div class="form-section">
       
        <form action="#">
          <!--Email-->
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input name='email' class="mdl-textfield__input" type="email" id="sample3">
            <label class="mdl-textfield__label" for="sample3">Email</label>
            <!-- <span class="mdl-textfield__error">Enter a correct Email</span> -->
          </div>
          <br/>
          <br/>
          <!--Password-->
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input pattern=".{8,}" class="mdl-textfield__input" type="password" id="sample3">
            <label class="mdl-textfield__label" for="sample3">Password</label>
            <!-- <span class="mdl-textfield__error">Minimum 8 characters</span> -->
          </div>
          <br/>
          <p class="forgot-text">Forgot Password ?</p>
          <!--CheckBox-->
          <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
          <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked>
          <span class="keep-text mdl-checkbox__label">Keep me Signed In</span>
        </label>
        </form>
      </div><!--/.form-section-->
      
      <a href="./index.html"><button name='submit' class="sign-in-btn mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--raised mdl-button--colored">
        Sign In
      </button><!--/button--></a>
   </div><!--/.signin-->
  </body>
</html>