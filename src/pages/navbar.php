<?php function draw_navbar()
{ ?>

    <div class="row-12 py-3">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand mr-auto mt-2 mt-lg-0" href="../pages/homePage.php">
                <img src="../assets/uPlaceHolder.png" width="30" height="30" alt="">
                Phone
            </a>
            
            <a class="nav-item nav-link" href="../pages/search_screen.php">
                <img src="../assets/search.svg" width="30" height="30" alt="">
            </a>

            <a class="nav-item nav-link" href="#">
                <img src="../assets/shopping-cart.svg" width="30" height="30" alt="">
            </a>

            <a class="nav-item nav-link" href="#">
                <img src="../assets/user.svg" width="30" height="30" alt="">
            </a>
        </nav>
    </div>

<?php } ?>