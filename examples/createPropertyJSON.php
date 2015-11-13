<?php
/**
*	This file contains the code to generate a json property request example.
*
*	@package		RightmoveADF
*	@version		@@RELEASE_VERSION@@
*	@author			Jacob Wyke <jacob@frozensheep.com>
*	@copyright		@@COPYRIGHT@@
*	@file			@@FILE@@
*	@file_Version	$Rev: 1937 $
*	@Last_Change	$LastChangedDate: 2014-11-27 10:18:05 +0000 (Thu, 27 Nov 2014) $
*
*/

require_once(__DIR__.'/../vendor/autoload.php');

use Frozensheep\RightmoveADF\Request\SendProperty;

$objRequest = new SendProperty();
$objRequest->network->network_id = 12345;
$objRequest->branch->branch_id = 22934;
$objRequest->branch->channel = 2;

echo json_encode($objRequest);