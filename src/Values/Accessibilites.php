<?php
/**
*	This file contains the Accessibilites Enum class.
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
*	Accessibilites Enum Class
*
*	Class for the different Accessibility options.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class Accessibilites extends Enum {

	const NotSuitableForWheelchairUsers = 42;
	const LevelAccess = 37;
	const LiftAccess = 38;
	const RampedAccess = 39;
	const WetRoom = 40;
	const WideDoorways = 41;
}