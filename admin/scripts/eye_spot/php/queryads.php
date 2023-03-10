<?php

while (ob_get_level() > 0) {
    ob_end_flush();
}

require_once 'func.php';
ini_set('output_buffering', '0');
ob_implicit_flush(true);
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

function echoEvent($datatext)
{
    if (!isset($_GET['IE'])) {
        echo 'data:'.implode("\ndata:", explode("\n", $datatext))."\n\n";
    } else {
        echo $datatext;
    }
}

// Test if domain is set
if (isset($_GET['domain'])) {
    // Is this a valid domain?
    // Convert domain name to IDNA ASCII form for international domains
    $url = convertUnicodeToIDNA($_GET['domain']);
    if (!validDomain($url)) {
        echoEvent(htmlentities($url).' is an invalid domain!');

        exit;
    }
} else {
    echoEvent('No domain provided');

    exit;
}

if (isset($_GET['exact'])) {
    $exact = '-exact';
} elseif (isset($_GET['bp'])) {
    $exact = '-bp';
} else {
    $exact = '';
}

$proc = popen('sudo pihole -q -adlist '.$url.' '.$exact, 'r');
while (!feof($proc)) {
    echoEvent(fread($proc, 4096));
}
