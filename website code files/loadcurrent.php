<?php
include 'db.php';
$qry = "select * from iot_trolley_billno";
$result = $connect->query($qry);
$row = $result->fetch_assoc();
$billno = $row['billno'] + 1;
?>
Bill No : <?php echo $billno; ?>
<table class="table table-bordered">
    <tr>
        <th>
            #
        </th>
        <th>
            Product Name
        </th>
        <th>
            Quantity
        </th>
        <th>
            Price
        </th>
    </tr>

    <?php
    $qry = "select * from iot_trolley_data where billno='$billno'";
    $result = $connect->query($qry);
    $k = 0;
    $sum = 0;
    while ($row = $result->fetch_assoc()) {
        $k++;
        $sum = $sum + $row['price'];
        ?>
        <tr>
            <td align="left"><?php echo $k; ?></td>
            <td align="left">
                <?php echo $row['productname']; ?>
            </td>
            <td align="left">
                <?php echo $row['quantity']; ?>
            </td>
            <td align="left">
                <?php echo $row['price']; ?>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
<h3>Total Amount to Pay Rs. <?php echo $sum; ?></h3>
<form method="post" action="payment.php">
    <input type="hidden" id="txtbillno" value="<?php echo $billno; ?>"/>
    <input type="submit" name="btnsubmit" value="Finish Sale"/>
</form>