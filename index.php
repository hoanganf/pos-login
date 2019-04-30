<?php
include_once 'config.php';
include_once constant("CONTROLLER_DIR").'PageGetter.php';
/*
$headers=getallheaders();
if(isset($headers['Cookie'])){
  $headerCookies = explode('; ', $headers['Cookie']);
   $cookies = array();
   foreach($headerCookies as $itm) {
       list($key, $val) = explode('=', $itm,2);
       $cookies[$key] = $val;
   }

   print_r($cookies);
}
*/
$pageBuilder=new PageGetter();
$pageBuilder->buildHtml();
?>
