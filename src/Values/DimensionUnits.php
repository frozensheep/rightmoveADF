<?php
/**
*	This file contains the Dimension Units Enum class.
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
*	Dimension Units Enum Class
*
*	Class for the different dimension units.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class DimensionUnits extends Enum {

    const Metres =  5;
    const Centimetres = 6;
    const Millimetres = 7;
    const Feet = 8;
    const Inches = 9;
}