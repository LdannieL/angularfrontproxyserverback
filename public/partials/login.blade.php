<div class="title">
        <div class="logo"> {{ HTML::image('images/Valor.png') }}</div>
        <p>Meet the people you're interested in meeting</p>
    </div>

    <div class="login-form">
    	<p>Log in<br/>to your account</p>
        {{ Form::open(array('url'=>'#', 'method'=>'post')) }}
            <div class="input-field">
                <span class="fa fa-envelope"></span>
                {{ Form::text('text', $value = null, $attributes = ['placeholder'=>'E-mail address', 'ng-model' => 'userCredentials.admin_id']) }}
                <!-- @{{ userCredentials.admin_id }} -->
                <!-- {{ Form::email('email', $value = null, $attributes = array('placeholder'=>'E-mail address')) }} -->
            </div>
            <div class="input-field">
                <span class="fa fa-lock"></span>
                {{ Form::password('password', $attributes = ['placeholder'=>'Password', 'ng-model' => 'userCredentials.password']) }}
                <!-- @{{ userCredentials.password }} -->
                <!-- {{ Form::password('password', $value = null, $attributes=array('placeholder'=>'Password')) }} -->
            </div>
            <div class="text-link">
                <a href='#' id="moveToForg">Forgot your pasword?</a>
            </div>
            {{ Form::submit('SIGN IN') }}
            {{ Form::close() }}
    		<div class="text-link">
                <a ng-href="/dashboard" ng-click="loginTry(userCredentials)">Login</a>
    			<!-- <a href="#">Login</a> -->
    		</div>
   
    
        <div class="login-form-forg">
            <p>Forgot Your<br/>Password?</p>
            {{ Form::open(array('url'=>'#', 'method'=>'post')) }}
                <div class="input-field">
                    <div class="describe-text">Enter your email address to reset your password.<br/>You may need to check your spam folder.</div>
                </div>
                <div class="input-field forg">
                    <span class="fa fa-envelope forg-icon"></span>
                    {{ Form::email('email', $value = null, $attributes = array('class'=>'forg-email','placeholder'=>'Enter your e-mail address')) }}
                     {{ Form::submit('SUBMIT', array('class' => 'forg-pass')) }} 
                    {{ Form::close() }}
                </div>
            </form>
        </div>
    </div>