<?php
/**
*	This file contains the Tenure Types Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use MyCLabs\Enum\Enum;

/**
*	Tenure Types Enum Class
*
*	Class for the different tenure types.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class ValuesBase extends Enum implements \JsonSerializable  {

	/**
	*	JSON Serialise Method
	*
	*	Method for the \JsonSerializable Interface.
	*	@return mixed
	*/
	public function jsonSerialize(){
		return $this->getValue();
	}
}