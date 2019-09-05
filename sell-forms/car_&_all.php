<?php
session_start();
include '../registeration/login_status.php';

if (!$login_key)
header("location:http://backspace.ind.in/registeration/login.php");
$u_email=$_SESSION["email"];
$u_mob=$_SESSION["u_mobile"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Sell</title>
    <link rel="icon" href="img/logos.png">
    <!--    BOOTSTRAP SECTION AND RESPONSIVE PART-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--    FOR BUTTONS-->
    <link rel="stylesheet" href="css/button.min.css">
    <!--MY EDITINGS-->
    <link rel="stylesheet" href="css/style-sf.css">
    <link href="https://fonts.googleapis.com/css?family=Croissant+One&display=swap" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!--    FONT-FAMILY OF LOGO-->
    <link href="https://fonts.googleapis.com/css?family=Sonsie+One&display=swap" rel="stylesheet">
    <!--  FOR HAMBURGER  -->
    <link rel="stylesheet" href="hamburgers-master/dist/hamburgers.min.css">


</head>

<body>
    <div class="wrap-1" id="navbar">
        <div class="container">
            <div class="row">
                <div class="header ">
                    <img src="img/logos.png" class="logo col-md-1 col-sm-2 col-xs-4">
                    <h1 class="backspace col-md-4 col-sm-4 col-xs-6">BackSpace</h1>
                </div>

                <div class="ham-menu">
                    <button class="hamburger hamburger--arrow col-xs-6" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>


                <div class="nav-menu col-md-7 col-sm-7 col-xs-6">

                    <ul>
                        <li class="down"><a><span class="fa fa-user user"></span><sub><span class="fa fa-angle-down user"></span></sub></a></li>
                        <li><a href="../index/index.php">Home</a></li>
                        <li><a href="../buy/categories.php">Buy</a></li>

                        <li><a href="../adv/adv.php">Advertise</a></li>
                        <li><a href="../index/index.php#about">About</a></li>
                        <div>
                            <li class="sub-cat-1"><a href="../registeration/account.php"><span class="fa fa-gear drop"></span>account</a></li>
                        </div>
                        <div>
                            <li class="sub-cat-1"><a href="../registeration/logout.php"><span class="fa fa-power-off drop"></span>logout</a></li>
                        </div>



                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="wrap-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 heading">
                    <h2>Give Us Some Details..</h2>
                    <hr class="for-mobiles">

                </div>
            </div>
        </div>
    </div>
    <div class="wrap-3">
        <div class="container">
            <div class="col-sm-1"></div>
            <form action="upload.php" id="sform" method="POST" enctype="multipart/form-data" name="form">
                <div class="row col-sm-10 col-xs-12 form">
                    <div class="breadcrumb">
                        <a href="../choose-cat/sell.php">Categories</a>/
                        Car And It's Accesories/
                    </div>
                    <label for="brand-name" class="req">Ad Title : </label><br>
                    <input type="text" id="brand-name" name="brand" autocomplete="off" maxlength="60" required min="3">
                    <p>(name of Instrument/Equipment/Brand/type etc)</p><br>

                    <label for="description" class="req">Description : </label><br>
                    <textarea name="decription" id="description" cols="35" rows="3" required></textarea>
                    <p>(Must Include Condition, Features,Size..etc of your product,<br>if possible also include Date of Purchase)</p><br>

                    <label for="reason" class="req">Reason Of Selling :</label><br>
                    <textarea name="reason" id="reason" cols="30" rows="3" required></textarea>
                    <p>(Try to give genuine and honest reason of selling for example is it for money or it's of no use for you.)</p><br>

                    <label for="price" class="req">Set a Price :</label><br>

                    <input type="number" id="price" name="price" autocomplete="off" maxlength="6" required placeholder="Rs.">


                    <label for="negotiable" class="req nego">Is It Negotiable ?</label>
                    <input type="checkbox" id="nego" name="nego">
                    <hr>
                    <h2>Contact Details :</h2>

                    <label for="hostel" class="req">Hostel no (H-):</label><br>
                    <input type="number" id="hostel" name="hostel" autocomplete="off" min="1" max="20" required>
                    <h6 id="imp">(Fill atleast one fields which u want to be visible for other users to contact you.)</h6>
                    <label for="mob"><small>Mobile No (+91):</small></label><br>
                    <input type="number" id="mob" name="mob" value="<?php echo $u_mob ?>" maxlength="10"><br><br>

                    <label for="whatsapp"><small>WhatsApp No :</small></label><br>
                    <input type="number" id="whatsapp" name="whatsapp" autocomplete="off" maxlength="10"><br><br>

                    <label for="mail"><small>E-mail Id :</small></label><br>
                    <input type="email" id="mail" name="mail" value="<?php echo $u_email ?>"><br><br>

                    <label for="fb"><small>Facebook username :</small></label><br>
                    <input type="text" id="fb" name="fb" autocomplete="off"><br><br>

                    <label for="insta"><small>Instagram username :</small></label><br>
                    <input type="text" id="insta" name="insta" autocomplete="off"><input type="text" value="car_&_all" style="display:none;" id="cat" name="cat"><br><br>


                    <hr>
                    <h2>Upload Some Pics</h2>
                    <p id="imp">(atleast 1)</p>
                    <p style="color:hotpink;font-family: monospace;font-size:1.25em">(*NO RESTRICTIONS ON SIZE* but format must be in .jpg or .jpeg or .png)</p>
                    
                    <sup><span class="fa fa-asterisk" style="color:red;font-size:15px;"></span></sup>
                    <label class="icon-upload"><img src="img/upload.png" id="blah" alt="backspace"><input type="file" class="input1" accept="image/*" id="files" name="files[]" multiple="multiple" required style="display: none !important" onchange="readURL(this);">
                    </label><span class="glyphicon glyphicon-remove-circle" id="cancel" style="display: none;color:red;font-size:25px;"></span>
                    
                    <label class="icon-upload"><img src="img/upload.png" id="blah2" alt="backspace">
                    <input type="file" class="input2" accept="image/*" id="files" name="files[]" multiple="multiple" style="display: none !important" onchange="read2URL(this);"></label><span class="glyphicon glyphicon-remove-circle" id="cancel2" style="display: none;color:red;font-size:25px;"></span>
                        
                    <label class="icon-upload"><img src="img/upload.png" id="blah3" alt="backspace"><input type="file" class="input3" accept="image/*" id="files" name="files[]" multiple="multiple" style="display: none !important" onchange="read3URL(this);"></label><span class="glyphicon glyphicon-remove-circle" id="cancel3" style="display: none;color:red;font-size:25px;"></span>

                    <label class="icon-upload"><img src="img/upload.png" id="blah4" alt="backspace"><input type="file" class="input4" accept="image/*" id="files" name="files[]" multiple="multiple" style="display: none !important" onchange="read4URL(this);"></label><span class="glyphicon glyphicon-remove-circle" id="cancel4" style="display: none;color:red;font-size:25px;"></span> 

                    <br class="hide-mobile">
                        
                    <label class="icon-upload"><img src="img/upload.png" id="blah8" alt="backspace"><input type="file" class="input8" accept="image/*" id="files" name="files[]" multiple="multiple" style="display: none !important" onchange="read8URL(this);"></label><span class="glyphicon glyphicon-remove-circle" id="cancel8" style="display: none;color:red;font-size:25px;"></span>
                    
                    <label class="icon-upload"><img src="img/upload.png" id="blah5" alt="backspace"><input type="file" class="input5" accept="image/*" id="files" name="files[]" multiple="multiple" style="display: none !important" onchange="read5URL(this);"></label><span class="glyphicon glyphicon-remove-circle" id="cancel5" style="display: none;color:red;font-size:25px;"></span> 
                    
                    <label class="icon-upload"><img src="img/upload.png" id="blah6" alt="backspace"><input type="file" class="input6" accept="image/*" id="files" name="files[]" multiple="multiple" style="display: none !important" onchange="read6URL(this);"></label><span class="glyphicon glyphicon-remove-circle" id="cancel6" style="display: none;color:red;font-size:25px;"></span> 
                    
                    <label class="icon-upload"><img src="img/upload.png" id="blah7" alt="backspace"><input type="file" class="input7" accept="image/*" id="files" name="files[]" multiple="multiple" style="display: none !important" onchange="read7URL(this);"></label><span class="glyphicon glyphicon-remove-circle" id="cancel7" style="display: none;color:red;font-size:25px;"></span>
                    
                    <hr>
                            <label for="motivation"><small>Any Extra Comments from you to your buyers for this product?</small></label><input type="text" name="moti" id="moti">

                            <hr>

                        <input type="submit" id="submit" name="submit" class="btn-shine" onclick="return anyvalidate()" style="margin-bottom:30px">
                </div>
            </form>
        </div>
    </div>
    <div class="wrap-4">
        <div class="container">
            <div class="row">
                <p>BACKSPACE &copy; 2019</p>
            </div>
        </div>
    </div>


    <!--    SCRIPTS FOR JQUERY AND BOOTSTRAP-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--    SCRIPTS FOR HAMBURGER-->
    <script>
        $(function() {
            $(".hamburger").click(function(e) {
                $(".hamburger").toggleClass("is-active");
                $(".nav-menu").slideToggle()
            })
        })

    </script>
    <script>
        $(document).ready(function() {
            $(".down").click(function() {
                $(".sub-cat-1").toggle(350);
            });
        });

    </script>

    <!--FOR FORM VALIDATION-->
    <script>
        function anyvalidate() {
            if (form.mob.value == "" &&
                form.whatsapp.value == "" &&
                form.mail.value == "" &&
                form.fb.value == "" &&
                form.insta.value == "") {
                alert("You need to fill at least 1 contact field to conduct a submission");
                return false;
            } else {
                var mobile = document.getElementById('mob').value;
                var whatsapp = document.getElementById('whatsapp').value;
                var Regex = /^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[6789]\d{9}|(\d[ -]?){10}\d$/gm;
                if (mobile != "") {
                    if (!Regex.test(mobile)) {
                        alert('Invalid Mobile Number');
                        return false;
                    }
                }
                
            }
        }

    </script>
    <!--    FOR IMAGE UPLOADED PICTURES-->
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        $(".input1").change(function () {
                readURL(this);
                $('#blah').show();
                $('#cancel').show();
                });
        $('#cancel').click(function(e)
                   {
                       $('#input1').val("");
                       $('#blah')
                           .attr("src","img/upload.png")
                           .width(64)
                            .height(64); $('#cancel').hide();
                   });

        function read2URL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah2')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
            $(".input2").change(function () {
                read2URL(this);
                $('#blah2').show();
                $('#cancel2').show();
                });
        $('#cancel2').click(function(e)
                   {
                       $('#input2').val("");
                       $('#blah2')
                           .attr("src","img/upload.png")
                           .width(64)
                            .height(64); $('#cancel2').hide();
                   });
        
        function read3URL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah3')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        
        $(".input3").change(function () {
                read3URL(this);
                $('#blah3').show();
                $('#cancel3').show();
                });
        $('#cancel3').click(function(e)
                   {
                       $('#input3').val("");
                       $('#blah3')
                           .attr("src","img/upload.png")
                           .width(64)
                            .height(64); $('#cancel3').hide();
                   });

        function read4URL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah4')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        
        $(".input4").change(function () {
                read4URL(this);
                $('#blah4').show();
                $('#cancel4').show();
                });
        $('#cancel4').click(function(e)
                   {
                       $('#input4').val("");
                       $('#blah4')
                           .attr("src","img/upload.png")
                           .width(64)
                            .height(64); $('#cancel4').hide();
                   });

        function read5URL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah5')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
            $(".input5").change(function () {
                read5URL(this);
                $('#blah5').show();
                $('#cancel5').show();
                });
        $('#cancel5').click(function(e)
                   {
                       $('#input5').val("");
                       $('#blah5')
                           .attr("src","img/upload.png")
                           .width(64)
                            .height(64); $('#cancel5').hide();
                   });
        
        function read6URL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah6')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        
        $(".input6").change(function () {
                read6URL(this);
                $('#blah6').show();
                $('#cancel6').show();
                });
        $('#cancel6').click(function(e)
                   {
                       $('#input6').val("");
                       $('#blah6')
                           .attr("src","img/upload.png")
                           .width(64)
                            .height(64); $('#cancel6').hide();
                   });

        function read7URL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah7')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        
        $(".input7").change(function () {
                read7URL(this);
                $('#blah7').show();
                $('#cancel7').show();
                });
        $('#cancel7').click(function(e)
                   {
                       $('#input7').val("");
                       $('#blah7')
                           .attr("src","img/upload.png")
                           .width(64)
                            .height(64); $('#cancel7').hide();
                   });
        
        $(".input8").change(function () {
                read8URL(this);
                $('#blah8').show();
                $('#cancel8').show();
                });
        $('#cancel8').click(function(e)
                   {
                       $('#input8').val("");
                       $('#blah8')
                           .attr("src","img/upload.png")
                           .width(64)
                            .height(64); $('#cancel8').hide();
                   });

        function read8URL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah8')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
    <script>
        var myFile = document.getElementById('files');

        //binds to onchange event of the input field
        myFile.addEventListener('change', function() {
            //this.files[0].size gets the size of your file in bytes.

            if (this.files[0].size > 19000000) {
                alert("size of picture is more than 20MB.This will apper here but it won't be accepted.Better Remove it.");
            }

        });

    </script>

</body>

</html>
