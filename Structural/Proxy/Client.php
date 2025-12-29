<?php

use Structural\Proxy\Proxy\FileProxy;

// User has access
$file = new FileProxy("video.mp4", true);
$file->download();

echo "----------------" . PHP_EOL;

// User without access
$file2 = new FileProxy("secret.pdf", false);
$file2->download();
