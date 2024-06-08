<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../libs/css/user-style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />	
</head>
<body>
    <header class="header">
		<nav class="header--menu">
			<div class="menu--bar">
				<i class="fa-solid fa-bars"></i>
			</div>

			<ul class="navbar">
				<li><a href="#home" class="active">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#products">Products</a></li>
				<li><a href="#feedback">Feedback</a></li>
    		</ul>

			<div class="menu--icons">
				<!-- <i class="fa-solid fa-mug-hot"></i> -->
				<div class="cart-icon">
					<i class="fa-solid fa-cart-shopping"></i>
					<span>0</span>
				</div>
			</div>
		</nav>
	</header>

<script>

	//TOGGLE LANDING PAGE
	let menu = document.querySelector('#menu--bar');
	let navbar = document.querySelector('.navbar');

	menu.onclick = () => {
		menu.classList.toggle('bx-x');
		navbar.classList.toggle('open')
	}
</script>