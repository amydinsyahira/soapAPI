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
// include auth API
  require('auth.api.php');
  // includes nusoap classes
  require('lib/nusoap.php');
// use form data
if ((string)$_GET['action'] == 'get_data') {

  // set parameters and create client
  $l_aParam   = array((string)$_POST['city']);
  $l_oClient  = new nusoap_client($_server);
  
  // Set timeouts, nusoap default is 30
  $l_oClient->timeout = 420;
  $l_oClient->response_timeout = 420;
  // Setting credentials for Authentication 
  $l_oClient->setCredentials($_api_key, $_api_token, $_api_type);

  // call a webmethod (getWeather)
  $l_stResult = $l_oClient->call('getWeather', $l_aParam);

  // check for errors
  if (!$l_oClient->getError()) {
    // print results
    print '<h1>Current data for: '    . $l_aParam[0] 
        . '</h1><ul><li>DEGREES: '   . $l_stResult['degrees'] 
        . '&deg;C</li><li>FORECAST: ' . $l_stResult['forecast'] 
        . '</li></ul>'; 
  }
  // print error description
  else {
    echo '<h4>Error: ' . $l_oClient->getError() . '</h4>';
  }
}

// output search form
print '
  <form name="input" action="'.$_SERVER['PHP_SELF'].'?action=get_data"  method="POST">
    Your city: <input type="text" name="city">
    <input type="submit" value="Search">
  </form>
';
?>