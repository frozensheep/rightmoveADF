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

use Frozensheep\RightmoveADF\Values\ValuesBase;

/**
*	Furnishings Enum Class
*
*	Class for the different Furnishing options.
*
*	@package	Frozensheep\RightmoveADF\Values
*
*/
class Furnishings extends ValuesBase {

	const Furnished = 0;
	const PartFurnished = 1;
	const Unfurnished = 2;
	const FurnishedUnfurnished = 4;
}