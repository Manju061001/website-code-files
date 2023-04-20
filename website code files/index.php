<?php ob_start(); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <!-- ThemEBMSe Title -->
        <title>RFID Based Smart shopping cart for Smart City</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="dist/css/bootstrap.min.css">
        <!-- Bootstrap -->


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

    <!--
        You can change "theme-color"s
        theme-color="blue"
        theme-color="red"
        theme-color="green"
        theme-color="yellow"
        theme-color="purple"
        theme-color="orange"
    -->
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
                        <span class="animated-words">
                            <!-- There are words. You can add more texts in <b></b> tag. -->
<!--                            <b class="is-visible">EBMS.</b>-->

                        </span>
                    </h3>
                    <!-- end Loading Text Start -->

                    <!-- 4.2.3. Homepage Description Paragraph Start -->
                    <p class="description">
                        <b></b>Guided By :</b>  Mr.S.Sankar ganesh,<br>
 Assistant professor/ECE<br><b></b>
                        <br>Developed By :<br></b>
                        A.Agashi-19EC002<br>
  S.S.Manjunaathaa-19EC055<br>
  P.Manobalan-19EC056<br>

                    </p>
                    <!-- end Homepage Description Paragraph -->
                </div>
            </div>
            <!-- end Home Section Content -->
            <!-- 4.2.4. Homepage Buttons Start -->
            <div class="buttons">
                <form action="index.php" method="post" id="contact-form" style="margin-top:-100px;">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"
                                   required>
                        </div>
                        <div class="col-md-4">
                            <input type="password" class="form-control" name="pword" id="pword" placeholder="password"
                                   required>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-contact" id="submit-btn" name="btnsubmit"
                                    style="background-color: red;"
                                    value="SEnd">SUBMIT
                            </button>
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_REQUEST['btnsubmit'])) {
                    $uname = $_REQUEST['name'];
                    $pword = $_REQUEST['pword'];
                    if ($uname == "admin" && $pword == "admin") {
                        header('Location: adminhome.php');
                    } else if ($uname == "user" && $pword == "user") {
                        header('Location: userhome.php');
                    } else {
                        echo "<font color=red>Invalid Username/Password!</font>";
                    }
                }
                ?>
            </div>
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
        <script src="dist/js/TweenLite.min.js"></script>
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
<?php ob_flush(); ?>