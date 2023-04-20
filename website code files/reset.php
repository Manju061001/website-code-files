<?php ob_start(); ?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        include 'db.php';
        $q = $connect->query("update iot_trolley_billno set billno=billno+1");
        header ('Location: adminhome.php');
        ?>
    </body>
</html>
<?php ob_flush(); ?>