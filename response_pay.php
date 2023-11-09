

<?php
require "database/conn.php";
$url = "https://secure.3gdirectpay.com/API/v6/";

$token = $_GET['TransactionToken'];

$id = $_REQUEST['token'];

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
<Request>verifyToken</Request>
<TransactionToken>$token</TransactionToken>
</API3G>
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
// var_dump($resp);
$xmldata = simplexml_load_string($resp);
$jsondata = json_encode($xmldata);
 //print_r($jsondata);
$myJSON = json_decode($jsondata);


if ($myJSON->Result== 000) {
 
$date = date("Y-m-d");
$rand =$myJSON->TransactionApproval;
echo "<br>Result ".$myJSON->Result;
$fullname = $myJSON->CustomerName;
$TransactionAmount = $myJSON->TransactionAmount;
echo "<br>TransactionCurrency ".$myJSON->TransactionCurrency;
$phone_no =  $myJSON->CustomerPhone;
echo "<br>Approval ".$rand;

$insert = mysqli_query($conn,"INSERT INTO `order_detail`(`fullname`, `phone_no`, `TransactionAmount`, `session_id`, `approval`, `date_pay`) VALUES('$fullname','$phone_no','$TransactionAmount','$id','$rand','$date') ") or die(nysqli_error($conn));
// CustomerCountry
     
} else {
	echo "Invalid input";
}


// echo "<br>Result ".$myJSON->Result;
// echo "<br>CustomerName ".$myJSON->CustomerName;
// echo "<br>TransactionAmount ".$myJSON->TransactionAmount;
// echo "<br>TransactionCurrency ".$myJSON->TransactionCurrency;
// echo "<br>Purpose ".$purposes;


// $token = $myJSON->TransToken;
?>

