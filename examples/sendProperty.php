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

//include the config file
require_once('config.php');

//create the RightmoveADF object
$objRightmoveADF = new RightmoveADF(CERT_FILE, CERT_PASS, RightmoveADF::TEST);

//create a request
$objRequest = $objRightmoveADF->createRequest(RightmoveADF::sendProperty);

//set the details for the request
$objRequest->network->network_id = NETWORK_ID;
$objRequest->branch->branch_id = BRANCH_ID;

//send the request
$objResponse = $objRightmove->send($objRequest, 'http://requestb.in/1cauwv71');

print_r($objResponse);