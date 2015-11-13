<?php
/**
*	This file contains the Heatings Enum class.
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
*	Heatings Enum Class
*
*	Class for the different Heating options.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class Heatings extends Enum {

	const AirConditioning = 1;
	const Central = 2;
	const DoubleGlazing = 3;
	const EcoFriendly = 4;
	const Electric = 5;
	const Gas = 6;
	const GasCentral = 7;
	const NightStorage = 8;
	const Oil = 9;
	const Solar = 10;
	const SolarWater = 11;
	const UnderFloor = 12;
}