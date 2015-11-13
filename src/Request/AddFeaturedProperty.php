<?php
/**
*	This file contains the Add Featured Property Request model class.
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
use Frozensheep\RightmoveADF\Groups\PropertyFeature;
use Frozensheep\RightmoveADF\Groups\FeaturedProperty;

/**
*	Add Featured Property Class
*
*	Class for the add featured property request.
*
*	@package		Frozensheep\RightmoveADF\Request
*
*/
class AddFeaturedProperty implements RequestInterface, \JsonSerializable  {

	use Synthesizer;

	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Network', 'required' => true),
		'branch' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Branch', 'required' => true),
		'property' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\PropertyFeature', 'required' => true),
		'featured_property' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\FeaturedProperty', 'required' => true)
	);
}