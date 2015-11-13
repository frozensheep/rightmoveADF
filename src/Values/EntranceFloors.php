<?php
/**
*	This file contains the Entrance Floors Enum class.
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
*	Entrance Floors Enum Class
*
*	Class for the different entrance floors.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class EntranceFloors extends Enum {

	const Basement = 1;
	const GroundFloor = 2;
	const 1stFloor = 3;
	const 2ndFloor = 4;
	const HigherThan2ndFloorNoLift = 5;
	const HigherThan2ndFloorWithLift = 6;
}