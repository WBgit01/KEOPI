<?php
include_once 'head_layout.php';
$page_title = "landing-page";
?>


<!-- Home -->
<section class="home" id="home">
    <div class="home-text">
        <h1>Start your day <br> with coffee</h1>
        <p class="home-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quod odit sit sapiente quibusdam repellat eligendi ratione. Facilis, quae, aspernatur iste consequatur debitis, exercitationem quod molestiae magni autem nemo rerum.</p>
        <a href="#" class="btn">Shop Now</a>
    </div>
    <div class="home-img">
        <img class="img-home" src="../img/kape.png" alt="">
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