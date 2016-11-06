<?php
/**************************************************************
 * PT.SMARTINDO SINAR MULIA
 * http://www.freesite.orgfree.com
 *
 * Title: SOAP API System
 * Version: 1.0
 * Author: Amydin Syahira
 * Date: 16-08-2011
 *
**************************************************************/
// add complex type
/*** CHANGE IT WITH YOURS
$l_oServer->wsdl->addComplexType(
   'WeatherData',
   'complexType',
   'struct',
   'all',
   '',
   array('degrees' => array('name'=>'degrees', 'type'=>'xsd:string'), 'forecast' => array('name'=>'forecast', 'type'=>'xsd:string'))
);
*/
// register method
/*** CHANGE IT WITH YOURS
$l_oServer->register('getWeather', array('city' => 'xsd:string'), array('return'=>'tns:WeatherData'), 'http://weather.org/Weather');
*/

// method code (get DB result)
/*** CHANGE IT WITH YOURS
function getWeather($city) {
*/
	// connect database
	require('db_connect.php');
/*
    $l_oDBresult = @mysql_db_query($db, 'SELECT degrees, forecast FROM current_data WHERE city = LCASE("' . mysql_escape_string((string)$city) . '") LIMIT 1'); 
	// Authenticate Server
	$_auth_user = $_SERVER['PHP_AUTH_USER'];
	$_auth_pw = $_SERVER['PHP_AUTH_PW'];
*/
	require('db_auth.php');
/*
	if($_auth_user <> $ssl['api_key'] || $_auth_pw <> $ssl['api_token']) {
	  return new soap_fault('Server', '', 'You are not my member. Please call administrator to fix it.');
	}
    // simple error checking
    if (!$l_oDBresult) {
      return new soap_fault('Server', '', 'Internal server error.');
    }
      
    // no data available for x city
    if (!mysql_num_rows($l_oDBresult)) {
      return new soap_fault('Server', '', 'Service contains data only for a few cities.');
    }
    mysql_close($l_oDBlink);
      
    // return data
    return mysql_fetch_array($l_oDBresult, MYSQL_ASSOC);
}
*/
?>