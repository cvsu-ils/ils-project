<?php
    return $database['database'] = [
        'app' => [
			'local' => [
				'DB_DRIVER' => env('DB_DRIVER', "mysql"),
				'DB_HOST' => env('DB_HOST', "localhost"),
				'DB_PORT' => env('DB_PORT', "80"),
				'DB_DATABASE' => env('DB_DATABASE', "database"),
				'DB_USERNAME' => env('DB_USERNAME', "root"),
				'DB_PASSWORD' => env('DB_PASSWORD', "")
			],
			'live' => [
				'DB_DRIVER' => "mysql",
				'DB_HOST' => "localhost",
				'DB_PORT' => "",
				'DB_DATABASE' => "database",
				'DB_USERNAME' => "root",
				'DB_PASSWORD' => ""
			]
        ],
        'ils' => [
			'local' => [
				'DB_DRIVER' => "mysql",
				'DB_HOST' => "localhost",
				'DB_DATABASE' => "database",
				'DB_USERNAME' => "root",
				'DB_PASSWORD' => ""
			],
			'live' => [
				'DB_DRIVER' => "mysql",
				'DB_HOST' => "localhost",
				'DB_DATABASE' => "database",
				'DB_USERNAME' => "root",
				'DB_PASSWORD' => ""
			]
		],
    ];
?>