<?php
include_once 'head_layout.php';
$page_title = "landing-page";
?>

<!-- Home -->
<section class="home" id="home">
    <div class="home-text">
        <h1>Start your day <br> with coffee</h1>
        <p class="home-info">Welcome to Sarang-Jin Keopi Hub! Here, we're all about bringing people together over a good cup of coffee.
             Our cozy café is the perfect spot to unwind, catch up with friends, or simply enjoy some alone time with your favorite brew.
              With a warm atmosphere and friendly service, we strive to make every visit feel like coming home. So, whether you're a 
              coffee aficionado or just looking for a relaxing place to hang out, we invite you to join us at Sarang-Jin Keopi Hub.</p>
        <a href="signup_pg.php" class="btn">Shop Now</a>
    </div>
    <div class="home-img">
        <img class="img-home" src="img/kape.png" alt="">
    </div>
</section>

<?php
// ABOUT
    include_once 'about.php';

// FEATURED PRODUCTS
    include_once 'featured_prod.php';

// CUSTOMER FEEDBACKS 
    include_once 'customer.php';

include_once 'foot_layout.php';
?>