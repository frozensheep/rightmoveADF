<?php
/**
*	This file contains the Unknown Request Type Exception Class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Exception;

/**
*	Unknown Request Type Exception Class
*
*	Exception for an unknown request type.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class UnknownRequestTypeException extends \RuntimeException {

	/**
	*	Constructor
	*
	*	@return self
	*/
	public function __construct(){
		parent::__construct('Unknown Request Type.');
	}
}