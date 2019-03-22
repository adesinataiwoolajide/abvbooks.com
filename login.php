<?php require('header.php'); 

?>
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="./" class="link">home</a></li>
            <li class="item-link"><span>login</span></li>
        </ul>
    </div>
    <div class="row">

        <div class=" main-content-area">
            <div class="wrap-login-item ">
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <!-- login form -->
                    <div class="login-form form-item ">
                        <form action="handlers/registration/process-login.php" name="frm-login" method="POST" >
                            <fieldset class="wrap-title">
                                <h3 class="form-title">Log in to your account</h3>
                                <h4 class="form-subtitle">Wellcome to your account.</h4>
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-login-uname">Username or Email Address:</label>
                                <input type="text" id="frm-login-uname" name="user_name" placeholder="Enter your E-mail address" required>
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-login-pass">Password:</label>
                                <input type="password" id="frm-login-pass" name="password" placeholder="************" required>
                            </fieldset>
                            
                            <fieldset class="wrap-input">
                                <label class="remember-field">
                                    <input class="frm-input " name="rememberme" id="rememberme" value="forever" type="checkbox"><span>Remember me</span>
                                </label>
                                <a class="link-function left-position" href="#" title="Forgotten password?">Forgotten password?</a>
                            </fieldset>
                            <input type="submit" class="btn btn-submit" value="Login" name="login">
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <!-- register form -->
                    <div class="register-form form-item ">
                        <form action="handlers/registration/process-registration.php" name="frm-login" method="POST" >
                            <fieldset class="wrap-title">
                                <h3 class="form-title">Creat an account</h3>
                                <h4 class="form-subtitle">Personal infomation</h4>
                            </fieldset>
                            <fieldset class="wrap-input ">
                                <label for="frm-reg-fname">Full Name*</label>
                                <input type="text" id="frm-reg-fname" name="full_name" placeholder="Enter Your Full Name" required>
                            </fieldset>
                            
                            <fieldset class="wrap-input">
                                <label for="frm-reg-email">Email Address*</label>
                                <input type="email" id="frm-reg-email" name="user_name" placeholder="Enter Your Email Address" required>
                            </fieldset>
                            <fieldset class="wrap-input item-width-in-half left-item ">
                                <label for="frm-reg-pass">Password *</label>
                                <input type="password" id="frm-reg-pass" name="password" placeholder=" Enter Your Password" required>
                            </fieldset>
                            <fieldset class="wrap-input item-width-in-half ">
                                <label for="frm-reg-cfpass">Confirm Password *</label>
                                <input type="password" id="frm-reg-cfpass" name="repeat" placeholder="Confirm Password" required>
                            </fieldset>
                            <fieldset class="wrap-functions ">
                                <label class="remember-field">
                                    <input name="newletter" id="new-letter" value="forever" type="checkbox"><span>Sign Up for Newsletter</span>
                                </label>
                            </fieldset>
                            
                            
                            <input type="submit" class="btn btn-sign" value="Register Your Account" name="register">
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <!-- login form -->
                    <div class="login-form form-item ">
                        <form action="#" name="frm-login" method="get" >
                            <fieldset class="wrap-title">
                                <h3 class="form-title">Retrieve your account</h3>
                                <h4 class="form-subtitle">Enter Your Password.</h4>
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-login-uname">Username or Email Address:</label>
                                <input type="text" id="frm-login-uname" name="username" placeholder="Enter your E-mail address">
                            </fieldset>
                           
                            <input type="submit" class="btn btn-submit" value="RETRIEVE YOUR PASSOWRD" name="">
                        </form>
                    </div>
                </div>
            </div>
        </div><!--end main products area-->

    </div><!--end row-->

</div><!--end container-->

</main>
<?php require('footer.php'); ?>