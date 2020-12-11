<?PHP
class myObj {
    public $code;
    public $text;
}
$aa = array("name"=>"abc123@abc.com");
//$ee = '[{ "name": "abc123@123abc.com"}]';

$ver="1.1";
print("New sub test v".$ver."<br>");
print("Sub for ".$aa->name."<br>");
$ee=json_encode($aa);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
curl_setopt($ch, CURLOPT_TIMEOUT, 4);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$ee);
curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/x-www-form-urlencoded' ,'Content-Length: ' . strlen($ee))   );  
if(curl_exec($ch) === false)
{
    echo 'Curl error: ' . curl_error($ch);
}
else
{
    echo 'Operation completed without any errors';
}

$response = curl_exec($ch); 
curl_close($ch);
$response=json_decode($response,true);
print("response from event     Code :".$response["returnCode"]."<br>");
print("                    username :".$response["username"]."<br>");
print("                          tx :".$response["tx"]."<br>");
var_dump($response);
?>
