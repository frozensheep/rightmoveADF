<?php
/**
*	This file contains the Get Branch Property List Request model class.
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

/**
*	Get Branch Property List Class
*
*	Class for get branch property list request.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class GetBranchPropertyList extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://adfapi.rightmove.co.uk/v1/property/getbranchpropertylist';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = '';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Network', 'required' => true),
		'branch' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Branch', 'required' => true)
	);
}