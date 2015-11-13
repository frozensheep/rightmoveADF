<?php
/**
*	This file contains the Parkings Enum class.
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

namespace Frozensheep\RightmoveADF\Values;

use MyCLabs\Enum\Enum;

/**
*	Parkings Enum Class
*
*	Class for the different parking options.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class Parkings extends Enum {

	const Allocated = 13;
	const Communal = 14;
	const Covered = 15;
	const Garage = 16;
	const Driveway = 17;
	const Gated = 18;
	const OffStreet = 19;
	const OnStreet = 20;
	const Rear = 21;
	const Permit = 22;
	const Private = 23;
	const Residents = 24;
}