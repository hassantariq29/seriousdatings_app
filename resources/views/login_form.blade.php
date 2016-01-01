{!! Form::open(array('url' => 'login')) !!}
          <div class="input-cols">
            <input type="text" name="username" id="username" placeholder="User Name">
            <a href="#" class="input-icon"><i class="user-icon"></i></a> </div>
          <div class="input-cols">
            <input type="password" name="password" id="password" placeholder="Password">
            <a href="#" class="input-icon"><i class="password-icon"></i></a> </div>
          <input type="submit" value="Login" class="button">
          <input type="submit" value="sign up" class="button signup" id="signup">
          <div class="row">
            <div class="input-cols">
            	 <input type="checkbox" id="remember" name="check">
                 <label for="remember"><span></span>Remember me!</label>
            </div>
            <div class="input-cols"> <a href="#">Forgot Password ? </a> </div>
          </div>
       {!! Form::close() !!}