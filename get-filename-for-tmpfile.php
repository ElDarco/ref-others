<?php

$file = tmpfile();
$path = stream_get_meta_data($file)['uri'];
echo $path;
