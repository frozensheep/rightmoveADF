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

use Frozensheep\RightmoveADF\Request\RequestInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Groups\Network;
use Frozensheep\RightmoveADF\Groups\Brand;
use Frozensheep\RightmoveADF\Groups\ExportPeriod;

/**
*	Get Brand Phone Leads Class
*
*	Class for the get brand phone leads request.
*
*	@package		Frozensheep\RightmoveADF\Request
*
*/
class GetBrandPhoneLeads implements RequestInterface, \JsonSerializable  {

	use Synthesizer;

	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Network', 'required' => true),
		'brand' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Brand', 'required' => true),
		'export_period' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\ExportPeriod', 'required' => true)
	);
}