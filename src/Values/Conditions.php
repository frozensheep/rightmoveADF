<?php
/**
*	This file contains the Conditons Enum class.
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
*	Conditons Enum Class
*
*	Class for the different Conditons.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class Conditons extends Enum {

	const Good = 1;
	const SomeWorkNeeded = 2;
	const WorkRequiredThroughout = 3;
	const MajorRenovationRequired = 4;
}