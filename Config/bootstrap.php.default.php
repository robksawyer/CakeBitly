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

?>