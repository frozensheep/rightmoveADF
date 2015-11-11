<?php
/**
*	This file contains the Property Remove Group model class.
*
*	@package		RightmoveADF
*	@version		@@RELEASE_VERSION@@
*	@author			Jacob Wyke <jacob@frozensheep.com>
*	@copyright		@@COPYRIGHT@@
*	@file			@@FILE@@
*	@file_Version	$Rev: 1937 $
*	@Last_Change	$LastChangedDate: 2014-11-27 10:18:05 +0000 (Thu, 27 Nov 2014) $
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;


/**
*	Property Remove Group Class
*
*	Class to handle Property group.
*
*	@package		Frozensheep\RightmoveADF\Groups
*
*/
class PropertyRemove implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'agent_ref' => array('type' => 'string', 'required' => true, 'max' => 80),
		'removal_reason' => array('type' => 'int'),
		'transaction_date' => array('type' => 'datetime', 'format' => 'd-m-Y G:i:s')
	);
}