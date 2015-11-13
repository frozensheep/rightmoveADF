<?php
/**
*	This file contains the Area Units Enum class.
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