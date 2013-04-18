<?php
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
 * The bitlyKey assigned to your bit.ly account. (http://bit.ly/a/account)
 */
define('bitlyKey', 'R_BITLY_KEY');

/**
 * The bitlyLogin assigned to your bit.ly account. (http://bit.ly/a/account)
 */
define('bitlyLogin' , 'o_bitlyLogin');

/**
 * The client_id assigned to your OAuth app. (http://bit.ly/a/account)
 */
define('bitly_clientid' , 'BITLY_CLIENT_ID');

/**
 * The client_secret assigned to your OAuth app. (http://bit.ly/a/account)
 */
define('bitly_secret' , 'BITLY_CLIENT_SECRET_ID');

/**
 * The URI of the standard bitly v3 API.
 */
define('bitly_api', 'http://api.bit.ly/v3/');

/**
 * The URI of the bitly OAuth endpoints.
 */
define('bitly_oauth_api', 'https://api-ssl.bit.ly/v3/');

/**
 * The URI for OAuth access token requests.
 */
define('bitly_oauth_access_token', 'https://api-ssl.bit.ly/oauth/');

?>