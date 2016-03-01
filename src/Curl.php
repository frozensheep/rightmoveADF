<?php
/**
*	This file contains the Curl class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF;

/**
*	Curl Class
*
*	Class for sending the request over curl.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class Curl {

	/**
	*	Create Request Method
	*
	*	Returns the request object for the given request type.
	*	@param int $numRequestType The request type.
	*	@return object
	*/
	public static function send($strJSON, $strURL, $strCertFile, $strCertPass, $boolDebug = false){
		$resCurl = curl_init();

		if($boolDebug){
			curl_setopt($resCurl, CURLOPT_VERBOSE, 1);
		}

		curl_setopt($resCurl, CURLOPT_URL, $strURL);
		curl_setopt($resCurl, CURLOPT_CERTINFO, 1);
		curl_setopt($resCurl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($resCurl, CURLOPT_SSL_VERIFYPEER, 1);
		curl_setopt($resCurl, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($resCurl, CURLOPT_FAILONERROR, 1);
		curl_setopt($resCurl, CURLOPT_SSLCERT, $strCertFile);
		curl_setopt($resCurl, CURLOPT_SSLCERTTYPE, 'PEM');
		curl_setopt($resCurl, CURLOPT_SSLCERTPASSWD, $strCertPass);
		curl_setopt($resCurl, CURLOPT_POST, 1);
		curl_setopt($resCurl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($resCurl, CURLOPT_POSTFIELDS, $strJSON);
		$strResponse = curl_exec($resCurl);

		return json_decode($strResponse);
	}
}