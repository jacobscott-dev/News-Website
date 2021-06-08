<header>
	
</header>
    
    <h1>Login</h1>
   

	<form action="/login" method="post">
	<span><?php if(isset($params['invalidUser'])) { 
		print_r($params['invalidUser']); } ?></span><br>

	<label for="username">Username</label>
	<input type="text" placeholder="Enter Username" id="usrn" name="username" >
	<span class="error">* <?php if(isset($params['usernameErr'])) { 
		print_r($params['usernameErr']); } ?></span><br>

	<label for="password">Password</label>
	<input type="password" placeholder="Enter Password" id="psw" name="password">
	<span class="error">* <?php if(isset($params['passwordErr'])) { 
		print_r($params['passwordErr']); } ?></span><br>

	<button id="login_btn" type="submit">Login</button><br>

	<p>Dont have an account?</p>

	<button id="signup_btn" type="button"><a href="/sign_up">Sign up</a></button>

