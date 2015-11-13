<?php
/**
*	This file contains the Area Units Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use MyCLabs\Enum\Enum;

/**
*	Area Units Enum Class
*
*	Class for the different area units.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class AreaUnits extends Enum {

	const SqFt = 1;
	const SqM = 2;
	const Acre = 3;
	const Hectares = 4;
}