<?php
require_once 'header.php';
require "countries.php";
?>
<section style='min-height: calc(100vh - 40px);'>
    <nav aria-label="breadcrumb" class="w-100 float-left">
        <ol class="breadcrumb parallax justify-content-center" data-source-url="img/banner/parallax_.jpg" style="background-image: url(&quot;img/banner/parallax_.jpg&quot;); background-position: 50% 49.7062%; background-repeat: no-repeat; background-size: cover; overflow: hidden;  position: relative;">
            <div style='height: 100%; width: 100%; z-index: 2; background-color: #080d15; opacity: .7; position: absolute; top: 0;'></div>
            <li class="breadcrumb-item active" style='z-index: 5;'>
                <a href="index">Home</a>
            </li>
            <li class="breadcrumb-item active" style='z-index: 5;' aria-current="page">cart</li>
        </ol>
    </nav>
    <div class="cart-area table-area pt-110 pb-95 float-left w-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 float-left cart-wrapper">
                    <div class="table-responsive">
                        <table class="table product-table text-center">
                            <thead>
                                <tr>
                                    <th class="table-remove text-capitalize">remove</th>
                                    <th class="table-image text-capitalize">image</th>
                                    <th class="table-p-name text-capitalize">product</th>
                                    <th class="table-p-price text-capitalize">price</th>
                                         
                                    <th class="table-p-qty text-capitalize">quantity</th>
                           
                                    <th class="table-p-qty text-capitalize" id='package_display_' style="white-space: nowrap; display: none;">Packaging Cost</th>
                                  
                                    <th class="table-total text-capitalize">total</th>
                                </tr>
                            </thead>
                            <tbody>
                                                             <?php
                                if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
                                    $sum=0;
                                    $package = 0;

                                                    foreach ($_SESSION["cart"] as $productId => $quantity) {
                                           
    ?>
                                <tr>
                                    <td class="table-remove">
                                        <button>
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                    <td class="table-image">
                                     <a href="product_details?product_id=<?php echo $productId; ?>">
                                            <img src="img/products/<?php echo get_product_detail($conn,$productId,"image_name"); ?>" alt=""></a>
                                    </td>
                                    <td class="table-p-name text-capitalize">
                                        <a href="product_details?product_id=<?php echo $productId; ?>"><?php echo get_product_detail($conn,$productId,"product_name"); ?></a>
                                    </td>
                                    <td class="table-p-price">
                                        <p><?php echo $currency; ?>
                                            <span id="cost">
                                                <?php echo number_format(get_product_detail($conn,$productId,"amount") * $convert, 2, '.', ',') ; ?>
                                            </span>
                                        </p>
                                    </td>
                                                  
                                    <td class="table-p-qty">
                                        <input value="<?php echo $quantity; ?>" name="cart-qty" id='<?php echo $productId;  ?>' type="number" min="0"  onchange="calculateAndDisplay(this.id,<?php echo $quantity; ?>,this.value)">
                                    </td>
                                    
                             
                                        
                                                
                                                <?php  $package = $package+ ($convert * $quantity * get_check_package($conn,get_product_detail($conn,$productId,"packaging_id"),"cost"));
                                               
                                                ?>
                                         
                                    <td class="table-total pt-4">
                                        <p><?php echo $currency; ?>
                                            <span id="total_<?php echo $productId;  ?>">
                                                <!-- Total will be calculated and dispayed here -->
                                                <?php echo number_format(($quantity * $convert * get_product_detail($conn,$productId,"amount") + ($quantity * $convert * get_check_package($conn,get_product_detail($conn,$productId,"packaging_id"),"cost")) ), 2, '.', ',') ;
                                                
                                                $sum = $sum + ($quantity * get_product_detail($conn,$productId,"amount") + ($quantity * get_check_package($conn,get_product_detail($conn,$productId,"packaging_id"),"cost")) );
                                             
                                                ?>
                                                
                                            </span>
                                        </p>
                                    </td>
                                </tr>
                                
                                <?php }
                                
                                } 
                                   $sum = $sum * $convert;
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-bottom-wrapper">
                        <div class="table-coupon d-flex d-xs-block d-lg-flex d-sm-flex fix justify-content-start float-left">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit" class="btn-primary btn">Apply coupon</button>
                        </div>
                        <div class="table-update d-flex d-xs-block d-lg-flex d-sm-flex justify-content-end">
                            <button type="button" class="btn-primary btn">
                                Update cart</button>
                        </div>
                    </div>
                </div>
                <div class="table-total-wrapper d-flex justify-content-end pt-60 col-md-12 col-sm-12 col-lg-4 float-left  align-items-center">
                    <div class="table-total-content">
                        <h2 class="pb-20">Cart totals</h2>
                        <div class="table-total-amount">
                            <div class="single-total-content d-flex justify-content-between float-left w-100">
                                <strong>Subtotal</strong>
                                <span class="c-total-price">
                                    <p><?php echo $currency; ?>
                                        <span id="sub_total">
                                             <?php echo number_format($sum, 2, '.', ',') ; ?>
                                        </span>
                                    </p>
                                </span>
                            </div>
                                   <div class="single-total-content d-flex justify-content-between float-left w-100">
                                <strong>Include Packaging?</strong>
                                <span class="c-total-price">
                                    <p>
                                        <input type="checkbox" id="package_check" onclick="myPackagingCheckk()">
                                    </p>
                                </span>
                            </div>
                                   <div id="package_display" style='display: none'>
                                <div class="single-total-content d-flex justify-content-between float-left w-100">
                                    <strong>Packaging Cost</strong>
                                    <span class="c-total-price">
                                        <p><?php echo $currency; ?>
                                        <span id="sub_total">
                                             <?php echo number_format($package, 2, '.', ',') ; ?>
                                        </span>
                                    </p>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="single-total-content d-flex justify-content-between float-left w-100">
                                <strong>Shipping</strong>
                                <span class="c-total-price w-50">
                                    <select name="" class="custom-select d-block w-100" id="choose">
                                        <option value="" selected='true' disabled='disabled'>Choose shipping...</option>
                                        <option selected value="office">Pick at our offices</option>
                                        <!--<option value="kenya">Around Kenya</option>-->
                                        <!--<option value="other">Other Countries</option>-->
                                    </select>
                                </span>
                            </div>
                           
                            <div id="counties" style='display: none'>
                                <div class="single-total-content d-flex justify-content-between float-left w-100">
                                    <strong>County</strong>
                                    <span class="c-total-price w-50">
                                        <select name="" class="custom-select d-block w-100" id="county">
                                            <option value="" selected='true' disabled='disabled'>Choose county...</option>
                                            <option value="nairobi">Nairobi</option>
                                            <option value="mombasa">Mombasa</option>
                                            <option value="kisumu">Kisumu</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div id="countries" style='display: none'>
                                <div class="single-total-content d-flex justify-content-between float-left w-100">
                                    <strong>Country</strong>
                                    <span class="c-total-price w-50">
                                        <select name="" class="custom-select d-block w-100" id="country">
                                            <option value="" selected='true' disabled='disabled'>Choose country...</option>
                                            <option value="">Uganda</option>
                                            <option value="">Tanzania</option>
                                            <option value="">Rwanda</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div id="office_totals" style='display: block'>
                                <div class="single-total-content d-flex justify-content-between float-left w-100">
                                    <strong>Shipping Cost</strong>
                                    <span class="c-total-price">
                                        Free
                                    </span>
                                </div>
                            </div>
                            <div id="county_totals" style='display: none'>
                                <div class="single-total-content d-flex justify-content-between float-left w-100">
                                    <strong>Shipping Cost</strong>
                                  <span class="c-total-price">
                                    <p><?php echo $currency; ?>
                                        <span id="sub_total">
                                             <?php echo number_format($sum, 2, '.', ',') ; ?>
                                        </span>
                                    </p>
                                </span>
                                </div>
                            </div>
                            <div id="other_totals" style='display: none'>
                                <div class="single-total-content d-flex justify-content-between float-left w-100">
                                    <strong>Shipping Cost</strong>
                                    <span class="c-total-price">
                                        <?php echo $currency; ?> 
                                        <span id='total_other'>200.00</span>
                                    </span>
                                </div>
                            </div>
                           <form action="#" method="POST">
                               <input type="hidden" name="total" id="total" value="<?php echo $sum; ?>">
                                <input type="hidden" name="checkout_page" value="checkout_page">
                            <div class="single-total-content tt-total d-flex justify-content-between float-left w-100">
                                <strong>Total</strong>
                                <span class="c-total-price">
                                    <p><?php echo $currency; ?>
                                        <span id="final">
                                             <?php echo number_format($sum, 2, '.', ',') ; ?>
                                        </span>
                                    </p>
                                </span>
                            </div>
                            <button type="submit" class="btn btn-primary float-left w-100 text-center">Proceed to checkout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<script>
    function myPackagingCheckk() {
    var package_check = document.getElementById("package_check");
    var package_display = document.getElementById("package_display");
    var final = document.getElementById('final');
    var inputElement = document.getElementById("total");
    // var packaging_cost = document.getElementById('packaging_cost').innerHTML;

    if (package_check.checked == true) {
        package_display.style.display = "block";
        total = <?php  echo $sum + $package; ?>;
    } else {
        package_display.style.display = "none";
        total = <?php  echo $sum; ?>;
    }    
    final.innerHTML =  total.toLocaleString(undefined,{ minimumFractionDigits: 2 });
    inputElement.value = total;


    // var e = document.getElementById("choose");
    // var value = e.value;

   
}
</script>
<?php
if(isset($_POST['checkout_page'])){
    $session_id = rand(111111,999999);
    $total =mysqli_real_escape_string($conn,round($_POST['total']/$convert));
             foreach ($_SESSION["cart"] as $productId => $quantity) {
                 $insert = mysqli_query($conn,"INSERT INTO `cart`(`product_id`, `quantity`, `session_id`, `total`)  VALUES('$productId','$quantity','$session_id','$total')") or die(mysqli_error($conn));
        
         $amount=100;
       $email = "";
    $firstname ="";
    $lastname = "";
    $program = "";
  $id = $session_id;
    $date = date("Y/m/d");
     
              $url = "https://secure.3gdirectpay.com/API/v6/";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array(
   "Content-Type: application/xml",
   "Accept: application/xml",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA

<?xml version="1.0" encoding="utf-8"?>

<API3G>
<CompanyToken>8D3DA73D-9D7F-4E09-96D4-3D44E7A83EA3</CompanyToken>
<Request>createToken</Request>
<Transaction>
<PaymentAmount>$amount</PaymentAmount>
<PaymentCurrency>USD</PaymentCurrency>
<CompanyRef>NHBZMC</CompanyRef>
<RedirectURL>https://tridennceramics.com/dev/response_pay.php?token=$id</RedirectURL>

<BackURL> http://www.domain.com/backurl.php </BackURL>
<CompanyRefUnique>0</CompanyRefUnique>
<PTL>15</PTL>
<PTLtype>hours</PTLtype>
<customerFirstName>$firstname</customerFirstName>
<customerLastName>$lastname</customerLastName>
<customerZip>254</customerZip>
<customerCity>Nairobi</customerCity>
<customerCountry>KE</customerCountry>
<customerEmail>$email</customerEmail>
</Transaction>
<Services>
<Service>
<ServiceType>5525</ServiceType>
<ServiceDescription>3854</ServiceDescription>
<ServiceDate>$date</ServiceDate>
</Service>
</Services>
</API3G>
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
$xmldata = simplexml_load_string($resp);
$jsondata = json_encode($xmldata);
// print_r($jsondata);
// echo $email;
$myJSON = json_decode($jsondata);

$token = $myJSON->TransToken;
?>
<script>
    window.location.href="https://secure.3gdirectpay.com/payv2.php?ID=<?php echo $token; ?>";
</script>
<?php
             }
}

?>
<script>
    function calculateAndDisplay(productId,qty_before,qty) {
    // Get the input field element by its ID
    let qtyy = 0 - (qty_before - qty);
       $.ajax({
                type: "POST",
                url: "addToCart.php?qty="+qtyy,
                data: { product_id: productId },
                success: function () {
                    alert("Cart updated");
                    window.location.href="cart_page";
                }
            });

}

</script>
<?php
require_once 'footer.php';
?>