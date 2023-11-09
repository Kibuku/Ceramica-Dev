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
                General Orders
                <a href="" class="btn text-secondary text-capitalize float-right text-decoration-none ml-2 pt-0 pb-0" title='Click to refresh'>
                    <i class="fa fa-refresh"> Reload</i>
                </a>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="overflow">
                        <table class="table striped table-hover">
                            <thead class="text-white" style='background: #a39382;'>
                                <tr>
                                    <th scope='col' style='white-space: nowrap;'>Name</th>
                                    <th scope='col' style='white-space: nowrap;'>Phone</th>
                                    <th scope='col' style='white-space: nowrap;'>TransactionAmount(USD)</th>
                                    <th scope='col' style='white-space: nowrap;'>Payment Confirmation</th>
                                    <th scope='col' style='white-space: nowrap;'>Order Date</th>
                                    <th scope='col' style='white-space: nowrap; text-align: center;'>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $check_order = mysqli_query($conn,"SELECT `id`, `fullname`, `phone_no`, `TransactionAmount`, `session_id`, `approval`, `date_pay`, `status` FROM `order_detail` WHERE status=1") or die(mysqli_error($conn));
                                if(mysqli_num_rows($check_order) > 0){
                                    while($row = mysqli_fetch_array($check_order)){ ?>
                                        
                                 
                                <tr>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="general_order_details?order_id=<?php echo $row['session_id']; ?>" class="btn w-100 m-0 text-left">
                                            <?php echo ucwords(strtolower($row['fullname'])); ?>
                                        </a>
                                    </td>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="general_order_details?order_id=<?php echo $row['session_id']; ?>" class="btn w-100 m-0 text-left">
                                                <?php echo $row['phone_no']; ?>
                                        </a>
                                    </td>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="general_order_details?order_id=<?php echo $row['session_id']; ?>" class="btn w-100 m-0 text-left">
                                            <?php echo number_format(check_cart($conn,$row['session_id'],"total"), 2, ',', '.'); ?>
                                        </a>
                                    </td>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="general_order_details?order_id=<?php echo $row['session_id']; ?>" class="btn w-100 m-0 text-left">
                                                <?php echo $row['approval']; ?>
                                        </a>
                                    </td>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="general_order_details?order_id=<?php echo $row['session_id']; ?>" class="btn w-100 m-0 text-left">
                                            <?php echo $row['date_pay']; ?>
                                        </a>
                                    </td>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <div class='row d-flex justify-content-center align-items-center w-100' style='width: max-content;'>
                                            <div class='col-sm-2 ml-2'>
                                                <a href='general_order_details?order_id=<?php echo $row['session_id']; ?>' class='btn ml-1 text-secondary' title='Click to view'>
                                                    <i class='fa fa-external-link' aria-hidden='true'></i>
                                                </a>
                                            </div>
                                        </div>
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
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>