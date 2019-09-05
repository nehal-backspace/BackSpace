<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$order=$_POST["pass"];
$buid=$_POST["id"];
$email=$_POST["email"];
$position=$_POST["position"];
$total=$_POST["total"];
$brand=$_POST["brand"];
$source=$_POST["path"];
$picname=$_POST["picname"];
$name=$_POST["name"];
$error=0;
///////////////////MUST BE CHANGED
//$newfile= "C:\wamp64\www\Project\\registeration\user_files/".$buid."/".$picname;
$newfile= $_SERVER['DOCUMENT_ROOT'] ."/registeration/user_files/".$buid."/".$picname;
//$finalfile="C:\wamp64\www\Project/buy/all_products/".$picname;

$finalfile=$_SERVER['DOCUMENT_ROOT'] ."/buy/all_products/".$picname;
$trashfile=$_SERVER['DOCUMENT_ROOT'] ."/buy/trash_pics/".$picname;
define("HOST","localhost");//Dont forget to change your server or Host name
define("USER","nehal");//Dont forget to chnage your database username
define("PASSWORD","N@ipatahai18");//Dont forget to change your password
define("DB","registrationdb");//your database name



if($order=="*******"){
    
    if (copy($source, $newfile)) {
        echo "success\n";
        
    }
    else{
        echo "not copied to user's directory";  
        $error=1;
    }
    
    if($error==0 && rename ($source,$finalfile)){
        echo "removed too";
        if($position==$total){
            
            $to=$email;
			$subject = 'Your Product Details has been Successfully uploaded';
			$from = 'backspace.ind.in@gmail.com';
			 
			
			 
			// Compose a simple HTML email message
			$message = '<!doctype html><html><head><meta name="viewport" content="width=device-width" /><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><style>img{border:none;-ms-interpolation-mode:bicubic;max-width:100%}body{background-color:#f6f6f6;font-family:sans-serif;-webkit-font-smoothing:antialiased;font-size:14px;line-height:1.4;margin:0;padding:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}table{border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;width:100%}table td{font-family:sans-serif;font-size:14px;vertical-align:top}.body{background-color:#f6f6f6;width:100%}.container{display:block;margin:0 auto !important;max-width:580px;padding:10px;width:580px}.content{box-sizing:border-box;display:block;margin:0 auto;max-width:580px;padding:10px}.main{background:#fff;border-radius:3px;width:100%}.wrapper{box-sizing:border-box;padding:20px}.content-block{padding-bottom:10px;padding-top:10px}.footer{clear:both;margin-top:10px;text-align:center;width:100%}.footer td, .footer p, .footer span, .footer a{color:#999;font-size:12px;text-align:center}h1,h2,h3,h4{color:#000;font-family:sans-serif;font-weight:400;line-height:1.4;margin:0;margin-bottom:30px}h1{font-size:35px;font-weight:300;text-align:center;text-transform:capitalize}p,ul,ol{font-family:sans-serif;font-size:14px;font-weight:normal;margin:0;margin-bottom:15px}p li, ul li, ol li{list-style-position:inside;margin-left:5px}a{color:#3498db;text-decoration:underline}.btn{box-sizing:border-box;width:100%}.btn>tbody>tr>td{padding-bottom:15px}.btn table{width:auto}.btn table td{background-color:#fff;border-radius:5px;text-align:center}.btn a{background-color:#fff;border:solid 1px #3498db;border-radius:5px;box-sizing:border-box;color:#3498db;cursor:pointer;display:inline-block;font-size:14px;font-weight:bold;margin:0;padding:12px 25px;text-decoration:none;text-transform:capitalize}.btn-primary table td{background-color:#3498db}.btn-primary a{background-color:#3498db;border-color:#3498db;color:#fff}.last{margin-bottom:0}.first{margin-top:0}.align-center{text-align:center}.align-right{text-align:right}.align-left{text-align:left}.clear{clear:both}.mt0{margin-top:0}.mb0{margin-bottom:0}.preheader{color:transparent;display:none;height:0;max-height:0;max-width:0;opacity:0;overflow:hidden;mso-hide:all;visibility:hidden;width:0}.powered-by a{text-decoration:none}hr{border:0;border-bottom:1px solid #f6f6f6;margin:20px 0}@media only screen and (max-width: 620px){table[class=body] h1{font-size:28px !important;margin-bottom:10px !important}table[class=body] p, table[class=body] ul, table[class=body] ol, table[class=body] td, table[class=body] span, table[class=body] a{font-size:16px !important}table[class=body] .wrapper, table[class=body] .article{padding:10px !important}table[class=body] .content{padding:0 !important}table[class=body] .container{padding:0 !important;width:100% !important}table[class=body] .main{border-left-width:0 !important;border-radius:0 !important;border-right-width:0 !important}table[class=body] .btn table{width:100% !important}table[class=body] .btn a{width:100% !important}table[class=body] .img-responsive{height:auto !important;max-width:100% !important;width:auto !important}}@media all{.ExternalClass{width:100%}.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%}.apple-link a{color:inherit !important;font-family:inherit !important;font-size:inherit !important;font-weight:inherit !important;line-height:inherit !important;text-decoration:none !important}#MessageViewBody a{color:inherit;text-decoration:none;font-size:inherit;font-family:inherit;font-weight:inherit;line-height:inherit}.btn-primary table td:hover{background-color:#34495e !important}.btn-primary a:hover{background-color:#34495e !important;border-color:#34495e !important}}</style></head><body class=""> <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span><table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body"><tr><td>&nbsp;</td><td class="container"><div class="content"><table role="presentation" class="main"><tr><td class="wrapper"><table role="presentation" border="0" cellpadding="0" cellspacing="0"><caption><?xml version="1.0" encoding="UTF-8" standalone="no"?> <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="160 0 320 400" width="111" height="111" > <defs> <path d="M340.59 153.52L342 382.65L226.73 267.36L340.59 153.52Z" id="ajdxXpFf4"></path> <path d="M278 268.08C278 262.52 273.07 258 267 258C260.93 258 256 262.52 256 268.08C256 273.65 260.93 278.16 267 278.16C273.07 278.16 278 273.65 278 268.08Z" id="k5SavhBybJ"></path> <path d="M320 314.08C320 308.52 315.07 304 309 304C302.93 304 298 308.52 298 314.08C298 319.65 302.93 324.16 309 324.16C315.07 324.16 320 319.65 320 314.08Z" id="c72bMsI2Je"></path> <path d="M320 268.08C320 262.52 315.07 258 309 258C302.93 258 298 262.52 298 268.08C298 273.65 302.93 278.16 309 278.16C315.07 278.16 320 273.65 320 268.08Z" id="bdYdWzru8"></path> <path d="M320 222.08C320 216.52 315.07 212 309 212C302.93 212 298 216.52 298 222.08C298 227.65 302.93 232.16 309 232.16C315.07 232.16 320 227.65 320 222.08Z" id="b1S4la3Dsc"></path> <path d="M376 268.08C376 262.52 371.07 258 365 258C358.93 258 354 262.52 354 268.08C354 273.65 358.93 278.16 365 278.16C371.07 278.16 376 273.65 376 268.08Z" id="a3WQXd9tOO"></path> <path d="M376 314.08C376 308.52 371.07 304 365 304C358.93 304 354 308.52 354 314.08C354 319.65 358.93 324.16 365 324.16C371.07 324.16 376 319.65 376 314.08Z" id="e3iMF16P6b"></path> <path d="M376 222.08C376 216.52 371.07 212 365 212C358.93 212 354 216.52 354 222.08C354 227.65 358.93 232.16 365 232.16C371.07 232.16 376 227.65 376 222.08Z" id="e5a79da1Qx"></path> <path d="M421 268.08C421 262.52 416.07 258 410 258C403.93 258 399 262.52 399 268.08C399 273.65 403.93 278.16 410 278.16C416.07 278.16 421 273.65 421 268.08Z" id="bk5CTtezM"></path> </defs> <g> <g> <g> <use xlink:href="#ajdxXpFf4" opacity="1" fill="#e84e4e" fill-opacity="1"></use> </g> <g> <use xlink:href="#k5SavhBybJ" opacity="1" fill="#000000" fill-opacity="1"></use> </g> <g> <use xlink:href="#c72bMsI2Je" opacity="1" fill="#000000" fill-opacity="1"></use> </g> <g> <use xlink:href="#bdYdWzru8" opacity="1" fill="#000000" fill-opacity="1"></use> </g> <g> <use xlink:href="#b1S4la3Dsc" opacity="1" fill="#000000" fill-opacity="1"></use> </g> <g> <use xlink:href="#a3WQXd9tOO" opacity="1" fill="#e84e4e" fill-opacity="1"></use> </g> <g> <use xlink:href="#e3iMF16P6b" opacity="1" fill="#e84e4e" fill-opacity="1"></use> </g> <g> <use xlink:href="#e5a79da1Qx" opacity="1" fill="#e84e4e" fill-opacity="1"></use> </g> <g> <use xlink:href="#bk5CTtezM" opacity="1" fill="#e84e4e" fill-opacity="1"></use> </g> </g> </g> </svg></caption><tr><td><h2 style="text-align: center;color: indianred;">Sell For More..Buy For Less</h2><hr><p>Hi '.$name.',</p><p>Thank you for showing interest in BackSpace Services.</p> <br><p>Your Product Details And Pictures are Successfully Uploaded For All the Users to See. <br><mark>Brand Name :- '.$brand.'<br>Total No. of Pictures :-'.$total.'</mark><br> You can Update or Delete your Product details anytime by clicking on the Account setting from the Nav bar. <br> If you have any Questions, Complains, Suggestions or if we can further assist you in any way, please feel free to Contact us By Replying Us. <br><br> We hope to hear from you soon! :)</p><table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary"><tbody><tr><td align="left"><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td> <a href="http://www.backspace.ind.in" target="_blank">HOME</a></td></tr></tbody></table></td></tr></tbody></table><p>If You are clueless About it, Please reply As Soon As Possible.</p><br><p>Best Regards,<br>Nehal Srivastava <br>(Developer)</p></td></tr></table></td></tr></table><div class="footer"><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="content-block"> <span class="apple-link">&copy;BACKSPACE-2019</span> <br> BIT Mesra, Ranchi.</td></tr></table></div></div></td><td>&nbsp;</td></tr></table></body></html>';
    
			 
			
                    $email = $to;//to
                    $name = "BackSpace";//from name
                    $body =  $message;//message
                    $subject = $subject;

                    $headers = array(
                        'Authorization: Bearer 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',
                        'Content-Type: application/json'
                    );

                    $data = array(
                        "personalizations" => array(
                            array(
                                "to" => array(
                                    array(
                                        "email" => $email,
                                        "name" => $name
                                    )
                                )
                            )
                        ),
                        "from" => array(
                            "email" => "backspace.ind.in@gmail.com"//from email address
                        ),
                        "subject" => $subject,
                        "content" => array(
                            array(
                                "type" => "text/html",
                                "value" => $body
                            )
                        )
                    );

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    $response = curl_exec($ch);
                    curl_close($ch);
            
        if($response==""){
			   header("Location:http://backspace.ind.in/sell-forms/check_show.php");
			} else{
			    return false;
			}
                    
        
        }else{
             header("Location:http://backspace.ind.in/sell-forms/check_show.php");
        }
    }
    
    else{
        echo "error in sending the picture to all_products";  
        $error=1;
    }
    
}
else if($order=="*******"){
    if(rename ($source,$trashfile)){
        echo "moved to trash";
        $con=mysqli_connect(HOST,USER,PASSWORD,DB);
        if(!$con){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
        $sql="DELETE FROM `products` WHERE `products`.`file` ='$picname'";
        
        
        if (!mysqli_query($con, $sql)) {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }else{
            echo  "<br>" ."deleted from database";
            header("Location:https://mail.google.com/mail/u/0/?view=cm&fs=1&to=$email&su=Your Product Details can not be uploaded&body=Hi $name,%0D%0A%0D%0AThank you for showing interest in BackSpace-Selling Services.%0D%0A%0D%0AUnfortunately, Your Product Details And Pictures can not be Uploaded For All the users to See.%0D%0AIt contains Improper:%0D%0A%0D%0AIf you have any Questions, Complains, Suggestions or if we can further assist you in any way, please feel free to Contact us By emailing it to backspace.ind.in%0D%0AI hope to hear from you soon! :)%0D%0ABest regards,%0D%0A%0D%0ANehal Srivastava%0D%0A[developer]&tf=1#");
        }
    }
    else{
        echo "error in sending the picture to trash";  
        
    }
    
}
else if($order=="*******"){
    if(rename ($source,$trashfile)){
        echo "moved to trash";
        $con=mysqli_connect(HOST,USER,PASSWORD,DB);
        if(!$con){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
        $sql="DELETE FROM `products` WHERE `products`.`file` ='$picname'";
        
        
        if (!mysqli_query($con, $sql)) {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }else{
            header("Location:http://backspace.ind.in/sell-forms/check_show.php");
        }
    }
    else{
        echo "error in sending the picture to trash";  
        
    }
    
}
else{
    echo "incorrect password order";
}
    
    
?>
