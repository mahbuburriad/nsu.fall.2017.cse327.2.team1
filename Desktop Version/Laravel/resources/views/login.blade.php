<?php
require_once ('header1.php');
?>
<title>Automated Accommodation || Login & Register</title>
<?php
require_once ('header2.php');
?>
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/pagetitle.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Login/Register</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li class="active text-gray-silver">Login & Register</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#login-tab" data-toggle="tab">Login</a></li>
              <li><a href="#register-tab" data-toggle="tab">Register</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active p-15" id="login-tab">
                <h4 class="text-gray mt-0 pt-5"> Login</h4>
                <hr>
                <p>Now login </p>
                <form action="{{ route('login') }}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_username_email">Username/Email</label>
                      <input id="form_username_email" name="email" class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_password">Password</label>
                      <input id="form_password" name="password" class="form-control" type="password">
                    </div>
                  </div>
                  <div class="checkbox pull-left mt-15">
                    <label for="form_checkbox">
                      <input id="form_checkbox" name="form_checkbox" type="checkbox">
                      Remember me </label>
                  </div>
                  <div class="form-group pull-right mt-10">
                    <button type="submit" class="btn btn-dark btn-sm">Login</button>
                  </div>
                  <div class="clear text-center pt-10">
                    <a class="text-theme-colored font-weight-600 font-12" href="#">Forgot Your Password?</a>
                  </div>
                  <div class="clear text-center pt-10">
                    <a class="btn btn-dark btn-lg btn-block no-border mt-15 mb-15" href="#" data-bg-color="#3b5998">Login with facebook</a>
                    <a class="btn btn-dark btn-lg btn-block no-border" href="{{ route('social.redirect',['provider' => 'google']) }}" data-bg-color="#d34836">Login with google+</a>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade in p-15" id="register-tab">
                
                <form action="{{ route('register') }}" method="post">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <div class="icon-box mb-0 p-0">
                    <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                      <i class="pe-7s-users"></i>
                    </a>
                    <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="form_name">Name</label>
                      <input name="name" class="form-control" type="text">
                      @if ($errors->has('name'))
                            <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                            </span>
                      @endif
                    </div>
                    <div class="form-group col-md-6">
                      <label>Email Address</label>
                      <input name="email" class="form-control" type="email">
                      @if ($errors->has('email'))
                         <span class="help-block">
                         <strong>{{ $errors->first('email') }}</strong>
                         </span>
                      @endif
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_choose_username">Choose Username</label>
                      <input id="form_choose_username" name="username" class="form-control" type="text">
                      @if ($errors->has('username'))
                         <span class="help-block">
                         <strong>{{ $errors->first('username') }}</strong>
                         </span>
                      @endif
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="form_choose_password">Choose Password</label>
                      <input id="form_choose_password" name="password" class="form-control" type="password">
                      @if ($errors->has('password'))
                         <span class="help-block">
                         <strong>{{ $errors->first('password') }}</strong>
                         </span>
                      @endif
                    </div>
                    <div class="form-group col-md-6">
                      <label>Re-enter Password</label>
                      <input id="form_re_enter_password" name="repassword"  class="form-control" type="password">
                      @if ($errors->has('repassword'))
                         <span class="help-block">
                         <strong>{{ $errors->first('repassword') }}</strong>
                         </span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Register Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
<?php
require_once ('footer.php');
?>