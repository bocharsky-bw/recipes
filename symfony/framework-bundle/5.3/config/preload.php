<?php

$filename = dirname(__DIR__).'/var/cache/prod/App_KernelProdContainer.preload.php';
if (file_exists($filename)) {
    require $filename;
}
