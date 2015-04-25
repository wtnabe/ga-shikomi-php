<?php
function ___files($dir) {
  $files = glob("{$dir}/*.php");
  $dirs  = glob("{$dir}/*", GLOB_ONLYDIR);
  foreach ($dirs as $dir) {
    $files = array_merge($files, ___files($dir));
  }
  return $files;
}
foreach ( ___files(dirname(__FILE__).'/ga-shikomi-php') as $file ) { require_once($file); }
