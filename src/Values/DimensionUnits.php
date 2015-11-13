<?php
/**
*	This file contains the Dimension Units Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

/**
*	Dimension Units Enum Class
*
*	Class for the different dimension units.
*
*	@package	Frozensheep\RightmoveADF\Values
*
*/
class DimensionUnits extends ValuesBase {

    const Metres =  5;
    const Centimetres = 6;
    const Millimetres = 7;
    const Feet = 8;
    const Inches = 9;
}