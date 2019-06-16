<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/registration.css">
    <title>Sign Up</title>

	</head>
<body>

<div id="login-box">
      <div class="left-box">
        <h1> Sign Up</h1>
        <form>
        <p id="c"> </p>
          <input type="text" id="username" placeholder="Username"/>
          <input type="text" id="email" placeholder="Example@email.com"/>
          <input type="password" name="password" placeholder="Password"/>
          <input type="password" name="password2" placeholder="Retype password"/>
          <a href="add.php" target="_blank"><input type="button" value="Sign In" onclick="check()"/></a>
        </form>
		</div>
				
        <div class="right-box">
        <span class="signinwith">Sign in with<br/>Social Network</span>
        <button class="social facebook">Log in with Facebook</button>    
        <button class="social twitter">Log in with Twitter</button> 
        <button class="social google">Log in with Google+</button> 
        </div>
        <div class="or">OR</div>
    </div>
</form>



<script type="text/javascript">
	
	function check(){
	var name = document.getElementById("username").value;
	
	  if(name == "")
	{
	     document.getElementById("c").innerHTML="<p style=color:red>You should enter your name</p>";
	}
	
	  else
	  {
	  alert("Thanks for registration  " + name)
	  }
	}

</script>

</body>
</html>