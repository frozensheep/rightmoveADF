<?php
/**
*	This file contains the Accessibilites Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

/**
*	Accessibilites Enum Class
*
*	Class for the different Accessibility options.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class Accessibilites extends ValuesBase {

	const NotSuitableForWheelchairUsers = 42;
	const LevelAccess = 37;
	const LiftAccess = 38;
	const RampedAccess = 39;
	const WetRoom = 40;
	const WideDoorways = 41;
}