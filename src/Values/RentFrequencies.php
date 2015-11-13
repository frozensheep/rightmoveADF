<?php
/**
*	This file contains the Rent Frequencies Enum class.
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
*	Rent Frequencies Enum Class
*
*	Class for the different rent frequencies.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class RentFrequencies extends Enum {

	const Yearly = 1;
	const Quarterly = 4;
	const Monthly = 12;
	const Weekly = 52;
	const Daily = 365;
}