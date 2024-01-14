<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value "customer";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");

?>
<html>
<body>

<?php
if(!sset($_COOKIE[$cookie_name])){
  echo"Cookie named"'.$cookie.name.'"is not set!<br>";
} else{
 echo"Cookie"'.$cookie_name."'is set!<br>";
 echo"Value is:".$_COOKIE[$cookie_name];
}
?>
<body>
</html>
