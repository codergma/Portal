<?php 
$server_addr = $_SERVER['SERVER_ADDR'];
$UcenterRedis = 'http://codergma.com:8084/';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul>
	<li><a href="http://<?php echo $server_addr;?>:80">smaryun.com</a></li>
	<li><a href="http://<?php echo $server_addr;?>:8080">dev_center</a></li>
	<li><a href="http://<?php echo $server_addr;?>:8081">MyProject</a></li>
	<li><a href="http://<?php echo $server_addr;?>:8083/Sign/index_cookie">UcenterCookieSession</a></li>
	<li><a href="<?php echo $UcenterRedis;?>">UcenterRedis</a></li>
	<li><a href="http://<?php echo $server_addr;?>:8085">Redis</a></li>
	<li><a href="http://<?php echo $server_addr;?>:8086">PHPTarPit</a></li>
	<li><a href="http://<?php echo $server_addr;?>:8087">Joomla</a></li>
	<li><a href="http://<?php echo $server_addr;?>:8088">BootstrapStudy</a></li>
	<li><a href="http://<?php echo $server_addr;?>:8090">UCenter</a></li>
</ul>

</body>
</html>
