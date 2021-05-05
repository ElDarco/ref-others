<?php

#Быстро при больших объемах
$src = fopen('http://google.com', 'rb');
$dest = tmpfile();
stream_copy_to_stream($src, $dest);
echo 1;


#Медленно
$src = fopen('https://google.com', 'rb');
$contents = stream_get_contents($src);
$dest = tmpfile();
fwrite($dest, $contents);