<?php
    $page_title = "loading-page";
?>
<link rel="stylesheet" href="../libs/css/loading-style.css">

<div class="cup">
    <div class="handle"></div>
    <h1 class="title">KEOPI APP</h1>
</div>

<?php
    include_once 'foot_layout.php';
?>

<script>
    // Delay before redirecting to the landing page
    setTimeout(function() {
        window.location.href = 'main_page.php';
    }, 5000);
</script>