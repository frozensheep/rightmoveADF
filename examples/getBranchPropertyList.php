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
$strPEMKeyFile = 'file.key';

$objRightmoveADF = new RightmoveADF($strPEMFile, $strPEMKeyFile, RightmoveADF::TEST);

$objRequest = $objRightmoveADF->createRequest(RightmoveADF::getBranchPropertyList);

//add the details
$objRequest->network->network_id = 5230;
$objRequest->branch->branch_id = 15143;

echo json_encode($objRequest ).PHP_EOL;

//$objResponse = $objRightmove->send($objRequest , 'http://requestb.in/1cauwv71');