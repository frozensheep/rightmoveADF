<?php
/**
*	This file contains the Media Types Enum class.
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
*	Media Types Enum Class
*
*	Class for the different media types.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class MediaTypes extends Enum {

	const Image = 1;
	const Floorplan = 2;
	const Brochure = 3;
	const VirtualTour = 4;
	const AudioTour = 5	;
	const EPC = 6;
	const EPCGraph = 7;
}