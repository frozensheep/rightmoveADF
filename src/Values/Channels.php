<?php
/**
*	This file contains the Channels Enum class.
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
*	Channels Enum Class
*
*	Class for the different channel options.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class Channels extends Enum {

    const Sales = 1;
    const Lettings = 2;
}