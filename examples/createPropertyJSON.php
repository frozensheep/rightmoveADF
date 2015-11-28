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
$objRequest->property->details->summary = 'This is a summary';
$objRequest->property->details->features()[] = '1';
$objRequest->property->details->features()[] = '2';
$objRequest->property->details->features()[] = '3';
$objRequest->property->details->features()[] = '4';
$objRequest->property->details->features()[] = '5';
$objRequest->property->details->features()[] = '6';
$objRequest->property->details->features()[] = '7';
$objRequest->property->details->features()[] = '8';
$objRequest->property->details->features()[] = '9';
$objRequest->property->details->features()[] = '10';
//$objRequest->property->details->features()[] = '11';
$objRequest->property->details->parking()[] = Frozensheep\RightmoveADF\Values\Parkings::Driveway;
$objRequest->property->details->parking()[] = Frozensheep\RightmoveADF\Values\Parkings::Garage;
$objRequest->property->details->parking()[] = Frozensheep\RightmoveADF\Values\Parkings::OnStreet;


$objRoom1 = new Frozensheep\RightmoveADF\Groups\Room;
$objRoom1->room_name = 'Living Room';
$objRequest->property->details->rooms()[] = $objRoom1;


echo json_encode($objRequest).PHP_EOL;