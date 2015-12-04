<?php
/**
*	Get Property Emails Example.
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
$objRequest = $objRightmoveADF->createRequest(RightmoveADF::GetPropertyEmails);

//set the details for the request
$objRequest->network->network_id = NETWORK_ID;
$objRequest->branch->branch_id = BRANCH_ID;
$objRequest->property->agent_ref = PROPERTY_REF;
$objRequest->export_period->start_date_time = '7 days ago';
$objRequest->export_period->end_date_time = 'now';

//send the request
$objResponse = $objRightmoveADF->send($objRequest);

print_r($objResponse);