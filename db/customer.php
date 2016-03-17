<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");				
$conn = new mysqli("localhost", "root", "", "didong");
	mysqli_set_charset($conn,"utf8");
$result = $conn->query(" SELECT * FROM customers");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	$result2 = $conn->query("SELECT count(cus_ID) as count FROM orders WHERE cus_ID='$rs[cus_ID]'");
	$rs2 = $result2->fetch_array(MYSQLI_ASSOC);
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Name":"'  . $rs["cus_name"] . '",';
    $outp .= '"ID":"'   . $rs["cus_ID"]        . '",';
    $outp .= '"phone":"'   . $rs["phone"]        . '",';
    $outp .= '"email":"'   . $rs["email"]        . '",';
    $outp .= '"address":"'   . $rs["address"]        . '",';
    $outp .= '"count":"'   . $rs2["count"]        . '",';
    $outp .= '"birth":"'   . $rs["birth"]        . '"}'; 
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
