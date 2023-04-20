<?php
include 'db.php';
$position = $_REQUEST['pos'];
$status = $_REQUEST['status'];

$q = 1;
if ($position == 1 && $status == 1) {
    $q = mysql_query("update iot_electricity_units set unita='b'");
} else if ($position == 1 && $status == 2) {
    $q = mysql_query("update iot_electricity_units set unita='a'");
} else if ($position == 2 && $status == 1) {
    $q = mysql_query("update iot_electricity_units set unitb='d'");
} else if ($position == 2 && $status == 2) {
    $q = mysql_query("update iot_electricity_units set unitb='c'");
} else if ($position == 3 && $status == 1) {
    $q = mysql_query("update iot_electricity_units set unitc='f'");
} else if ($position == 3 && $status == 2) {
    $q = mysql_query("update iot_electricity_units set unitc='e'");
}
if ($q) {
    echo "1";
}