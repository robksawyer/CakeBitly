<?php
/**
 * Required configuration variables
 */
$bitly = array(
	'Bitly' => array(
		'api' => 'http://api.bit.ly/v3/', //The URI of the standard bitly v3 API.
		'oauth_api' => 'https://api-ssl.bit.ly/v3/', //The URI of the bitly OAuth endpoints.
		'oauth_access_token_endpoint' => 'https://api-ssl.bit.ly/oauth/', //The URI for OAuth access token requests.
		'key' => getenv('BITLY_KEY'),
		'login' => getenv('BITLY_LOGIN'),
		'client_id' => getenv('BITLY_CLIENT_ID'),
		'client_secret' => getenv('BITLY_CLIENT_SECRET')
	)
);

Configure::write('Bitly', $bitly);
?>