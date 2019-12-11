<?php
// if(isset($_POST['submit'])){

//     $name = $_POST['name'];
//     $subject = $_POST['subject'];
//     $mailFrom = $_POST['mail'];
//     $message = $_POST['message'];

//     $mailTo = "lago0008@algonquinlive.com";
//     $headers = "From: ".$mailFrom;
//     $txt = "You have rerecieved an e-mail from ".$name.".\n\n".$message;
    
    
//     mail(
//         $mailTo, $subject, $txt, $headers
//     );
//     header("Location: index.php?mailsend");
// }

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler();

$validator = $pp->getValidator();
$validator->fields(['name','email'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('message')->maxLength(6000);


$pp->requireCaptcha();


$pp->sendEmailTo('lago0008@algonquinlive.com'); // ← Your email here

echo $pp->process($_POST);

?>