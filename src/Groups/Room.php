<?php
/**
*	This file contains the Room Group model class.
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
*	Room Group Class
*
*	Class to handle Room group.
*
*	@package		Frozensheep\RightmoveADF\Groups
*
*/
class Room implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'room_name' => array('type' => 'string', 'required' => true, 'max' => 120),
		'room_description' => array('type' => 'string', 'max' => 1000),
		'room_length' => array('type' => 'number', 'min' => 0),
		'room_width' => array('type' => 'number', 'min' => 0),
		'room_dimension_unit' => array('type' => 'int'),
		'room_dimension_text' => array('type' => 'string', 'max' => 120),
		'room_photo_urls' => array('type' => 'dictionary'),
	);
}