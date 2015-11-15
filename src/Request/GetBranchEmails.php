<?php
/**
*	This file contains the Get Branch Emails Request model class.
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
use Frozensheep\RightmoveADF\Groups\Branch;
use Frozensheep\RightmoveADF\Groups\ExportPeriod;

/**
*	Get Branch Emails Class
*
*	Class for the get branch emails request.
*
*	@package	Frozensheep\RightmoveADF\Request
*
*/
class GetBranchEmails implements RequestInterface, \JsonSerializable  {

	use Synthesizer;

	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Network', 'required' => true),
		'branch' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Branch', 'required' => true),
		'export_period' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\ExportPeriod', 'required' => true)
	);
}