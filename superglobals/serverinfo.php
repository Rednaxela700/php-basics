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

echo $server['hostServerName'] . '<br>' . $server['hostServerPort'] . '<br>' . $server['hostHeader'] . '<br>' . $server['serverSoftware'];
echo  '<br>'.$server['documentRoot'].'<br>'.$server['currentPage'].'<br>'.$server['scriptName'].'<br>'.$server['absolutePath'];
//create server array
$client = [
    'Client System Info' => $_SERVER['HTTP_USER_AGENT']
];

echo '<br>'.$client['Client System Info'];