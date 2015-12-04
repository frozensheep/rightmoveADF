<?php
/**
*	This file contains the Get Brand Phone Leads Request model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Request;

use Frozensheep\RightmoveADF\Request\RequestBase;
use Frozensheep\RightmoveADF\Groups\Network;
use Frozensheep\RightmoveADF\Groups\Brand;
use Frozensheep\RightmoveADF\Groups\ExportPeriodTime;

/**
*	Get Brand Phone Leads Class
*
*	Class for the get brand phone leads request.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class GetBrandPhoneLeads extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://adfapi.rightmove.co.uk/v1/property/getbrandphoneleads';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = 'https://adfapi.adftest.rightmove.com/v1/property/getbrandphoneleads';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Network', 'required' => true),
		'brand' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Brand', 'required' => true),
		'export_period' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\ExportPeriodTime', 'required' => true)
	);
}