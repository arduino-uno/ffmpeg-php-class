<?php
/**
*	include FFmpeg class
**/
include DIRNAME(DIRNAME(__FILE__)).'/src/FFmpeg.php';
/**
*	Text options in Array
**/
$arrOpts = array(
  'text' => 'A Custom Text',
  'font' => 'Courier',
  'fontcolor' => 'white',
  'fontsize' => 32
);
/**
*	Create command
**/
$FFmpeg = new FFmpeg( '/usr/local/bin/ffmpeg' );
$FFmpeg->input( '/var/media/original.avi' );
$FFmpeg->drawtext( $arrOpts );
$FFmpeg->audioCodec();
$FFmpeg->ready();
$FFmpeg->output( '/var/media/new.mp4' , 'mp4' );
print($FFmpeg->command);