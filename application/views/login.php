<h2> lOGIN </h2>



<form method="POST" action="<?php echo base_url() ?>welcome/auth"  >  



<label> Email </label>
<input type="email" name="email" ><br>

<label> password </label>
<input type="password" name="password" ><br>


<input type="submit" name="Login" value="Login">

  </form>

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style type="text/css">

body{
    font-family: 'Open Sans', sans-serif;
}
.logo i {
	font-size: 31px;
	margin-right: 4px;
	word-spacing: 14px;
}
.logo{
	color: white;
	margin: 0;
	font-size: 20px;
	padding: 4px 0;
	padding-bottom: 15px;

}
.login-bottom-text{
	margin-top: 0px;
	margin-bottom: 0px;
	font-size: 12px;
	color: white;
	line-height: 19px;
}

header{
	background: #3b5998;
	padding-top: 20px;
}
header .form-group{
	margin-bottom: 0px;
}
header .btn-header-login{
	margin-bottom: 15px;	
}
.login-main{
	margin-top: 130px;
}
.multibox{
	padding-left: 0px;
	padding-bottom: 10px;
}
.login-main span{
	font-size: 12px;
} 



footer hr{
	margin-top: 0px;
	padding-top: 0px;
}
.footer-options ul{
	clear: both;
	padding: 0px;
	margin: 0px;
}
.footer-options ul li{
	float:left;
	list-style: none;
	padding: 5px;
	font-size: 12px;
}
.footer-options ul li a{
	text-decoration: none;
	color: #000;
}
.copyrights{
	margin-top: 25px;
}


</style>

<header>
    <div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">Responsive</div>
		</div>
		<div class="col-sm-6 hidden-xs">
			<div class="row">
				<div class="col-sm-5">
					  <div class="form-group">
					    <input type="text" class="form-control" placeholder="Email Address">
					    <div class="login-bottom-text checkbox hidden-sm">
						    <label>
						      <input type="checkbox" id="">
						      Keep me sign in
						    </label>
						  </div>
					  </div>
				</div>	
				<div class="col-sm-5">
					 <div class="form-group">
					    <input type="text" class="form-control" placeholder="Password">
					    <div class="login-bottom-text hidden-sm"> Forgot your password?  </div>
					  </div>
				</div>
				<div class="col-sm-2">
					 <div class="form-group">
					    <input type="button" value="login" class="btn btn-default btn-header-login">
					  </div>
				</div>
			</div>	
		</div>
	</div>
	</div>
</header>
<article class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="login-main">
					<h4><i class="fa fa-dashboard"></i> Gorgeous color and design</h4>
					<span>Some sample description text about the template goes here</span>

					<h4> <i class="fa fa-money"></i> 100%  fully responsive </h4>
					<span>Another description text about the template goes here</span>

					<h4><i class="fa fa-mobile-phone"></i> Competible with all browers and mobile devices</h4>
					<span>Yet another sample description text can be placed in one line</span>

					<h4> <i class="fa fa-trophy"></i> Easy to use and custmize with mobile friendly and responsive</h4>
					<span>Your last description text about your startup or business</span>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="">
				
				<h3><i class="fa fa-shield"></i> Register now</h3>
			  	<hr>
				<div class="form-group">
				  <label class="control-label" for="">Email Address</label>
				  <input type="text" class="form-control" placeholder="Email Address">
				</div>

				<div class="form-group">
				  <label class="control-label" for="">Password</label>
				  <input type="text" class="form-control" placeholder="Password">
				</div>

				<div class="form-group">
				  <label class="control-label" for="">Repeat Password</label>
				  <input type="text" class="form-control" placeholder="Repeat Password">
				</div>

				<div class="">
					<label>Birthday</label>
				  <div class="form-group">
					  <div class="col-sm-4 multibox">
					 	<select class="form-control">
					 		<option>Day</option>
					 	</select>
					  </div>
					   <div class="col-sm-4 multibox">
					 	<select class="form-control">
					 		<option>Month</option>
					 	</select>
					  </div>
					   <div class="col-sm-4 multibox">
					 	<select class="form-control">
					 		<option>Year</option>
					 	</select>
					  </div>
				   
				  </div>
				</div>
		      
				<small>
					By clicking Sign Up, you agree to our Terms and that you have read our
					 Data Use Policy, including our Cookie Use.
				</small>	 
				<div style="height:10px;"></div>
				<div class="form-group">
				  <label class="control-label" for=""></label>
				  <input type="submit" class="btn btn-primary">
				</div>	 

				  </div>
			</div>
			</div>
		</div>
</article>
<footer class="container">
<hr>
<div class="footer-options">
<ul >
	<li><a href="#">Mobile</li>
	<li><a href="#">Find Friends</li>
	<li><a href="#">Badges</li>
	<li><a href="#">People</li>
	<li><a href="#">Pages</li>
	<li><a href="#">Places</a></li>
	<li><a href="#">Games</a></li>
	<li><a href="#">Locations</a></li>
	<li><a href="#">About</a></li>
</ul>
</div>
<div style="clear:both"></div>
<small class="copyrights"> © Copyrights reserved  2014</small>
</footer>