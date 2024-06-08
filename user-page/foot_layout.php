<script type="text/javascript" src="../libs/js/user-script.js"></script>
<script type="text/javascript" src="../libs/js/menu-list-script.js"></script>

<?php
if ($page_title == "main-page") {
    ?>
    <script>
        const images = ['banner1.png', 'banner2.png', 'banner3.png', 'banner4.png', 'banner5.png'];
        let currentImageIndex = 0;
        const banner = document.getElementById('banner');

        function preloadImages() {
            for (let i = 0; i < images.length; i++) {
                new Image().src = `../img/banner/${images[i]}`;
            }
        }

        function changeBackground() {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            banner.style.backgroundImage = `url('../img/banner/${images[currentImageIndex]}')`;
        }

        // Preload images
        preloadImages();

        // Change image every 5 seconds
        setInterval(changeBackground, 5000);
    </script>
    <?php
}
?>


