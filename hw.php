<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?PHP

print("Hello world 2<br>");

?>
<script language="JavaScript" type="text/JavaScript" >
//  var _url = 'https://prod-48.westeurope.logic.azure.com:443/workflows/78f270d5827e453587e39b92d460edb8/triggers/manual/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=s8PXNv0R4mvJkJ91sNoKUm2FVisIkfcQyuVDd1wWLGw';
  https://chrisc.westeurope-1.eventgrid.azure.net/api/events
  var _url = 'https://chrisc.westeurope-1.eventgrid.azure.net/api/events';
  
 // var _url = ' https://prod-86.westeurope.logic.azure.com:443/workflows/6557518def5b46fc9fc2060d377f13ba/triggers/manual/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=KLRutX6qXTPtOHsBogYXBhalY3Yopz3A6vVyXQhlGXE";
// var _url = 'https://s4events.azure-automation.net/webhooks?token=your_token';
function submitOrder() {
var a={};
var d={};
var j=[];
    a.topic="hit";
    a.description="another hit";
    j.push(a);

var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 414)  {
           alert("URI Too long");
         }
         if (xhttp.readyState == 4 ) {
//            alert(xhttp.responseText.replace(" ",""));
            var r1= JSON.parse(xhttp.responseText);
            alert(r1.code);
           if (r1.code == 0 ) {
           alert("OK");
           } else {
         alert('Response '+this.readyState+' - '+ r1.message );
         }    }
         
         };
    xhttp.open("POST", "https://chrisc.westeurope-1.eventgrid.azure.net/api/events", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("j="+JSON.stringify(a));
}
submitOrder();
</SCRIPT>
<BR>
<?PHP
  print("Complete 4<br>");

?>
