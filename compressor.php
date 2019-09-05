<?php
if(isset($_POST['upload'])){

  // Getting file name
  $filename = $_FILES['imagefile']['name'];
 
  // Valid extension
  $valid_ext = array('png','jpeg','jpg');

  // Location
  $location = "compressed/".$filename;

  // file extension
  $file_extension = pathinfo($location, PATHINFO_EXTENSION);
  $file_extension = strtolower($file_extension);
    
echo $_FILES['imagefile']['tmp_name'];

  // Check extension
  if(in_array($file_extension,$valid_ext)){
    // Compress Image
    compressImage($_FILES['imagefile']['tmp_name'],$location,40);

  }else{
    echo "Invalid file type.";
  }
}

// Compress image
function compressImage($source, $destination, $quality) {
    
  $info = getimagesize($source);

  if ($info['mime'] == 'image/jpeg') 
    $image = imagecreatefromjpeg($source);

  elseif ($info['mime'] == 'image/gif') 
    $image = imagecreatefromgif($source);
    
  
  elseif ($info['mime'] == 'image/png') 
    $image = imagecreatefrompng($source);

  imagejpeg($image, $destination, $quality);

}

?>


<form method='post' action='' enctype='multipart/form-data'>
  <input type='file' name='imagefile' >
  <input type='submit' value='Upload' name='upload'> 
</form>
