<?php 
include_once 'head_layout.php'; 
include_once 'sidebar.php';
?>

    <section class="dashboard">
        <div class="top">
            <i class="fa-solid fa-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <!-- <img src="../img/logo.png" alt=""> -->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="fa-solid fa-house"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="fa-solid fa-users"></i>
                        <span class="text">Users</span>
                        <span class="number">83</span>
                    </div>
                    <div class="box box2">
                        <i class="fa-solid fa-cart-plus"></i>
                        <span class="text">Pending Orders</span>
                        <span class="number">120</span>
                    </div>
                    <div class="box box3">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                        <span class="text">Completed Orders</span>
                        <span class="number">220</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="fa-solid fa-receipt"></i>
                    <span class="text">Recent Orders</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Order id</span>
                        <span class="data-list">0304002</span>
                        <span class="data-list">0200002</span>

                    </div>
                    <div class="data email">
                        <span class="data-title">Name</span>
                        <span class="data-list">Alex Wasabi</span>
                        <span class="data-list">Albert Mendoza</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Email</span>
                        <span class="data-list">premshahi@gmail.com</span>
                        <span class="data-list">deepachand@gmail.com</span>

                    </div>
                    <div class="data type">
                        <span class="data-title">Quantity</span>
                        <span class="data-list">2</span>
                        <span class="data-list">5</span>

                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">-</span>
                        <span class="data-list">-</span>
                </div>
            </div>
        </div>
    </section>

<?php include_once 'foot_layout.php';?>