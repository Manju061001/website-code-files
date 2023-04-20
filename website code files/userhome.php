<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Theme Title -->
    <title>IoT Based Trolley</title>

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

    <script>
        function changeload(position) {
            var result;
            var status;
            if (position == 1) {
                status = document.getElementById('u1val').value;
                if (status == 1) {
                    document.getElementById('u1val').value = 2;
                } else {
                    document.getElementById('u1val').value = 1;
                }
            }
            else if (position == 2) {
                status = document.getElementById('u2val').value;
                if (status == 1) {
                    document.getElementById('u2val').value = 2;
                } else {
                    document.getElementById('u2val').value = 1;
                }
            }

            if (position == 3) {
                status = document.getElementById('u3val').value;
                if (status == 1) {
                    document.getElementById('u3val').value = 2;
                } else {
                    document.getElementById('u3val').value = 1;
                }
            }
            if (position == 1 && status == 1) {
                document.getElementById('unita').src = "dist/img/unitared.png";
            } else if (position == 1 && status == 2) {
                document.getElementById('unita').src = "dist/img/unitagreen.png";
            } else if (position == 2 && status == 1) {
                document.getElementById('unitb').src = "dist/img/unitbred.png";
            } else if (position == 2 && status == 2) {
                document.getElementById('unitb').src = "dist/img/unitbgreen.png";
            } else if (position == 3 && status == 1) {
                document.getElementById('unitc').src = "dist/img/unitcred.png";
            } else if (position == 3 && status == 2) {
                document.getElementById('unitc').src = "dist/img/unitcgreen.png";
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    result = this.responseText;
                    if (result == 1) {

                    } else {
                        alert("Sorry! Technical Issue!");
                    }
                }
            };
            xmlhttp.open("GET", "changeunits.php?pos=" + position + "&status=" + status, true);
            xmlhttp.send();
        }


    </script>

</head>

<body theme-color="red">

<!-- 1. Loading Page Start -->

<!-- End Loading Page -->

<!-- 2. Particles Animation Start -->
<canvas id="canvas"></canvas>
<div id="particles" class="particles-js none"></div>
<!-- End Particles Animation -->

<!-- 3. Overlay Effects Start -->
<!--
    You can change "bg-type"s
    bg-type="color"
    bg-type="dotted"
    bg-type="gradient"
    bg-type="none"
-->
<div class="overlay-bg" bg-type="color"></div>
<!-- End Overlay Effects -->


<!-- 4. Home Section Start -->
<div id="homePage">
    <div id="content" class="content">
        <!-- 4.1. Header Start -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- 4.1.1. Logo Start -->
                        <div class="logo">
                            <!-- Change This Image and if you want change the "#" url. -->
                            <a href="javascript:void(0)"><img src="dist/img/logo.png" alt="logo"></a>
                        </div>
                        <!-- End Logo -->
                    </div>

                </div>
            </div>
        </header>
        <!-- end Header -->

        <!-- 4.2. Home Section Content Start -->
        <div class="contentInner">
            <div class="container">

                <!-- 4.2.2. Loading Text Start -->
                <h3 class="headline loading-bar">
                    <!-- This is static text <span>...</span> -->
                    <span>Design of Prepaid billing using Adaptive Meter</span>
                        <span class="animated-words">
                            <!-- There are words. You can add more texts in <b></b> tag. -->
<!--                            <b class="is-visible">EBMS.</b>-->
<!--                            <b>in </b>-->
<!--                            <b>IOT.</b>-->
                        </span>
                </h3>
                <!-- end Loading Text Start -->

                <!-- 4.2.3. Homepage Description Paragraph Start -->
                <p class="description">

                <p>
                    Red - Off. Green - On. Click on icon to enable or disable the unit
                </p>

                <div id="showmydata"></div>
                <?php
                include 'db.php';
                $q = mysql_query("select * from iot_electricity_units");
                while ($r = mysql_fetch_array($q)) {
                    $u1 = $r['unita'];
                    $u2 = $r['unitb'];
                    $u3 = $r['unitc'];
                }
                if($u1 == "a"){
                    $c1val = 1;
                    $img1name = "unitagreen";
                }else{
                    $c1val = 2;
                    $img1name = "unitared";
                }

                if($u2 == "c"){
                    $c2val = 1;
                    $img2name = "unitbgreen";
                }else{
                    $c2val = 2;
                    $img2name = "unitbred";
                }

                if($u3 == "e"){
                    $c3val = 1;
                    $img3name = "unitcgreen";
                }else{
                    $c3val = 2;
                    $img3name = "unitcred";
                }
                ?>

                <input type="hidden" id="u1val" value="<?php echo $c1val; ?>"/>
                <input type="hidden" id="u2val" value="<?php echo $c2val; ?>"/>
                <input type="hidden" id="u3val" value="<?php echo $c3val; ?>"/>
                <br><br>
                <img src="dist/img/<?php echo $img1name; ?>.png" width="72px" height="72px" onclick="changeload(1)" id="unita"/>&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="dist/img/<?php echo $img2name; ?>.png" width="72px" height="72px" onclick="changeload(2)" id="unitb"/>&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="dist/img/<?php echo $img3name; ?>.png" width="72px" height="72px" onclick="changeload(3)" id="unitc"/>&nbsp;&nbsp;&nbsp;&nbsp;

                </p>
                <!-- end Homepage Description Paragraph -->
            </div>
        </div>
        <!-- end Home Section Content -->
        <!-- 4.2.4. Homepage Buttons Start -->

        <!-- end Homepage Buttons -->
    </div>
</div>
<!-- end Home Section  -->

<!-- 5. Other Sections Start -->
<div id="morePage">


    <!-- 8. Included Scripts Start -->
    <script src="dist/js/jquery-2.1.1.min.js"></script>
    <!-- Jquery v2.1.1 -->
    <script src="dist/js/tether.min.js"></script>
    <!-- Tether -->
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Bootstrap v4.0.0-alpha.6 -->
    <script src="dist/js/googlemap.js"></script>
    <!-- You must change address and description. Read Documantation. -->
    <script src="dist/js/jquery.form.min.js"></script>
    <!-- Jquery Forms 3.51.0-2014.06.20 -->
    <script src="dist/js/jquery.validate.min.js"></script>
    <!-- jQuery Validation Plugin - v1.12.0 -->
    <script src="dist/js/jquery.backstretch.min.js"></script>
    <!-- Backstretch - v2.0.4 -->
    <script src="dist/js/jquery.downCount.js"></script>
    <!-- Jquery Countdown Plugin -->

    <!-- Tweenlite 1.13.1 -->
    <script src="dist/js/canvas.js"></script>
    <!-- Spider Canvas -->
    <script src="dist/js/particles.js"></script>
    <!-- Particles Animations -->
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
    <script>
        $.backstretch([
            "dist/img/bg/bg2.jpg",
            "dist/img/bg/bg3.jpg",
            "dist/img/bg/bg4.jpg",
            "dist/img/bg/bg5.jpg",
        ], {duration: 3000, fade: 1500});
    </script>
    <!-- end Slide Background -->

</body>
</html>