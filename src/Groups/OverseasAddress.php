<?php
/**
*	This file contains the Address Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;

/**
*	Address Group Class
*
*	Class to handle Address group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class OverseasAddress implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'country_code' => array('type' => 'string', 'required' => true, 'max' => 2),
		'region' => array('type' => 'string', 'max' => 120),
		'sub_region' => array('type' => 'string', 'max' => 120),
		'town_city' => array('type' => 'string', 'max' => 120),
		'latitude' => array('type' => 'float', 'max' => 90.0, 'min' => -90.0),
		'longitude' => array('type' => 'float', 'max' => 180.0, 'min' => -180.0)
	);
}