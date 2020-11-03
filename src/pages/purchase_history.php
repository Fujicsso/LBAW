<?php
include_once('header.php');
include_once('navbar.php');
include_once('tabs.php');
include_once('jumbo_title.php');
include_once('footer.php');

draw_header();
draw_navbar();
draw_tabs();
draw_jumbo('Purchase History');
?>

<div class="container">
    <div class="d-flex p-3 mb-2 bg-light text-dark">
        <div class="p-2">
            <h4>Orders Awaiting Payment</h4>
        </div>      
    </div>
    <br>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Products</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="../assets/tele1.jpg" alt="..." style="width:80px;">
                    </td>
                    <td>
                        <div class="card-body">
                            <h5 class="card-title">Samsung Galaxy S5 (64GB - Preto) </h5>
                            <h6 class="card-text">Samsung</h6>
                        </div>
                    </td>
                    <td>1</td>
                    <td>499.99€</td>
                    
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex p-3 mb-2 bg-light text-dark">
        <div class="p-2">
            <h4>Orders Processing</h4>
        </div>      
    </div>
    <br>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Products</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="../assets/tele1.jpg" alt="..." style="width:80px;">
                    </td>
                    <td>
                        <div class="card-body">
                            <h5 class="card-title">Samsung Galaxy S5 (64GB - Preto) </h5>
                            <h6 class="card-text">Samsung</h6>
                        </div>
                    </td>
                    <td>1</td>
                    <td>499.99€</td>
                    
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex p-3 mb-2 bg-light text-dark">
        <div class="p-2">
            <h4>Orders Shipped</h4>
        </div>      
    </div>
    <br>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Products</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="../assets/tele1.jpg" alt="..." style="width:80px;">
                    </td>
                    <td>
                        <div class="card-body">
                            <h5 class="card-title">Samsung Galaxy S5 (64GB - Preto) </h5>
                            <h6 class="card-text">Samsung</h6>
                        </div>
                    </td>
                    <td>1</td>
                    <td>499.99€</td>
                    
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex p-3 mb-2 bg-light text-dark">
        <div class="p-2">
            <h4>Orders Delivered</h4>
        </div>      
    </div>
    <br>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Products</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="../assets/tele1.jpg" alt="..." style="width:80px;">
                    </td>
                    <td>
                        <div class="card-body">
                            <h5 class="card-title">Samsung Galaxy S5 (64GB - Preto) </h5>
                            <h6 class="card-text">Samsung</h6>
                        </div>
                    </td>
                    <td>1</td>
                    <td>499.99€</td>
                    
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php
draw_footer();
?>