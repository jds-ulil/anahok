    
    <div class="container col-md-3 col-md-offset-4">
        <?php echo Formbootsrap::open('',array(
                                    'method' => 'POST',
                                    'class'=>'form-signin',
                                    'role'=>"form",
                                )); ?>        
          <h2 class="form-signin-heading">Please sign in</h2>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input name="username" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <?php echo Formbootsrap::inputPasswordBt_req('password'); ?>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="remember" value="remember-me"> Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <?php echo Formbootsrap::close(); ?>
        
    </div> <!-- /container -->