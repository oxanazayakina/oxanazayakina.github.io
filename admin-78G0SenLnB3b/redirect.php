<?php 
$pass = filter_var(trim($_POST['admin_password']), FILTER_SANITIZE_STRING);
if (strcmp($pass, 'AzpgRcyb0bidU') == 0) {
    session_start();
$_SESSION['correct'] = true;
header( 'Location: https://oxanazayakina.ru/zOIEAaC8JY', true, 301 );
}else {
    header( 'Location: https://oxanazayakina.ru/admin-78G0SenLnB3b', true, 301 );
}
?>