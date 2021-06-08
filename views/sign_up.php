<header>
	
</header>
    <h1>Sign Up</h1>
	<form action="/sign_up" method="post">

	<label for="username">Username</label>
	<input type="text" placeholder="Enter Username" id="usrn" name="username" >
	<span class="error">* <?php if(isset($params['usernameErr'])) { 
		print_r($params['usernameErr']); } ?></span><br>

	<label for="email">Email</label>
	<input id="email_box" type="text" placeholder="Enter Email Address" id="email" name="email" >
	<span class="error">* <?php if(isset($params['emailErr'])) { 
		print_r($params['emailErr']); } ?></span><br></span><br>

	<label for="password">Password</label>
	<input id="password_box" type="password" placeholder="Enter Password" id="psw" name="password">
	<span class="error">* <?php if(isset($params['passwordErr'])) { 
		print_r($params['passwordErr']); } ?></span><br>

	<button id="login_btn" type="submit">Sign Up</button><br>

	