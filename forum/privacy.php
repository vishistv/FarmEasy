<?php 
require_once './start.php';

$template = prepareTemplate (THEME_ROOT.'privacy.html', '/privacy.html');

theme_custom ($template);
exit ($template);

?>