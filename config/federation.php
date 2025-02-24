<?php

return [

	/*
	|--------------------------------------------------------------------------
	| ActivityPub
	|--------------------------------------------------------------------------
	|
	| ActivityPub configuration
	|
	*/
	'activitypub' => [
		'enabled' => env('ACTIVITY_PUB', false),
		'outbox' => env('AP_OUTBOX', true),
		'inbox' => env('AP_INBOX', true),
		'sharedInbox' => env('AP_SHAREDINBOX', true),

		'remoteFollow' => env('AP_REMOTE_FOLLOW', false),

		'delivery' => [
			'timeout' => env('ACTIVITYPUB_DELIVERY_TIMEOUT', 30.0),
			'concurrency' => env('ACTIVITYPUB_DELIVERY_CONCURRENCY', 10),
			'logger' => [
				'enabled' => env('AP_LOGGER_ENABLED', false),
				'driver' => 'log'
			]
		]
	],

	'atom' => [
		'enabled' => env('ATOM_FEEDS', true),
	],

	'nodeinfo' => [
		'enabled' => env('NODEINFO', true),
	],

	'webfinger' => [
		'enabled' => env('WEBFINGER', true)
	],

	'network_timeline' => env('PF_NETWORK_TIMELINE', true)

];
