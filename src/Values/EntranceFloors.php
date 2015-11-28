<?php
/**
*	This file contains the Entrance Floors Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

/**
*	Entrance Floors Enum Class
*
*	Class for the different entrance floors.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class EntranceFloors extends ValuesBase {

	const Basement = 1;
	const GroundFloor = 2;
	const FirstFloor = 3;
	const SecondFloor = 4;
	const HigherThan2ndFloorNoLift = 5;
	const HigherThan2ndFloorWithLift = 6;
}