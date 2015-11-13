<?php
/**
*	This file contains the Furnishings Enum class.
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