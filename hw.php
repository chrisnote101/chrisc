
<?PHP

class myObj {
    public $code;
    public $text;
}
$myObj->code="10";
$myObj-->topic="hits";
$ee=json_encode($myObj);
$ver="1.2";
print("Hello world <br>");
print("Complete ".$ver."<br>");
$url = 'https://chrisc.westeurope-1.eventgrid.azure.net/api/events?aeg-sas-key=EQ3xDFMMJlW3rl+tyug6kVyzrYmjh1U0qEalJmQ/bc4=';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
curl_setopt($ch, CURLOPT_TIMEOUT, 4);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$ee);
//curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ,'Content-Length: ' . strlen(json_encode($arr)))   );  
curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/x-www-form-urlencoded' ,'Content-Length: ' . strlen($ee))   );  
$response = curl_exec($ch); 
curl_close($ch);
$response=json_decode($response,true);
print("response from event : Code ".$response.code."<br>");
print("response from event : Message ".$response.message."<br>");

?>
