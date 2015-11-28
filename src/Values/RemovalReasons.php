<?php
/**
*	This file contains the Removal Reasons Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

/**
*	Removal Reasons Enum Class
*
*	Class for the different removal reasons.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class RemovalReasons extends ValuesBase {

	const SoldByUs = 7;
	const SoldByAnotherAgent = 8;
	const WithdrawnFromMarket = 9;
	const LostInstruction = 10;
	const Removed = 11;
	const LetByUs = 12;
}