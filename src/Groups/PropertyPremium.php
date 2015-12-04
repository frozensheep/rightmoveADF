<?php
/**
*	This file contains the Property Premium Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Groups\PremiumListing;


/**
*	Property Premium Group Class
*
*	Class to handle Property Premium group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class PropertyPremium implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'agent_ref' => array('type' => 'string', 'required' => true, 'max' => 80),
		'premium_listing' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\PremiumListing', 'required' => true)
	);
}