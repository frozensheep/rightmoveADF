<?php
/**
*	This file contains the Property Remove Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Values\RemovalReasons;

/**
*	Property Remove Group Class
*
*	Class to handle Property group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class PropertyRemove implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'agent_ref' => array('type' => 'string', 'required' => true, 'max' => 80),
		'removal_reason' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\RemovalReasons'),
		'transaction_date' => array('type' => 'datetime', 'format' => 'd-m-Y G:i:s')
	);
}