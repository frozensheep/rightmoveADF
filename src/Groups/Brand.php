<?php
/**
*	This file contains the Brand Group model class.
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
*	Brand Group Class
*
*	Class to handle Brand group.
*
*	@package		Frozensheep\RightmoveADF\Groups
*
*/
class Brand implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'brand_id' => array('type' => 'int', 'required' => true)
	);
}