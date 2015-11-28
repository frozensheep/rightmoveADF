<?php
/**
*	This file contains the Rent Frequencies Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

/**
*	Rent Frequencies Enum Class
*
*	Class for the different rent frequencies.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class RentFrequencies extends ValuesBase {

	const Yearly = 1;
	const Quarterly = 4;
	const Monthly = 12;
	const Weekly = 52;
	const Daily = 365;
}