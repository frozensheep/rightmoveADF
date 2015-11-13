<?php
/**
*	This file contains the Media Types Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
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