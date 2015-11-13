<?php
/**
*	This file contains the Channels Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
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