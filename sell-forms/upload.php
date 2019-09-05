<?php
session_start();
 $_SESSION["id"]=1806004;//for checking
 $_SESSION["email"]="kssdhud@gmail.com";//for checking
 $_SESSION["name"]="nehal";//for checking

 define("HOST","localhost");//Dont forget to change your server or Host name
 define("USER","root");//Dont forget to chnage your database username
 define("PASSWORD","");//Dont forget to change your password
 define("DB","db");//your database name


//FOR DB FILLING
$id=$_SESSION["id"];
$email=$_SESSION["email"];
$brand = $_POST["brand"];
$desc = $_POST["decription"];
$reason = $_POST["reason"];
$price = $_POST["price"];
//$nego = $_POST["nego"];
$hostel = $_POST["hostel"];
if(isset($_POST["mob"])){
	$mobile = $_POST["mob"];
}else{
    $mobile = null;
}
if(isset($_POST["whatsapp"])){
	$whatsapp = $_POST["whatsapp"];
}else{
    $whatsapp = null;
}
if(isset($_POST["mail"])){
	$mail = $_POST["mail"];
}else{
    $mail = null;
}
if(isset($_POST["fb"])){
	$fb = $_POST["fb"];
}else{
    $fb = null;
}
if(isset($_POST["insta"])){
	$insta = $_POST["insta"];
}else{
    $insta = null;
}
if(isset($_POST["moti"])){
	$moti = $_POST["moti"];
}else{
    $moti = null;
}

$u_name = $_SESSION["name"];
$date = date("Y-m-d H:i:s");
$category = $_POST["cat"];
$i=0;

error_reporting(E_ERROR | E_PARSE);
$errors = array();
$uploadedFiles = array();

function compressImage($source, $destination, $quality) {
    
  $info = getimagesize($source);

  if ($info['mime'] == 'image/jpeg') 
    $image = imagecreatefromjpeg($source);

  elseif ($info['mime'] == 'image/gif') 
    $image = imagecreatefromgif($source);
    
  elseif ($info['mime'] == 'image/jpg') 
    $image = imagecreatefromjpg($source);

  elseif ($info['mime'] == 'image/png') 
    $image = imagecreatefrompng($source);

  imagejpeg($image, $destination, $quality);

}

$extension = array("jpeg","jpg","png");
$bytes = 1024;
$KB = 20024;
$totalBytes = $bytes * $KB; //1MB
$UploadFolder = "uploads_to_check";
 
$counter = 0;

foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
    $temp = $_FILES["files"]["tmp_name"][$key];
    $name = $_FILES["files"]["name"][$key];
     
    // if(empty($temp))
    // {
    //     break;
    // }
     
    $counter++;
    $UploadOk = true;
     
    if($_FILES["files"]["size"][$key] > $totalBytes)
    {
        $UploadOk = false;
        array_push($errors, $name." file size is larger than the 20 MB.");
    }
     
    $aext = pathinfo($name, PATHINFO_EXTENSION);
    $ext = strtolower($aext);
    if(in_array($ext, $extension) == false){
        $UploadOk = false;
        array_push($errors, $name." is invalid file type.");
    }
     
//    if(file_exists($UploadFolder."/".$name) == true){
//        $UploadOk = false;
//        array_push($errors, $name." file is already exist.");
//    }
     
    if($UploadOk == true){
        $picname=uniqid('',true).".".$ext;
        ////////////////////COMPRESSOR////////////////////////////////
        
        $location = "compressed/".$picname;

          

        echo $location;
        echo $temp;

            // Compress Image
            compressImage($temp,$location,30);

        
        /////////////////////END_OF_COMPRESSOR////////////////////////////
        
        rename($location,$UploadFolder."/".$_SESSION["id"]."BUID".$picname);
        array_push($uploadedFiles, $picname);
        $fullname=$_SESSION["id"]."BUID".$picname;
        //FILLING DATABASE
        $i++;
        $file = $fullname;
        $con=mysqli_connect(HOST,USER,PASSWORD,DB);
        if(!$con){
            echo "ERROR In MY SQL-- Contact  Admin";
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}else{
        $sql="INSERT INTO products (`buid` ,`email`,`brand_name`,`description`,`reason`,`price`,`file`,`hostel`,`mobile`,`whatsapp`,`e_mail_id`,`fb`,`insta`,`motivation`,`u_name`,`date_of_submission`,`category`,`position`)
        VALUES ($id,'$email','$brand','$desc','$reason',$price,'$file',$hostel,'$mobile','$whatsapp','$mail','$fb','$insta','$moti','$u_name','$date','$category',$i)";
        
        if (!mysqli_query($con, $sql)) {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        }
    
        
        
    }
}
 
if($counter>0){
    if(count($errors)>0)
    {
        echo "<b>Errors:</b>";
        echo "<br/><ul>";
        foreach($errors as $error)
        {
            echo "<li>".$error."</li>";
        }
        echo "</ul><br/>";
    }
     
    if(count($uploadedFiles)>0){
        echo "<b>Uploaded Files:</b>";
        echo "<br/><ul>";
        foreach($uploadedFiles as $fileName)
        {
            echo "<li>".$fileName."</li>";
        }
        echo "</ul><br/>";
         
        echo count($uploadedFiles)." file(s) are successfully uploaded.";
        $total=count($uploadedFiles);
        $sql2="UPDATE products
                SET total = $total
                WHERE buid=$id AND
                category='$category'";
        if (!mysqli_query($con, $sql2)) {
            echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
        }else{
            mysqli_close($con);
        header("location:http://backspace.ind.in/sell-forms/textannimation.html");
        }

        
        
    }                               
}
else{
    echo "Please, Select file(s) to upload.";
}

?>
