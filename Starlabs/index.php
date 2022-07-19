
<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<title>Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<body>
	<nav class="navbar" id="navbar">
		<div class="max-width">
			<div class="logo"><a href="#">Portfo<span>lio</span></a></div>

			<ul class="menu">
				<li><a href="#home" class="menu-btn">Home</a></li>
				<li><a href="#about" class="menu-btn">About</a></li>
				<li><a href="#news" class="menu-btn">News</a></li>
				<li><a href="#services" class="menu-btn">Services</a></li>
				<li><a href="#contact" class="menu-btn">Contact</a></li>
				<li><a class="login-btn">Login</a></li>
			</ul>

			<div class="menu-btn" id="menu-btn" onclick="menuToggle()">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
		</div>
	</nav>



	<div class="login-modal">
		<div class="login-form">
			<h2>Log In</h2>
			<form method="POST">
			<p>Email :</p>
			<input type="text" name="email"><br>
			<p>Password :</p>
			<input type="password" name="password"><br>
			<input type="submit" name="submit">
			</form>
			<span class="modal-close">&times;</span>
			<a href="logout.php">Logout</a>
		</div>
	</div>


	<div class="home" id="home">
		<div class="max-width">
			<div class="home-content">
				<div class="text-1">Hi, my name is </div>
				<div class="text-2">Blenard Hasani</div>
				<div class="text-3">Programmer</div>
			</div>
		</div>
	</div>



	<div class="about" id="about">
		<div class="max-width">
			<h2 class="title">About Me</h2>
			<div class="about-content">
				<div class="column left">
					<img src="img/anonymous.jpg">
				</div>
				<div class="column right">
					<div class="text">
					<p>I'm a web programmer who wants to build website.Skilled in PHP, Wordpress, Html, Css, JS, Java, Graphic Design, and Web Design.</p> 
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="news" id="news">
		<h2 class="title">News</h2>
		<div class="posts">
	  		<div class="card">
	    		<div class="card_header">
	      			<img src="img/post.jpg" alt="card_image" class="card_image" width="600">
	    		</div>
	    		<div class="card_body">
	     	 		<span class="tag tag-blue">Technology</span>
	    	 		<h4>What's new in 2022 Tech</h4>
	    	  		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
	    		</div>
	   		 	<div class="card_footer">
	     			 <div class="user">
	       				 <img src="img/avatar.jpg" alt="user_image" class="user_image">
	        				<div class="user_info">
	          					<h5>Jane Doe</h5>
	          					<small>2h ago</small>
	        				</div>
	     	 		 </div>
	    		</div>
	 		</div>
			<div class="card">
	   			<div class="card_header">
	     			<img src="img/post.jpg" alt="cardmage" class="card_image" width="600">
	    		</div>
	    		<div class="card_body">
	     		 	<span class="tag tag-brown">Food</span>
	     		 	<h4>Delicious Food</h4>
	     			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
	  			</div>
	   			<div class="card_footer">
	      			<div class="user">
	        			<img src="img/avatar.jpg" class="user_image">
	        				<div class="user_info">
	          					<h5>Jony Doe</h5>
	          					<small>Yesterday</small>
	        				</div>
	      			</div>
	    		</div>
	  	 	</div>
	     	<div class="card">
	    		<div class="card_header">
	      			<img src="img/post.jpg" alt="card_image" class="card_image" width="600">
	    		</div>
	    		<div class="card_body">
	      			<span class="tag tag-red">Automobile</span>
	      			<h4>Race to your heart content</h4>
	      			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
	    		</div>
	    		<div class="card_footer">
	      			<div class="user">
	        			<img src="img/avatar.jpg" class="user_image">
	        				<div class="user_info">
	          					<h5>John Doe</h5>
	          					<small>2d ago</small>
	        				</div>
	      			</div>
	    		</div>
	     	</div>
		</div>
	</div>



	<div class="services" id="services">
	  <div class="max-width">
			<div class="services-content">

			</div>
	   </div>
	</div>


	<div class="contact" id="contact">
		<div class="max-width">
			<h2 class="title">Contact me</h2>
			<div class="contact-content">
				<div class="column left">
					<div class="text">Get in Touch</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
					<div class="icons">
						<div class="row">
							<i class="fas fa-user"></i>
							<div class="info">
								<div class="head">Name</div>
								<div class="sub-title">Blenard Hasani</div>
							</div>
						</div>
						<div class="row">
							<i class="fas fa-map-marker-alt"></i>
							<div class="info">
								<div class="head">Address</div>
								<div class="sub-title">Prishtine, Kosove</div>
							</div>
						</div>
						<div class="row">
							<i class="fas fa-envelope"></i>
							<div class="info">
								<div class="head">Email</div>
								<div class="sub-title">Lorem.ipsum@gmail.com</div>
							</div>
						</div>
					</div>
				</div>
				<div class="column right">
					<div class="text">Message me</div>
					<form action="#">
						<div class="fields">
							<div class="field name">
								<input type="text" placeholder="Name">
							</div>
							<div class="field email">
								<input type="email" placeholder="Email" required>
							</div>
						</div>
						<div class="field">
							<input type="text" placeholder="Subject" required>
							</div>
							<div class="field textarea">
								<textarea cols="30" rows="10" placeholder="Describe project ..."></textarea>
							</div>
							<div class="button">
								<button type="submit">Send message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<span>Created By <a href="#">Blenard Hasani </a>| <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
	</footer>
	<script src="js/main.js"></script>
</body>
</html>