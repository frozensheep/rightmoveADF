<?php
/**
*	This file contains the Principal Group model class.
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
*	Principal Group Class
*
*	Class to handle Principal group.
*
*	@package		Frozensheep\RightmoveADF\Groups
*
*/
class Principal implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'principal_email_address' => array('type' => 'string', 'required' => true, 'max' => 200),
		'auto_email_when_live' => array('type' => 'boolean'),
		'auto_email_updates' => array('type' => 'boolean')
	);
}