<?php


include 'helpers/functions.php';
include 'helpers/middleware.php';
  $directory = $_SERVER['DOCUMENT_ROOT'] . "/controller/";

    

    

    foreach (scandir($directory) as $file) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;


        $files[] = $file;
    }
    foreach ($files as $file)
    {
    	include $_SERVER['DOCUMENT_ROOT'] . "/controller/" .$file;
    }
    $dir = $_SERVER['DOCUMENT_ROOT'] . "/model/";

    
    $files = [];

    

    foreach (scandir($dir) as $file) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;


        $files[] = $file;
    }
    foreach ($files as $file)
    {
    	include $_SERVER['DOCUMENT_ROOT'] . "/model/" .$file;
    }
