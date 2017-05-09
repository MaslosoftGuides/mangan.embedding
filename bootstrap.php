<?php

use Maslosoft\EmbeDi\Adapters\ArrayAdapter;
use Maslosoft\EmbeDi\EmbeDi;
use Maslosoft\Mangan\Mangan;

require __DIR__ . '/vendor/autoload.php';



// Use EmbeDi to configure Mangan
$config = [
	'mongodb' => [
		'class' => Mangan::class,
		// Database name
		'dbName' => 'embedding',
	]
];
EmbeDi::fly()->addAdapter(new ArrayAdapter($config));
