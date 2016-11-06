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
   	
// includes nusoap classes
require('../lib/nusoap.php');
   
// create server
$l_oServer = new soap_server();
  
// wsdl generation
$l_oServer->debug_flag=false;
$l_oServer->configureWSDL('WeatherWSDL', 'http://weather.org/Weather');
$l_oServer->wsdl->schemaTargetNamespace = 'http://weather.org/Weather';

// includes get function
require('function.php'); 
  
// pass incoming (posted) data
$l_oServer->service($HTTP_RAW_POST_DATA);
?>