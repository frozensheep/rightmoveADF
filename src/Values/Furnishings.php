<?php
/**
*	This file contains the Furnishings Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use MyCLabs\Enum\Enum;

/**
*	Furnishings Enum Class
*
*	Class for the different Furnishing options.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class Furnishings extends Enum {

	const Furnished = 0;
	const Part-furnished = 1;
	const Unfurnished = 2;
	const FurnishedUnfurnished = 4;
}