<?php
/**
 * Created by PhpStorm.
 * User: kroel
 * Date: 5-4-2019
 * Time: 11:40
 */?>

<?php
$to = 'k.roelofs@roc-dev.com';
$subject = $_POST ['subject'];
$message = $_POST ['message'];
$headers = 'From: ' . $_POST['from'];
mail($to, $subject, $message, $headers) or die ('error mailing');

echo 'uw mail is verstuurd!'



?>

