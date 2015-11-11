<?php
/**
*	This file contains the Media Group model class.
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
*	Media Group Class
*
*	Class to handle Media group.
*
*	@package		Frozensheep\RightmoveADF\Groups
*
*/
class Media implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'media_type' => array('type' => 'int', 'required' => true),
		'media_url' => array('type' => 'string', 'required' => true, 'max' => 250),
		'caption' => array('type' => 'string', 'max' => 50),
		'sort_order' => array('type' => 'int', 'min' => 0),
		'media_update_date' => array('type' => 'datetime', 'format' => 'd-m-Y G:i:s')
	);
}