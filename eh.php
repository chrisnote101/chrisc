<?PHP

class myObj {
    public $code;
    public $text;
}
$ee = "[{ 'subject': 'Myrg','eventType': 'createrg','id':'1014','eventTime': '2020-07-10T09:58:07'}]";

$ver="1.4";
print("Hello world <br>");
print("Complete ".$ver."<br>");
//$aeg="hbWh1Y9LRrQ9vng/WNMVPNPvllSE9v22/j6e46OHnTw=";
$aeg="ieeHKghW60O4ZhSV2icXAVbmiEE/FT3RSiNC9t0SrfE=";
//$aeg=base64_encode($aeg);
//$url = 'https://chrisc.westeurope-1.eventgrid.azure.net/api/events?aeg-sas-key='.$aeg;
$url = 'https://chrisc.westeurope-1.eventgrid.azure.net/api/events';
$url="sb://chriseh.servicebus.windows.net?SharedAccessKeyName=chrisSend&SharedAccessKey=ieeHKghW60O4ZhSV2icXAVbmiEE/FT3RSiNC9t0SrfE=&EntityPath=chrisehhub";
$url="Endpoint=sb://chriseh.servicebus.windows.net/;SharedAccessKeyName=chrisSend;SharedAccessKey=Nvxk44UJNQrp2njY1GIKBLafQgLxQTA1y1KfoXq178Q=;EntityPath=chrisehhub";
$url="https://chriseh.servicebus.windows.net/;SharedAccessKeyName=chrisM;SharedAccessKey=rBJ3q5PsKatDEtltsMIV5bIL8JjNewgAuMuYv88hwHg=;EntityPath=chrisehhub";

//$url="sb://chriseh.servicebus.windows.net?EntityPath=chrisehhub";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
curl_setopt($ch, CURLOPT_TIMEOUT, 4);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$ee);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ,'Content-Length: ' . strlen(json_encode($arr)))   );  
curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'SharedAccessKeyName: chrisM','SharedAccessKey: rBJ3q5PsKatDEtltsMIV5bIL8JjNewgAuMuYv88hwHg=', 'Content-Type: application/x-www-form-urlencoded' ,'Content-Length: ' . strlen($ee))   );  
//curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/x-www-form-urlencoded' ,'Content-Length: ' . strlen($ee))   );  
$response = curl_exec($ch); 
curl_close($ch);
$response=json_decode($response,true);
print("response from event : Code ".$response.code."<br>");
print("response from event : Message ".$response.message."<br>");
var_dump($response);

?>
