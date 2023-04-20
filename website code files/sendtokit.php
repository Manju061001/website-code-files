<?php
include 'db.php';
$q = mysql_query("select * from iot_pbam_ctrl");
while ($r = mysql_fetch_array($q)) {
    echo $r['status'];
//    echo $r['unita'];
}