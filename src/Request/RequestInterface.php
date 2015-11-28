<?php
/**
*	This file contains the Request Interface class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Request;

/**
*	Request Interface Class
*
*	Interface for all requests.
*
*	@package	Frozensheep\RightmoveADF
*
*/
interface RequestInterface {

	/**
	*	Get URL Method
	*
	*	Returns the correct URL for the enviroment.
	*	@return string
	*/
	public function getURL();
}