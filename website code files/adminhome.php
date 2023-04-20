<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Theme Title -->
    <title>RFID Based Smart shopping cart for Smart People</title>

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
        var myVar = setInterval(function () {
            showcurrent()
        }, 2000);

        function showcurrent() {
//            alert("Called");
            var ans;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    ans = this.responseText;
                    document.getElementById('showdata').innerHTML = ans;
                }
            };
            xmlhttp.open("GET", "loadcurrent.php", true);
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
                    <span>RFID based smart shopping cart for Smart people</span>
                    <br><br>
                    <span class="animated-words">
                            <!-- There are words. You can add more texts in <b></b> tag. -->
                            <?php
                            if (isset($_REQUEST['m'])) {
                                echo '<script>alert("Thank   You for purchasing! ");</script>';
                            }
                            ?>
                            <b class="is-visible"
                               style="text-transform: capitalize;font-size: 14px; color: #00ff00"></b>
                        <!--                            <b>in </b>-->
                        <!--                            <b>IOT.</b>-->
                        </span>
                </h3>
                <!-- end Loading Text Start -->

                <!-- 4.2.3. Homepage Description Paragraph Start -->
                <p class="description">
                <h2>Trolley ID : 01</h2>

                <div id="showdata"></div>
                
                <br><Br>
                    <a href="reset.php" style="color:white;">Reset/Cancel</a>

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