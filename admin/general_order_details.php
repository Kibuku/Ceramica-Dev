<?php
include_once 'header.php';
?>

<div id="main-content">
    <div id="header">
        <div class="header-left float-left">
            <i id="toggle-left-menu" class="ion-android-menu"></i>
        </div>
        <div class="header-right float-right">
            <i class="fa fa-user-circle"></i>
        </div>
    </div>

    <div id="page-container">
        <div class="card">
            <div class="title text-uppercase overflow" style='font-weight: 600 !important; position: relative; white-space: nowrap;'>
                John Doe Orders
                <a href="" class="btn text-secondary text-capitalize float-right text-decoration-none ml-2 pt-0 pb-0" title='Click to refresh'>
                    <i class="fa fa-refresh"> Reload</i>
                </a>
                <a href="#" class="btn text-secondary text-capitalize float-right text-decoration-none pt-0 pb-0" title='Click to confirm order' data-toggle='modal' data-target='#confirmModal'>
                    <i class="fa fa-check"> Confirm</i>
                </a>
                <!-- Create Modal -->
                <div style='z-index: 100000;' class='modal fade' id='confirmModal' tabindex='-1' role='dialog' aria-labelledby='confirmModalTitle' aria-hidden='true'>
                    <div class='modal-dialog modal-dialog-centered' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title text-uppercase' style='font-weight: 600 !important;' id='confirmModalTitle'>
                                    Order Confirmation
                                </h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true' style='color:black'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body overflow pb-5' style='text-transform: none;'>
                                <form action='' method='POST' enctype='multipart/form-data'>
                                    Are you sure you want to confirm this order?
                                    <hr>
                                    <div class='row'>
                                        <div class='col-md'>
                                            <button type='button' class='btn btn-secondary form-control' data-dismiss='modal'>
                                                <i class="fa fa-times"> No</i>
                                            </button>
                                        </div>
                                        <div class='col-md'>
                                            <button type='submit' class='btn btn-success form-control'>
                                                <i class="fa fa-check"> Proceed</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Confirm Modal -->
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9 m-1">
                            <div class="overflow">
                                <table class="table table-striped table-hover">
                                    <thead class="text-white" style='background: #a39382;'>
                                        <tr>
                                            <th scope='col' style='white-space: nowrap;'>Image</th>
                                            <th scope='col' style='white-space: nowrap;'>Name</th>
                                            <!--<th scope='col' style='white-space: nowrap;'>Color</th>-->
                                            <th scope='col' style='white-space: nowrap;'>Qty</th>
                                        
                                            <th scope='col' style='white-space: nowrap;'>@</th>
                                            <th scope='col' style='white-space: nowrap;'>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $session_id =$_GET['order_id'];
                                        $check_order = mysqli_query($conn,"SELECT `id`, `product_id`, `quantity`, `session_id`, `total` FROM `cart` WHERE `session_id`='$session_id'") or die(mysqli_error($conn));
                                        if(mysqli_num_rows($check_order) > 0){
                                            $t= 0;
                                            while($row = mysqli_fetch_array($check_order)){
                                                
                                        ?>
                                        <tr>
                                           <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="#" class="btn w-100 m-0">
                                            <span class='product_img' style='background: url(../img/products/<?php echo get_product_detail($conn,$row['product_id'],"image_name"); ?>);'>
                                            </span>
                                        </a>
                                    </td>
                                            <td style='white-space: nowrap;' class="p-0" scope='row'>
                                                <span class="btn w-100 m-0 text-left">
                                                    <?php echo get_product_detail($conn,$row['product_id'],"product_name"); ?>
                                                </span>
                                            </td>
                                            <!--<td style='white-space: nowrap;' class="p-0" scope='row'>-->
                                            <!--    <span class="btn w-100 m-0 text-left">-->
                                            <!--        Blue-->
                                            <!--    </span>-->
                                            <!--</td>-->
                                            <td style='white-space: nowrap;' class="p-0" scope='row'>
                                                <span class="btn w-100 m-0 text-left">
                                                    <p>
                                                        <span id="qty">
                                                            <?php echo $row['quantity']; ?>
                                                        </span>
                                                    </p>
                                                </span>
                                            </td>
                                         
                                            <td style='white-space: nowrap;' class="p-0" scope='row'>
                                                <span class="btn w-100 m-0 text-left">
                                                    <p>USD
                                                        <span id="cost">
                                                                <?php echo number_format(get_product_detail($conn,$row['product_id'],"amount"),2); ?>
                                                        </span>
                                                    </p>
                                                </span>
                                            </td>
                                            <td style='white-space: nowrap;' class="p-0" scope='row'>
                                                <span class="btn w-100 m-0 text-left">
                                                    <p>USD
                                                        <span id="total_cost">
                                                            <?php echo number_format((get_product_detail($conn,$row['product_id'],"amount") * $row['quantity']),2);  
                                                            $t=$t + (get_product_detail($conn,$row['product_id'],"amount") * $row['quantity']);  ?>
                                                        </span>
                                                    </p>
                                                </span>
                                            </td>
                                        </tr>
                                        <?php 
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md m-1 pt-2" style="background: #f5f5f5;">
                            <p class="text-uppercase text-center" style="font-weight: 700 !important;">
                                Totals
                            </p>
                            <hr>
                            <div style="white-space: nowrap; display: flex; font-size: 1vw;">
                                <span style="font-weight: 700 !important; min-width: 13vh;" class="mr-2">Subtotal</span>
                                <p>USD
                                    <span id="sub_total">
                                        <?php echo number_format(check_cart($conn,$session_id,"total"),2); ?>
                                    </span>
                                </p>
                            </div>
                            <div style="white-space: nowrap; display: flex; font-size: 1vw;">
                                <span style="font-weight: 700 !important; min-width: 13vh;" class="mr-2">Packaging </span>
                                <p>
                                     <?php echo number_format((check_cart($conn,$session_id,"total") -  $t),2); ?>
                                </p>
                            </div>
                            <!--<div style="white-space: nowrap; display: flex; font-size: 1vw;">-->
                            <!--    <span style="font-weight: 700 !important; min-width: 13vh;" class="mr-2">Destination</span>-->
                            <!--    <p>-->
                            <!--        Mombasa-->
                            <!--    </p>-->
                            <!--</div>-->
                            <!--<div style="white-space: nowrap; display: flex; font-size: 1vw;">-->
                            <!--    <span style="font-weight: 700 !important; min-width: 13vh;" class="mr-2">Cost</span>-->
                            <!--    <p>USD-->
                            <!--        <span id="shipping_cost">-->
                            <!--            100.00-->
                            <!--        </span>-->
                            <!--    </p>-->
                            <!--</div>-->
                            <hr class="mt-0">
                            <div style="white-space: nowrap; display: flex; font-size: 1vw;">
                                <span style="font-weight: 700 !important; min-width: 13vh;" class="mr-2">Total</span>
                                <p>KES
                                    <span id="total_amount">
                                       <?php echo number_format(check_cart($conn,$session_id,"total"),2); ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>