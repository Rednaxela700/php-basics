<?php
# $_SERVER SUPERGLOBAL

//create server array

$server = [
    'hostServerName' => $_SERVER['SERVER_NAME'],
    'hostServerPort' => $_SERVER['SERVER_PORT'],
    'hostHeader' => $_SERVER['HTTP_HOST'],
    'serverSoftware' => $_SERVER['SERVER_SOFTWARE'],
    'documentRoot' => $_SERVER['DOCUMENT_ROOT'],
    'currentPage' => $_SERVER['PHP_SELF'],
    'scriptName' => $_SERVER['SCRIPT_NAME'],
    'absolutePath' => $_SERVER['SCRIPT_FILENAME']
];

//echo $server['hostServerName'] . '<br>' . $server['hostServerPort'] . '<br>' . $server['hostHeader'] . '<br>' . $server['serverSoftware'];
//echo  '<br>'.$server['documentRoot'].'<br>'.$server['currentPage'].'<br>'.$server['scriptName'].'<br>'.$server['absolutePath'];
//create client array
$client = [
    'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT']
];

//echo '<p>'.'Client info from $_SERVER super global'."</p>";
//echo '<p>'.$client['Client System Info']."</p>";
//echo '<p>'.$client['Client IP']."</p>";
//echo '<p>'.$client['Remote Port']."</p>";