<?php
session_start();
error_reporting(E_ALL & ~ E_NOTICE);
require ('textlocal.class.php');

class Controller
{
    function __construct() {
        $this->processMobileVerification();
    }
    function processMobileVerification()
    {
        switch ($_POST["action"]) {
            case "send_otp":
                
                $mobile_number = $_POST['mobile_number'];
                
                $apiKey = urlencode('/Sp80pnl8cA-8d6NqFLx6ejT2D1O61VcJwsBz467N9');
                $Textlocal = new Textlocal(false, false, $apiKey);
                
                $numbers = array(
                    $mobile_number
                );
                $sender = 'TXTLCL';
                $otp = rand(100000, 999999);
                $_SESSION['session_otp'] = $otp;
                $message = "Your One Time Password is " . $otp;
                
                try{
                    $response = $Textlocal->sendSms($numbers, $message, $sender);
                    require_once ("verification-form.php");
                    exit();
                }catch(Exception $e){
                    die('Error: '.$e->getMessage());
                }
                break;
                
            case "verify_otp":
                $otp = $_POST['otp'];
                $_SESSION['mdone']="0";
                if ($otp == $_SESSION['session_otp']) {
                    unset($_SESSION['session_otp']);
                    $_SESSION['mdone']="1";
                    echo json_encode(array("type"=>"success", "message"=>"Your mobile number is verified!"));
                     header("Location: https://backspace.ind.in/registeration/verify_email.php");
                     die();
                } else {
                    $_SESSION['mdone']="0";
                    echo json_encode(array("type"=>"error", "message"=>"Mobile number verification failed"));
                    
                }
                
                break;
        }
    }
}
$controller = new Controller();
?>
