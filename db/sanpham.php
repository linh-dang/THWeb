<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");				
$conn = new mysqli("localhost", "root", "", "didong");
	mysqli_set_charset($conn,"utf8");
$result = $conn->query(" SELECT * FROM sanpham");
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	//$result2 = $conn->query("SELECT count(id_sanpham) as count FROM orderlines WHERE id_sanpham='$rs[id_sanpham]'");
	//$rs2 = $result2->fetch_array(MYSQLI_ASSOC);
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"tensp":"'  . $rs["tensp"] . '",';
    $outp .= '"ID":"'   . $rs["id_sanpham"]        . '",';
    $outp .= '"typesp":"'   . $rs["typesp"]        . '",';
    $outp .= '"image":"'   . $rs["image"]        . '",';
    $outp .= '"price":"'   . $rs["price"]        . '",';
    $outp .= '"thongso":"'   . $rs["thongso"]        . '",';
    $outp .= '"publish_date"":"'   . $rs["publish_date"]        . '"}'; 
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
