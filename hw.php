
<?PHP

class myObj {
    public $code;
    public $text;
}
// [{
//   "id": "1807",
//   "eventType": "recordInserted",
//   "subject": "myapp/vehicles/motorcycles",
//   "eventTime": "2017-08-10T21:03:07+00:00",
//   "data": {
//     "make": "Ducati",
//     "model": "Monster"
//   },  "dataVersion": "1.0"}]
//$myObj->id="1087";
//$myObj->eventType="started";
//$myObj->subject="hits";
//$myObj->eventTime="2020-10-06T11:03:07+00:00";
//$ee = array('id' => '1087',  'eventType'  => 'Start',  'subject'    => 'hits');
//$ee = array('subject' => 'test','eventType' => 'abc');
$ee = "[{ 'subject': 'test','eventType': 'abc','id':'1010','eventTime': '2020-08-10T09:03:07+00:00'}]";

//$ee=json_encode($myObj,true);
//$ee=json_encode($ee,true);
$ver="1.2";
print("Hello world <br>");
print("Complete ".$ver."<br>");
$aeg="hbWh1Y9LRrQ9vng/WNMVPNPvllSE9v22/j6e46OHnTw=";
//$aeg=base64_encode($aeg);
//$url = 'https://chrisc.westeurope-1.eventgrid.azure.net/api/events?aeg-sas-key='.$aeg;
$url = 'https://chrisc.westeurope-1.eventgrid.azure.net/api/events';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
curl_setopt($ch, CURLOPT_TIMEOUT, 4);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$ee);
//curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ,'Content-Length: ' . strlen(json_encode($arr)))   );  
curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'aeg-sas-key: hbWh1Y9LRrQ9vng/WNMVPNPvllSE9v22/j6e46OHnTw=', 'Content-Type: application/x-www-form-urlencoded' ,'Content-Length: ' . strlen($ee))   );  
//curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/x-www-form-urlencoded' ,'Content-Length: ' . strlen($ee))   );  
$response = curl_exec($ch); 
curl_close($ch);
$response=json_decode($response,true);
print("response from event : Code ".$response.code."<br>");
print("response from event : Message ".$response.message."<br>");
var_dump($response);

?>
