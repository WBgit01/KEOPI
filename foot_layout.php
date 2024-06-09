<?php
    if ($page_title == 'landing-page') {
?>
    <!----------- CUSTOMER FEEDBACKS ----------->
<section class="footer">
    <div class="footer-box">
        <h2>Keopi Hub</h2>
        <p>If you have any concerns or recommendations, don't hesitate to reach out to us on our social media platforms.
             We value your opinions since they help us better serve you and make sure that your experience at Sarang-Jin Keopi Hub is nothing short of amazing.</p>
        <div class="socials">
            <a href="https://www.facebook.com/sarangjinkeopihub?mibextid=ZbWKwL"><i class='bx bxl-facebook' ></i></a>
            <a href="https://www.instagram.com/sarangjinkeopihub?igsh=NXB3YXhmdGtyN3A1"><i class='bx bxl-instagram' ></i></a>
            <a href="#"><i class='bx bxl-tiktok' ></i></a>
        </div>
    </div>
    <div class="footer-box">
        <h3>Support</h3>
        <li><a href="#">Product</a></li>
        <li><a href="#">Help & Support</a></li>
        <li><a href="#">Return of Policy</a></li>
        <li><a href="#">Terms of Use</a></li>
    </div>
    <div class="footer-box">
        <h3>View Guides</h3>
        <li><a href="#">Features</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Our Branches</a></li>
    </div>
    <div class="footer-box">
        <h3>Contact</h3>
        <div class="contact">
            <span><i class='bx bxs-map'></i>CSM II Building, Yakal Street, Barangay Marketsite, Mogpog, Philippines, 4901</span>
            <span><i class='bx bxs-phone'></i>+63 947 697 4741</span>
            <span><i class='bx bxs-envelope'></i>negz_joke@yahoo.com.ph</span>
        </div>
    </div>
</section>

<div class="copyright">
    <p>&#169; Keopi All Right Reserved</p>
</div>

<?php
    } else 
?>


<!----------- SCRIPTS ----------->
<?php
    if ($page_title =="loading-page") {
        // echo "<script src='../libs/js/loading-script.js'></script>";
    }else{
        echo "<script src='libs/js/landing-script.js'></script>";
    }
?>


