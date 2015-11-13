<?php
/**
*	This file contains the Tenure Types Enum class.
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
*	Tenure Types Enum Class
*
*	Class for the different tenure types.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class TenureTypes extends Enum {

	const Freehold = 1;
	const Leasehold = 2;
	const Feudal = 3;
	const Commonhold = 4;
	const ShareOfFreehold = 5;
}