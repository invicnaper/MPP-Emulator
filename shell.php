 <?php
 /*
  - file : display-sales-logs.php
  - line : 23
 
  $controller = $_REQUEST['c'];
 
 */
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "http://brianpucella.com/wp-e-commerce/wpsc-admin/display-sales-logs.php?c=ls");
 curl_setopt($ch, CURLOPT_HTTPGET, 1);
 curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
 $buf = curl_exec ($ch);
 curl_close($ch);
 unset($ch);
 echo $buf;

 echo "hello";
 ?>