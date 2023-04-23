<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

$BASE_URL="website/index.php";
$URL="http://localhost/Krishilimited/krishilimitedfinal/api/src/";
$EXAM_NAME="UPPCL EXAMINATION";

$ADMIN_IMG_PATH="http://localhost/Krishilimited/krishilimitedfinal/user/img/";

    
 $HOME="website/index.php"; 

$SECRET_KEY = "dKgLINTEL2013aN99840$@";  
$ISSUER_CLAIM = "GLINTEL TECHNOLOGY PVT LTD"; // this can be the servername
$AUDIENCE_CLAIM = "PSP NEWS";


$LOGIN_SUCCESS_MSG="Login Successful";
$LOGIN_FAILED_MSG="Request Failed";

?>