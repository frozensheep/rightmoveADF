<?php
/**
*	This file contains the RightmoveADF class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

require_once(__DIR__.'/../vendor/autoload.php');

use Frozensheep\RightmoveADF\RightmoveADF;

$strPEMFile = 'file.pem';
$strPEMKeyFile = file.key'';

$objRightmoveADF = new RightmoveADF($strPEMFile, $strPEMKeyFile, RightmoveADF::TEST);

$objSendPropertyRequest = $objRightmoveADF->createRequest(RightmoveADF::sendProperty);

//add the details
$objSendPropertyRequest->network->network_id = 12345;

$objResponse = $objRightmove->send($objSendPropertyRequest, 'http://requestb.in/1cauwv71');