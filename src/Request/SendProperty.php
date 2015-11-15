<?php
/**
*	This file contains the Send Property Request class.
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
use Frozensheep\RightmoveADF\Groups\Property;

/**
*	Send Property Class
*
*	Class for the send property request.
*
*	@package	Frozensheep\RightmoveADF\Request
*
*/
class SendProperty implements RequestInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Network', 'required' => true),
		'branch' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Branch', 'required' => true),
		'property' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Property', 'required' => true)
	);
}