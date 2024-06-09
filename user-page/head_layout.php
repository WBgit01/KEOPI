<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../libs/css/user-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head>


<body>
    <header class="header">
        <nav class="header--menu">
            <div class="profile-dropdown">
                <div onclick="toggle()" class="profile-dropdown-btn">
                    <div class="profile-img">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <span>Victoria <i class="fa-solid fa-angle-down"></i></span>
                </div>
                <ul class="profile-dropdown-list">
                    <li class="profile-dropdown-list-item">
                        <a href="#"><i class="fa-regular fa-user"></i> Edit Profile</a>
                    </li>
                    <li class="profile-dropdown-list-item">
                        <a href="#"><i class="fa-regular fa-envelope"></i> Inbox</a>
                    </li>
					<li class="profile-dropdown-list-item">
                        <a href="#"><i class="fa-solid fa-sliders"></i> Settings</a>
                    </li>
                    <li class="profile-dropdown-list-item">
                        <a href="#"><i class="fa-solid fa-cart-arrow-down"></i> Order History</a>
                    </li>
                    <li class="profile-dropdown-list-item">
                        <a href="#"><i class="fa-regular fa-circle-question"></i> Help & Support</a>
                    </li>
                    <hr />
                    <li class="profile-dropdown-list-item">
                        <a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log out</a>
                    </li>
                </ul>
            </div>
            <div class="menu--icons">
                <div class="cart-icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>0</span>
                </div>
            </div>
        </nav>
    </header>

    <script>
		// PROFILE - USER DROPDOWN
        let profileDropdownList = document.querySelector(".profile-dropdown-list");
        let btn = document.querySelector(".profile-dropdown-btn");
        let classList = profileDropdownList.classList;
        const toggle = () => classList.toggle("active");
        window.addEventListener("click", function (e) {
            if (!btn.contains(e.target)) classList.remove("active");
        });
    </script>