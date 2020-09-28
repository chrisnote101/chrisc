<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?PHP

print("Hello world");

?>
<SCRIPT>
  var _url = 'https://prod-48.westeurope.logic.azure.com:443/workflows/78f270d5827e453587e39b92d460edb8/triggers/manual/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=s8PXNv0R4mvJkJ91sNoKUm2FVisIkfcQyuVDd1wWLGw';
  
 // var _url = ' https://prod-86.westeurope.logic.azure.com:443/workflows/6557518def5b46fc9fc2060d377f13ba/triggers/manual/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=KLRutX6qXTPtOHsBogYXBhalY3Yopz3A6vVyXQhlGXE";
// var _url = 'https://s4events.azure-automation.net/webhooks?token=your_token';
    $.ajax({
        type: 'POST',
        url: _url
});
</SCRIPT>
<BR>
