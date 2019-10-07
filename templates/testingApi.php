<?php
/*
Template Name: Testing API
*/

/**
    Համակարգի մուտքային տվյալներն են.
    ClientID: 5f864cb4-4336-4aba-8f95-fe55e7cd4d5b
    Username: 3d19541048
    Password: lazY2k

    Որպես քարտային տվյալներ կարող եք օգտագործել հետևյալը.
    Card number:  9051320200000009
    Cardholder: TEST VISA V-POS
    Exp. date: 12/20
    CVV: 997


    OrderID: from 2305101 to 2305200 interval
    amount: 10 AMD
 * 
 */


//phpinfo();


// Set parameters
$data = [    
  "ClientID" => "5f864cb4-4336-4aba-8f95-fe55e7cd4d5b",
  "Amount" => 10,
  "PaymentAmount" => 10,
  "OrderID" => 2305106,
  //"BackURL" => "#",
  "Username" => "3d19541048",
  "Password" => "lazY2k",
  "Description" => "Testing API",
  "Currency" => "051",
  "CardHolderID" => "9051320200000009",
  "Opaque" => "Test From plain PHP"
];

      
   


if(isset($_POST['createPayment'])){   
    //API Url
    $url = "https://servicestest.ameriabank.am/VPOS/api/VPOS/InitPayment"; 
    //required felds for InitPaymentRequest
    $dataArray = array(
        "ClientID" => "5f864cb4-4336-4aba-8f95-fe55e7cd4d5b",
        "Username" => "3d19541048",
        "Password" => "lazY2k",
        "Description" => "Testing Ameria vPos API",
        "OrderID" => 2305101,
        "Amount"=>10
    );
    //init curl
    $curl = curl_init();  
    //curl setopt
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,     
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => http_build_query($dataArray),
        CURLOPT_RETURNTRANSFER => 1
    ));

    $response = json_decode(curl_exec($curl));
//    print_r(curl_getinfo($curl));
    print_r($response->PaymentID);    
    curl_close($curl);

}
//http://kecpa.local/support/?orderID=2305106&resposneCode=00&paymentID=a7fa5c5a-6e79-48d4-b4ad-49f3dbdb19ff&opaque=something+here&description=Operation+Approved+

?>

<form method="post" action="">  
    <input name="amoutn" disabled="" type="text" value="10" />                               
    <input name="createPayment" type="submit" value="Վճարել" class="">
</form>

<!-- 


object(stdClass)#1531 (29) {
  ["Amount"]=>
  float(10)
  ["ApprovedAmount"]=>
  float(10)
  ["ApprovalCode"]=>
  string(6) "039060"
  ["CardNumber"]=>
  string(12) "905132**0009"
  ["ClientName"]=>
  string(15) "TEST VISA V-POS"
  ["ClientEmail"]=>
  string(0) ""
  ["Currency"]=>
  string(3) "051"
  ["DateTime"]=>
  string(19) "20/09/2019 00:42:19"
  ["DepositedAmount"]=>
  float(10)
  ["Description"]=>
  string(35) "Approved. - Payment post authorized"
  ["MDOrderID"]=>
  string(36) "8c10eeaa-4ee8-464a-ad90-8bfcce1a37e2"
  ["MerchantId"]=>
  string(8) "19001048"
  ["TerminalId"]=>
  string(8) "19541048"
  ["OrderID"]=>
  string(7) "2305106"
  ["PaymentState"]=>
  string(17) "payment_deposited"
  ["PaymentType"]=>
  int(5)
  ["PrimaryRC"]=>
  string(1) "0"
  ["ResponseCode"]=>
  string(2) "00"
  ["ExpDate"]=>
  string(6) "202012"
  ["ProcessingIP"]=>
  string(15) "205.155.237.193"
  ["OrderStatus"]=>
  string(1) "2"
  ["CardHolderID"]=>
  string(0) ""
  ["BindingID"]=>
  string(0) ""
  ["RefundedAmount"]=>
  float(0)
  ["Opaque"]=>
  string(14) "something here"
  ["TrxnDescription"]=>
  string(20) "artscentergyumri.org"
  ["rrn"]=>
  string(36) "8c10eeaa-4ee8-464a-ad90-8bfcce1a37e2"
  ["ActionCode"]=>
  string(1) "0"
  ["ExchangeRate"]=>
  float(0)
}
array(26) {
  ["url"]=>
  string(66) "https://servicestest.ameriabank.am/VPOS/api/VPOS/GetPaymentDetails"
  ["content_type"]=>
  string(31) "application/json; charset=utf-8"
  ["http_code"]=>
  int(200)
  ["header_size"]=>
  int(256)
  ["request_size"]=>
  int(164)
  ["filetime"]=>
  int(-1)
  ["ssl_verify_result"]=>
  int(0)
  ["redirect_count"]=>
  int(0)
  ["total_time"]=>
  float(2.893961)
  ["namelookup_time"]=>
  float(0.217591)
  ["connect_time"]=>
  float(0.444198)
  ["pretransfer_time"]=>
  float(0.959077)
  ["size_upload"]=>
  float(82)
  ["size_download"]=>
  float(740)
  ["speed_download"]=>
  float(255)
  ["speed_upload"]=>
  float(28)
  ["download_content_length"]=>
  float(740)
  ["upload_content_length"]=>
  float(82)
  ["starttransfer_time"]=>
  float(0.959642)
  ["redirect_time"]=>
  float(0)
  ["redirect_url"]=>
  string(0) ""
  ["primary_ip"]=>
  string(12) "185.3.189.91"
  ["certinfo"]=>
  array(0) {
  }
  ["primary_port"]=>
  int(443)
  ["local_ip"]=>
  string(12) "172.24.121.9"
  ["local_port"]=>
  int(53455)
}





	

-->

