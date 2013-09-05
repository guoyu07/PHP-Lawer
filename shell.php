<?php
define('ROOT_PATH', dirname(__FILE__));

include_once(ROOT_PATH . '/lib/bootstrap.php');

// 接受--file参数
$shortopts = '';
$longopts = array(
	'file::',
);

$options = getopt($shortopts, $longopts);

$file = $options['file'];

if (!empty($file))