<?php
/**
*	This file contains the code to generate a json property request example.
*
*	@package		RightmoveADF
*	@version		@@RELEASE_VERSION@@
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@copyright		@@COPYRIGHT@@
*	@file			@@FILE@@
*	@file_Version	$Rev: 1937 $
*	@Last_Change	$LastChangedDate: 2014-11-27 10:18:05 +0000 (Thu, 27 Nov 2014) $
*
*/

require_once('../vendor/autoload.php');

use Frozensheep\RightmoveADF\Groups\Network;

$objAddress = new Network();
$objAddress->networkID = '12345';

echo $objAddress->networkID.PHP_EOL;