<?php
/**
*	This file contains the Let Types Enum class.
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
*	Let Types Enum Class
*
*	Class for the different let types.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class LetTypes extends Enum {

	const LongTerm = 1;
	const ShortTerm = 2;
	const Commercial = 4;
	const NotSpecified = 0;
}