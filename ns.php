<?PHP
class myObj {
    public $code;
    public $text;
}
$ee = "{ 'name': 'abc123@123abc.com'}";

$ver="1.4";
print("New sub test v".$ver."<br>");
print("Sub for ".$ee["name"]."<br>");
$aeg="ieeHKghW60O4ZhSV2icXAVbmiEE/FT3RSiNC9t0SrfE=";
$url="https://intakefromcdi.azurewebsites.net/api/CreatePlayground";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
curl_setopt($ch, CURLOPT_TIMEOUT, 4);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$ee);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ,'Content-Length: ' . strlen(json_encode($arr)))   );  
//curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'SharedAccessKeyName: chrisM','SharedAccessKey: rBJ3q5PsKatDEtltsMIV5bIL8JjNewgAuMuYv88hwHg=', 'Content-Type: application/x-www-form-urlencoded' ,'Content-Length: ' . strlen($ee))   );  
curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/x-www-form-urlencoded' ,'Content-Length: ' . strlen($ee))   );  
$response = curl_exec($ch); 
curl_close($ch);
$response=json_decode($response,true);
print("response from event     Code :".$response.returnCode."<br>");
print("                    username :".$response.username."<br>");
print("                          tx : ".$response.tx."<br>");
print("response from event     Code :".$response.["returnCode"]."<br>");
print("                    username :".$response.["username"]."<br>");
print("                          tx : ".$response.["tx"]."<br>");
print("response from event     Code :".$response["returnCode"]."<br>");
print("                    username :".$response["username"]."<br>");
print("                          tx : ".$response["tx"]."<br>");
print("response from event     Code :".$response[0]."<br>");
print("                    username :".$response[1]."<br>");
print("                          tx : ".$response[2]."<br>");
var_dump($response);

?>
