<?php session_start(); include '../registeration/login_status.php';if (!$login_key) header("location:http://backspace.ind.in/registeration/login.php");//define("HOST","localhost");//Dont forget to change your server or Host name //define("USER","root");//Dont forget to chnage your database username //define("PASSWORD","");//Dont forget to change your password //define("DB","db");//your database name$finalname=$_POST['picname']; $con = mysqli_connect(HOST,USER,PASSWORD,DB); if($con === false){ die("ERROR: Could not connect. " . mysqli_connect_error()); } $sql = "SELECT * FROM products WHERE file='$finalname'"; if($result = mysqli_query($con, $sql)){ if(mysqli_num_rows($result) > 0){ $row = mysqli_fetch_array($result);$buid=$row['buid']; $email=$row['email']; $brand_name=$row['brand_name']; $desc=$row['description']; $reason=$row['reason']; $mobile=$row['mobile']; $whatsapp=$row['whatsapp']; $mail=$row['e_mail_id']; $fb=$row['fb']; $insta=$row['insta']; $moti=$row['motivation']; $hostel=$row['hostel']; $price=$row['price']; $u_name=$row['u_name']; $category=$row['category']; } } ?><!DOCTYPE html><html lang="en"><head><title>Details</title><meta charset="utf-8"><meta name="description" content=""><meta name="keywords" content=""><link rel="icon" href="img/logos.png"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/bootstrap.min.css"><link rel="stylesheet" href="css/style-bA.min.css"><link href="css/font-awesome.min.css" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Croissant+One&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Sonsie+One&display=swap" rel="stylesheet"><link rel="stylesheet" href="hamburgers-master/dist/hamburgers.min.css"><style>.table>tbody>tr>td,.table>tbody>tr>th,.table>tfoot>tr>td,.table>tfoot>tr>th,.table>thead>tr>td,.table>thead>tr>th{padding:0px}</style></head><body><div class="wrap-1" id="navbar"><div class="container"><div class="row"><div class="header "> <img src="img/logos.png" class="logo col-md-1 col-sm-2 col-xs-4"><h1 class="backspace col-md-4 col-sm-4 col-xs-6">BackSpace</h1></div><div class="ham-menu"> <button class="hamburger hamburger--arrow col-xs-6" type="button"> <span class="hamburger-box"> <span class="hamburger-inner"></span> </span> </button></div><div class="nav-menu col-md-7 col-sm-7 col-xs-6"><ul><li class="down"><a><span class="fa fa-user user"></span><sub><span class="fa fa-angle-down user"></span></sub></a></li><li><a href="../index/index.php">Home</a></li><li><a href="../choose-cat/sell.php">Sell</a></li><li><a href="../adv/adv.php">Advertise</a></li><li><a href="../index/index.php#about">About</a></li><div><li class="sub-cat-1"><a href="../registeration/account.php"><span class="fa fa-gear drop"></span>account</a></li></div><div><li class="sub-cat-1"><a href="../registeration/logout.php"><span class="fa fa-power-off drop"></span>logout</a></li></div></ul></div></div></div></div><div class="wrap-2"><div class="container"><div class="row"><div class="col-md-2 col-sm-2"></div><div class="col-md-8 col-sm-8 col-xs-12 pics"><div id="carousel-example-generic" class="carousel slide" data-ride="carousel"><ol class="carousel-indicators"><li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li><li data-target="#carousel-example-generic" data-slide-to="1"></li><li data-target="#carousel-example-generic" data-slide-to="2"></li></ol><div class="carousel-inner" role="listbox"> <?php $sql = "SELECT file FROM products WHERE buid='$buid' AND brand_name='$brand_name' AND description='$desc' AND reason='$reason' AND price='$price' AND category='$category'"; if($result = mysqli_query($con, $sql)){ for($i=1;$i<=mysqli_num_rows($result);$i++) { $main = mysqli_fetch_array($result); ?><?php if($i==1) { ?><div class="item active"> <img src="all_products/<?php echo $main["file"] ?>" alt="First slide" width="100%"> <a href="all_products/<?php echo $main["file"] ?>" download class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="display:block;margin:auto">Download this pic</a></div> <?php } else { ?><div class="item"> <img src="all_products/<?php echo $main["file"] ?>" alt="second slide" width="100%"> <a href="all_products/<?php echo $main["file"] ?>" download class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="display:block;margin:auto">Download this pic</a></div> <?php } }} ?></div><a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a></div></div></div><div class="row"></div></div></div><div class="wrap-3"><div class="container"><div class="row"><div class="col-md-2 col-sm-2 col-xs-4"><h2 class="txt">Products's..</h2><hr></div></div><div class="row"><div class="col-md-3 col-sm-2 "></div><div class="col-md-6 col-sm-8 col-xs-12"><table class="table table-hover"><thead><tr><th scope="col" class="cells-left">Brand_Name</th><th scope="col" class="cells"><?php echo $brand_name ?></th></tr><tr><th scope="row" class="cells-left">Price</th><td class="cells">&#8377; <?php echo $price ?></td></tr><tr><th scope="row" class="cells-left">Description</th><td class="cells"><?php echo nl2br($desc) ?></td></tr></thead><tbody class="hov"><tr><th scope="row" class="cells-left">Reason_Of_<wbr>Selling</th><td class="cells"><?php echo nl2br($reason) ?></td></tr><?php if($moti!=NULL){ echo '<tr>'; echo '<th scope="row" class="cells-left">Extra Comments :</th>'; echo '<td class="cells">'.$moti.'</td>'; echo '</tr>'; } ?></tbody></table></div></div><div class="row"><div class="col-md-2 col-sm-2 col-xs-4"><h2 class="txt">Owner's..</h2><hr></div></div><div class="row"><div class="col-md-3 col-sm-2"></div><div class="col-md-6 col-sm-8 col-xs-12"><table class="table table-hover"><thead><tr><th scope="col" class="cells-left">Username</th><th scope="col" class="cells"><?php echo $u_name ?></th></tr><tr><th scope="row" class="cells-left">Hostel</th><td class="cells"><?php echo $hostel ?></td></tr></thead><tbody class="hov"> <?php if($mobile!=NULL){ echo '<tr onclick="phn('.$mobile.')">'; echo '<th scope="row" class="cells-left">Mobile No.</th>'; echo '<td class="cells">'.'<img src="https://img.icons8.com/officel/26/000000/iphone.png">'.$mobile.'<small> <wbr>(click to call) </small>'.'</td>'; echo '</tr>'; } if($whatsapp!=NULL){ echo '<tr onclick="whatsapp('.$whatsapp.')">'; echo '<th scope="row" class="cells-left">Whatsapp No.</th>'; echo '<td colspan="2" class="cells">'.'<img class="whatsapp" src="img/whatsapp.png">'.$whatsapp.'<small> <wbr>(click to chat) </small>'.'</td>'; echo '</tr>'; } if($mail!=NULL){ echo '<tr onclick="mail('.$mail.')">'; echo '<th scope="row" class="cells-left">Email-Id</th>'; echo '<td colspan="2" class="cells">'.'<img src="https://img.icons8.com/color/26/000000/address-book.png">'.$mail.'<small> <wbr>(click to mail) </small>'.'</td>'; echo '</tr>'; } if($fb!=NULL){ echo '<tr onclick="fb('.$fb.')">'; echo '<th scope="row" class="cells-left">facebook userid</th>'; echo '<td colspan="2" class="cells">'.'<img src="https://img.icons8.com/color/26/000000/facebook.png">'.$fb.'<small> <wbr>(click to chat) </small>'.'</td>'; echo '</tr>'; } if($insta!=NULL){ echo '<tr onclick="insta('.$insta.')">'; echo '<th scope="row" class="cells-left">Insta username</th>'; echo '<td colspan="2" class="cells">'.'<img src="https://img.icons8.com/color/26/000000/instagram-new.png">'.$insta.'<small> <wbr>(click to chat) </small>'.'</td>'; echo '</tr>'; } ?></tbody></table></div></div></div></div><div class="wrap-4 footer"><div class="container"><div class="row"><p>BACKSPACE &copy; -2019</p></div></div></div> <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <script src="js/bootstrap.min.js"></script> <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]--> <script>$(function(){$(".hamburger").click(function(e){$(".hamburger").toggleClass("is-active");$(".nav-menu").slideToggle()})})</script> <script>$(document).ready(function(){$(".down").click(function(){$(".sub-cat-1").toggle(350);});$(".appwhats").click(function(){window.location.href="https://wa.me/9430197988";});});</script> <script>function whatsapp(q){window.location.href="https://wa.me/91"+q;} function phn(q){window.location.replace("tel:"+q);} function mail(q){window.location.replace("mailto:"+q);} function fb(q){window.location.href="https://facebook.com/";} function insta(q){window.location.href="https://instagram.com/";}</script> </body></html>