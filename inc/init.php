<?php
include 'db.php';

$sys = $db->query("SELECT * FROM manage_website where id = 1");
$sys_res = $sys->fetch();

 ?>