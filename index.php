<?php 
include 'registeration/login_status.php';if ($login_key) { header("location:http://backspace.ind.in/index/index.php"); }
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="icon" href="img/logos.png">
    <title>BackSpace</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/button.min.css">
    <link rel="stylesheet" href="css/search-box.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="hamburgers-master/dist/hamburgers.min.css">
    <link rel="stylesheet" href="css/scroll_animation.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Alfa+Slab+One|Roboto|Kaushan+Script" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/my-slider.min.css" />
    <script src="js/ism-2.2.min.js"></script>
    <style>
        .ism-slider{
            position: relative;
        }
        .darrow{
            height: 148px;
            width: 137px;
            position: relative;
            top:78%;
            right: -76%;
            z-index: 200;
            
        }
    </style>
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrap-2">
        <div class="ism-slider" data-transition_type="zoom" data-play_type="loop" id="my-slider">
           <img src="img/down%20(2).gif" alt="backspace" class="darrow">
            <ol>
                <li> <img src="img/cover-0.jpg" alt="bit mesra">
                    <div class="col-md-3 col-sm-1"></div>
                    <div class="col-md-6 col-sm-10 col-xs-12">
                        <div class="ism-caption ism-caption-1" data-delay='600'>GIVE YOUR GOOD-BYES..<br>
                            <hr>A <br> <br>GOOD-BUYS..<br><small>AMONG YOUR </small> <br><br>CAMPUS-GUYS..
                            <hr>
                        </div>
                    </div>
                </li>
                <li> <img src="img/cover-2.jpg" alt="bit mesra">
                    <div class="col-md-3 col-sm-1"></div>
                    <div class="col-md-6 col-sm-10 col-xs-12">
                        <div class="ism-caption ism-caption-1 slide-1" data-delay='600'> ADVERTISE YOUR<br>
                            <hr><br> TALENT <br><br> RIGHT HERE AT FRONT PAGE.!
                            <hr><br></div>
                    </div>
                </li>
                <li> <img src="img/cover-1.jpg" alt="bit mesra">
                    <div class="col-md-3 col-sm-1"></div>
                    <div class="col-md-6 col-sm-10 col-xs-12">
                        <div class="ism-caption ism-caption-1 slide-2" data-delay='600'> IT'S ALL FREE..
                            <hr><br>AND<br>INTERESTING <br><br>JOIN US NOW..!!
                            <hr>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrap-1" id="navbar">
        <div class="container">
            <div class="row">
                <div class="header "> <img src="img/logos.png" class="logo col-md-1 col-sm-2 col-xs-4" alt="backspace">
                    <h1 class="backspace col-md-4 col-sm-4 col-xs-6">BackSpace</h1>
                </div>
                <div class="ham-menu"> <button class="hamburger hamburger--arrow col-xs-6" type="button"> <span class="hamburger-box"> <span class="hamburger-inner"></span> </span> </button></div>
                <div class="nav-menu col-md-7 col-sm-7 col-xs-6">
                    <ul>
                        <li><a href="../registeration/login.php"><span class="fa fa-user user"></span></a></li>
                        <li><a href="../buy/categories.php">Buy</a></li>
                        <li><a href="../choose-cat/sell.php">Sell</a></li>
                        <li><a href="adv/adv.php">Advertise</a></li>
                        <li><a href="index.php#about">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <a href="#" id="scroll" style="display: none;"><span></span></a>
    <div class="wrap-3">
        <div class="container">
            <div class="row"></div>
        </div>
    </div>
    <div class="wrap-4">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 col-sm-4 col-xs-2"></div>
                <div class="col-md-4 col-sm-4 col-xs-8 new-product">
                    <h2> Trending Products</h2>
                    <hr class="wow fadeInLeft">
                </div>
            </div>
            <div class="row ">
                <div class="rowgrid">
                    <div class="column"><a href="buy/categories.php"></a><img src="img/electronics-1j.jpg" class="maal maal-1 wow fadeInDown" style="width:100%"></a></div>
                    <div class="column"> <a href="buy/categories.php"><img src="img/box.jpg" class="maal wow fadeInDown" style="width:100%"></a><a href="buy/categories.php"><img src="img/product-2.jpg" class="maal wow fadeInDown" style="width:100%"></a></div>
                    <div class="column"> <a href="buy/categories.php"><img src="img/drafter.jpg" class="maal maal-3 wow fadeInDown" style="width:100%"> </a><a href="buy/categories.php"><img src="img/lab.jpg" class="maal wow fadeInDown" style="width:100%"></a></div>
                    <div class="column"><a href="buy/categories.php"> <img src="img/product-3.jpg" class="maal wow fadeInDown" style="width:100%"> </a><a href="buy/categories.php"><img src="img/calci.jpg" class="maal wow fadeInDown" style="width:100%"></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12"> <img src="img/sell.jpg" alt="selling at backspace" class="wow fadeIn">
                        <div class="btn"  onclick="window.open('https://backspace.ind.in');"><a href="choose-cat/sell.php"> <button class="btn-pill wow fadeIn"> <span>SELL One Now!!</span> </a></button></div>
                    </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5 about-sell wow fadeIn">
                    <h3>Sell For More.Buy For Less</h3>
                    <hr>
                    <p>A buy-and-sell system is nothing more than purchasing new or previously owned products that we all need, use or want at a cheap price and then reselling these same items for the price they deserve. This fruitful process may become irritating and a headache if you don't use a correct platform. Clearly, there are some old traditional systems for this in our college, such as messaging in each and every WhatsApp group or in DC. but do they really provide you with complete details? There exist intermediates on our campus who do the same thing but they take their charges too. <br> BackSpace provides you independency to Directly contact with your Buyers with No extra charges on any corner. <br>
                    Give it a try :)</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-6">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 about-advertise wow fadeIn">
                    <h3>Advertise And Get Ahead</h3>
                    <hr>
                    <p>The worst enemy to creativity is self-doubt. <br>
                        You might have heard about Google Ads. Yes, those advertisements on every corner in a website. They are actually based on your history. So far, this is the best way to advertise nowadays.<br>
                        Now the question is, what's the relation of all these with BackSpace? <br>
                        If you have something to advertise like, Your YouTube channel, Your T-shirt business, Recruitments, Campus Events, etc then Your Ads Will be shown here in BackSpace and not the Google Ads. Without taking any charges BackSpace showcases them for you because we respect your creativity.we will be happy to help you grow and add to our growth.
                        <br> Give us a chance :)</p>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-6 col-xs-12 ad-img"> <img src="img/ad-img.jpg" alt="advertise on backspace" class="wow fadeIn">
                    <div class="btn"><a href="adv/adv.php"> <button class="btn-shine wow fadeIn"> <span>Advertise Now!!</span> </a></button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-7" id="about">
        <div class="container">
            <div class="row about">
                <div class="col-sm-6 col-xs-12 wow slideInRight">
                    <h2>What's </h2>
                    <div class="bright" style="color: #d50b0b;"> BACKSPACE..?</div>
                    <hr>
                    <p>Have something in your cupboard/room which is no more of use and it's only lying around a corner occupying space? Want to dispose but not throw? Come visit BACKSPACE, hand it over to eligible buyers and make your day. <br>
                    Have something in your wish-list but cannot buy new, visit BACKSPACE and get it at affordable prices from their proud owners. <br>
                    Have done something creative but need a platform to showcase? Have done something exciting and innovative but need extended support from people? <br>
                    BACKSPACE is where you need to be...<br><br>
                    BACKSPACE is not just another web portal, it's a platform, to SELL, BUY and ADVERTISE things, talents and ideas. <br>
                    It's to the BITians, for the BITians, by the BITians. <br><br>
                    For any clarifications, suggestions and queries, don't hesitate, simply click on the mail icon below. We are more than happy to help you grow and add to our growth.
                    </p> <a href="mailto:backspace.ind.in@gmail.com"><img src="img/mail.jpg" class="icon-email" alt="mail"></a>
                </div>
                <div class="col-sm-1 xs-hide">
                    <div class="verticle-line"> .</div>
                </div>
                <div class="col-sm-5 col-xs-12 nehal wow slideInLeft">
                    <h2>About Developer</h2>
                    <hr> <img src="img/nehal.jpg" alt="Nehal" class="dp">
                    <div class="social">
                        <ul>
                            <li><a href="https://www.facebook.com/nehal.shrivashtava" target="_blank" id="facebook"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="https://www.instagram.com/shrivashtava_nehal/" target="_blank" id="insta"><img src="img/insta.png" alt="insta"></a></li>
                            <li><a href="https://www.linkedin.com/in/nehal-shrivashtava-188aa9171/" target="_blank" id="linkid"><span class="fa fa-linkedin-square"></span></a></li>
                        </ul>
                    </div> <br class="nine92"> <br class="nine92"> <br class="nine92">
                    <h3>Nehal Srivastava
                        <hr> B.tech-IT-2k18 <br></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-8">
        <div class="container">
            <div class="row">
                <p>BACKSPACE&copy; 2019</p>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
    <script>
        $(function() {
            $(".hamburger").click(function(e) {
                $(".hamburger").toggleClass("is-active");
                $(".nav-menu").slideToggle()
            })
        })

    </script>
    <script src="js/scroll_script.js"></script>
    <script>
        new WOW().init();

    </script>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-85px";
            }
        }

    </script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#scroll').fadeIn();
                } else {
                    $('#scroll').fadeOut();
                }
            });
            $('#scroll').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
        });

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>
        $(window).load(function() {
            $(".se-pre-con").fadeOut("slow");;
        });

    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145310081-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-145310081-1');

    </script>

</body>

</html>
