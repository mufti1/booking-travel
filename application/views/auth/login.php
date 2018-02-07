<style type="text/css">
@CHARSET "UTF-8";
/*
over-ride "Weak" message, show font in dark grey
*/

.progress-bar {
  color: #333;
} 

/*
Reference:
http://www.bootstrapzen.com/item/135/simple-login-form-logo/
*/

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  outline: none;
}

.form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  @include box-sizing(border-box);

  &:focus {
    z-index: 2;
  }
}

body {
  background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.login-form {
  margin-top: 60px;
}

form[role=login] {
  color: #5d5d5d;
  background: #f2f2f2;
  padding: 26px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
}
form[role=login] img {
  display: block;
  margin: 0 auto;
  margin-bottom: 35px;
}
form[role=login] input,
form[role=login] button {
  font-size: 18px;
  margin: 16px 0;
}
form[role=login] > div {
  text-align: center;
}

.form-links {
  text-align: center;
  margin-top: 1em;
  margin-bottom: 50px;
}
.form-links a {
  color: #fff;
}
</style>
<div class="container">

  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="<?php echo base_url('login/auth') ?>" role="login">
          <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />

          <input type="text" name="username" placeholder="Masukan Username" class="form-control input-lg">
          
          <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>  
          
          <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
            <a href="<?php echo base_url('login/register'); ?>">Create account</a> or <a href="#">reset password</a>
          </div>
          
        </form>
        
        <div class="form-links">
          <a href="/travel">www.TravelSist.com</a>
        </div>
      </section>  
    </div>

    <div class="col-md-4"></div>


  </div>
  
</div>