<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Theme Title -->
    <title>RFID Based Smart shopping cart for Smart City</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <!-- Bootstrap -->
    <style>
        img {
            cursor: pointer;
        }
    </style>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="dist/css/style.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-108526333-1');
    </script>

     


</head>

<body theme-color="red"><br><br><br>
         <?php
    
    
    include 'db.php';
$qry = "select * from iot_trolley_billno";
$result = $connect->query($qry);
$row = $result->fetch_assoc();
$billno = $row['billno'] + 1;
    
     
     
  
     
     echo "<h3>Bill No". $billno . "</h3>";
    ?>
    
        <table align="center" class="table table-bordered">
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
   <?php   $q = $connect->query("update iot_trolley_billno set billno=billno+1"); ?>
    
    <a href="adminhome.php?m=1">Go Home</a>
    

    <!-- 8. Included Scripts Start -->
    <script src="dist/js/jquery-2.1.1.min.js"></script>
    <!-- Jquery v2.1.1 -->
    <script src="dist/js/tether.min.js"></script>
    <!-- Tether -->
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Bootstrap v4.0.0-alpha.6 -->
 
    <script src="dist/js/headline.js"></script>
    <!-- Loading Text Animation -->
    <!-- 8.1. Scripts Required to Edit Start -->
    <script src="dist/js/particlesjson.js"></script>
    <!-- Particle animations in here -->
    <script src="dist/js/scripts.js"></script>
    <!-- All script settins here. Read Documantation. -->
    <!-- end Scripts Required to Edit -->
    <!-- end Included Script -->

    <!-- 9. Slide Background Start -->
    <!-- You can add more images same way. -->
   

</body>
</html>
<?php ob_flush(); ?>