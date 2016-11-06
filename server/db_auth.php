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
// Auth Database
	$ssl = mysql_fetch_array(mysql_query('SELECT * FROM member WHERE api_key = "'.$_auth_user.'" AND api_token = "'.$_auth_pw.'"')); // Change it with yours
?>