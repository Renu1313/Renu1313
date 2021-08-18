<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">

<style>
body {
          background-image: url("send.gif");
          background-color: #cccccc;
          background-size: 80% 80%;
          background-repeat: no-repeat;

         }

</style>
</head>
<?php
$old_path = getcwd();
chdir('/home/renu/');
$output = shell_exec('./email.sh');
chdir($old_path);
echo "<pre> Email Sending..........</pre>";
?>

