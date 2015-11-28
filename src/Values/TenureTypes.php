<?php
/**
*	This file contains the Tenure Types Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

/**
*	Tenure Types Enum Class
*
*	Class for the different tenure types.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class TenureTypes extends ValuesBase {

	const Freehold = 1;
	const Leasehold = 2;
	const Feudal = 3;
	const Commonhold = 4;
	const ShareOfFreehold = 5;
}