<?php
/**
*	This file contains the Conditons Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

/**
*	Conditons Enum Class
*
*	Class for the different Conditons.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class Conditons extends ValuesBase {

	const Good = 1;
	const SomeWorkNeeded = 2;
	const WorkRequiredThroughout = 3;
	const MajorRenovationRequired = 4;
}