<?php
/**
*	This file contains the Remove Property Request class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Request;

use Frozensheep\RightmoveADF\Request\RequestBase;
use Frozensheep\RightmoveADF\Groups\Network;
use Frozensheep\RightmoveADF\Groups\Branch;
use Frozensheep\RightmoveADF\Groups\PropertyRemove;

/**
*	Remove Property Class
*
*	Class for remove property request.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class RemoveProperty extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://adfapi.rightmove.co.uk/v1/property/removeproperty';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = 'https://adfapi.adftest.rightmove.com/v1/property/removeproperty';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Network', 'required' => true),
		'branch' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Branch', 'required' => true),
		'property' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\PropertyRemove', 'required' => true)
	);
}