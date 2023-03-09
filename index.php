<html>
<title> Mahendra's Demo App </title>
<body>
<?php
  $urlRoot="http://169.254.169.254/latest/meta-data/";
  $instance = file_get_contents($urlRoot . 'instance-id');
  $publicip = file_get_contents($urlRoot . 'public-ipv4');
  $localip = file_get_contents($urlRoot . 'local-ipv4');
  $az = file_get_contents($urlRoot . 'placement/availability-zone');
  $region = file_get_contents($urlRoot . 'placement/region');
?>

<center>
<br>
<IMG SRC="https://download.logo.wine/logo/Amazon_Elastic_Compute_Cloud/Amazon_Elastic_Compute_Cloud-Logo.wine.png" ALT="Demo Logo" width="870" height="600"><br></center>
<center><p style="font-family:verdana">This page was generated by instance <b><?= $instance ?></b> in Availability Zone <b><?= $az ?></b>.</p></center>
<center><p style="font-family:verdana">Instance Region: <b><?= $region ?></b></p></center>
<center><p style="font-family:verdana">Instance Public IP: <b><?= $publicip ?></b></p></center>
<center><p style="font-family:verdana">Instance Private IP: <b><?= $localip ?></b></p></center>
