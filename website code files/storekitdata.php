<?php
include 'db.php';
$tid = $_REQUEST['tid'];
$productid = $_REQUEST['pid'];
$productid = str_replace('$', '', $productid);
echo "Im from server :" . $productid;
$c = $_REQUEST['c'];
$d = $_REQUEST['d'];
$productArr = array("0016012183" => "Maggi Noodles", "0016011595" => "Jazbaa Basmathi Rice", "0001156180" => "Gold Winner Oil");
$priceArr = array("0016012183" => "10", "0016011595" => "110", "0001156180" => "198");

$productname = $productArr[$productid];
$price = $priceArr[$productid];

echo $productname;
echo '<br>' . $price;

$qry = "select * from iot_trolley_billno";
$result = $connect->query($qry);
$row = $result->fetch_assoc();
$billno = $row['billno'] + 1;
if($productid != 0) {
    if ($c == 1) {
        $qry = "select * from iot_trolley_data where  billno=" . $billno . " and pid='$productid'";
        $k = 0;
        $result = $connect->query($qry);
        if($row = $result->fetch_assoc()){
            $k = 1;
        }
        if($k == 0){
            $qry = "insert into iot_trolley_data(productname, pid, price, billno) values('$productname','$productid','$price','$billno')";
            $connect->query($qry);
        }else{
            $qry = "update iot_trolley_data set quantity=quantity+1, price=price + $price where billno=" . $billno . " and pid='$productid'";
            $connect->query($qry);
        }
    }
    if ($c == 2) {
        $qry = "select * from iot_trolley_data where  billno=" . $billno . " and pid='$productid'";
        $k = 0;
        $result = $connect->query($qry);
        if($row = $result->fetch_assoc()){
            $k = 1;
            if($row['quantity'] <= 1){
                $k = 0;
            }
        }
        if($k == 0){
        $qry = "delete from iot_trolley_data where billno=" . $billno . " and pid='$productid'";
        $connect->query($qry);
        }else{
            $qry = "update iot_trolley_data set quantity=quantity-1, price=price - $price where billno=" . $billno . " and pid='$productid'";
            $connect->query($qry);
        }
        
    }
}
