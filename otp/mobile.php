<?php

session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title> OTP SMS Mobile Verification</title>
    <link rel="icon" href="img/logos.png">
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <div class="container">
        <div class="error"></div>
        <form id="frm-mobile-verification">
            <div class="form-heading">Mobile Number Verification</div>
            <h6 class="info">Please Check your Entered Mobile No. <br>This No. Will be Used as Your Registered Mobile NO.</h6>
            <div class="form-row">
                <input type="number" id="mobile" class="form-input" placeholder="please enter your mobile No." value=<?php echo $_SESSION['u_mobile']?>>
            </div>
            <input type="button" class="btnSubmit" value="Send OTP" onClick="sendOTP();">
        </form>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="verification.js"></script>

</body>

</html>
