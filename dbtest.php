<?PHP
$sql="SELECT * FROM log";
  require "dbconf.php";  
  $conn = oci_connect($db_user, $db_pass, $db, 'AL32UTF8');
  if (!$conn) {
    $err = oci_error();
    print("Error on connect<br>");
    }
  $stid=oci_parse($conn,$sql);
  $r=oci_execute($stid);
if (!$r) {
    $e = oci_error($stid);  // For oci_execute errors pass the statement handle
    $em= htmlentities($e['message']);
    $em=$em."\n<pre>\n";
    $em=$em.htmlentities($e['sqltext']);
    $em=$em."\n%".($e['offset']+1)."s";
    $em=$em."\n</pre>\n";
    print("Error executing because :".$em);
}
  oci_close($conn);

$conn = oci_connect($db_user, $db_pass, $db, 'AL32UTF8');
if (!$conn) {
  $err = oci_error();
  die("<h2>".$err['message']."</h2>");
 }
$st=oci_parse($conn,"SELECT emp FROM emptable ");
oci_execute($st) or die("<h2>Error executing query </h2>");
$results = array();
$firstup=0;
$numRows = oci_fetch_all($st, $results, null, null, OCI_FETCHSTATEMENT_BY_ROW);
        if($numRows > 0){       
          foreach($results as $row) {
             if ($firstup==1) { print (',"'); } 
               else { print ( '<SCRIPT> var envcodes = ["'); }     
               print($row["EMP"].'"');
               $firstup=1; } 
               print('];</SCRIPT>');
}
oci_close($conn);



?>
