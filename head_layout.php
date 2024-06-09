<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="libs/css/landing-style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
    <a href="index.php" class="logo">
        <img src="img/logo.png" alt="">
        <span>KEOPI</span>
    </a>

    <ul class="navbar">
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#feedback">Feedback</a></li>
    </ul>

    <div class="main">
        <a href="signup_pg.php" class="user"><i class='bx bxs-user'></i>Sign In</a>
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>
</header>
</body>

<script>
//TOGGLE LANDING PAGE
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navbar.classList.toggle('open')
}
</script>