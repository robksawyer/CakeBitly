<?php
/**
* When loading the plugin, be sure to add Bitly => array('bootstrap' => true)
*/
/**
 * @file
 * Simple PHP library for interacting with the v3 bit.ly api (only deals with
 * JSON format, but supports new OAuth endpoints).
 * REQUIREMENTS: PHP, Curl, JSON
 * 
 * @link https://github.com/Falicon/BitlyPHP
 * @author Kevin Marshall <info@falicon.com>
 * @author Robin Monks <devlinks@gmail.com>
 */

/**
 * Required configuration variables
 */
$bitly = array(
	'api' => 'http://api.bit.ly/v3/', //The URI of the standard bitly v3 API.
	'oauth_api' => 'https://api-ssl.bit.ly/v3/', //The URI of the bitly OAuth endpoints.
	'oauth_access_token_endpoint' => 'https://api-ssl.bit.ly/oauth/', //The URI for OAuth access token requests.
	'key' => getenv('BITLY_KEY'), //The bitlyKey assigned to your bit.ly account. (http://bit.ly/a/account)
	'login' => getenv('BITLY_LOGIN'), //The bitlyLogin assigned to your bit.ly account. (http://bit.ly/a/account)
	'client_id' => getenv('BITLY_CLIENT_ID'), //The client_id assigned to your OAuth app. (http://bit.ly/a/account)
	'client_secret' => getenv('BITLY_CLIENT_SECRET') //The client_secret assigned to your OAuth app. (http://bit.ly/a/account)
);

Configure::write('Bitly', $bitly);
?>

?>