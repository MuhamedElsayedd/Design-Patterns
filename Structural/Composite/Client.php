<?php

use Structural\Composite\Leaf\File;
use Structural\Composite\Composite\Folder;

// Files
$file1 = new File(10);
$file2 = new File(20);
$file3 = new File(5);

// Folder A
$folderA = new Folder();
$folderA->add($file1);
$folderA->add($file2);

// Main Folder
$mainFolder = new Folder();
$mainFolder->add($folderA);
$mainFolder->add($file3);

// تعامل مع الكل كأنه Object واحد
echo $mainFolder->getSize(); // 35
