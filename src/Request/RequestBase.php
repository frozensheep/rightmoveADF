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

use Frozensheep\RightmoveADF\Request\RequestInterface;
use Frozensheep\Synthesize\Synthesizer;

/**
*	Request Interface Class
*
*	Interface for all requests.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class RequestBase implements RequestInterface, \JsonSerializable {

	use Synthesizer;

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = '';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = '';

	/**
	*	Get URL Method
	*
	*	Returns the correct URL for the enviroment.
	*	@return string
	*/
	public function getURL(){
		return $this->boolEnviroment ? $this->_strLiveURL : $this->_strTestURL;
	}
}