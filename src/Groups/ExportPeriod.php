<?php
/**
*	This file contains the Export Period Group model class.
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
*	Export Period Group Class
*
*	Class to handle Export Period group.
*
*	@package		Frozensheep\RightmoveADF\Groups
*
*/
class ExportPeriod implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'start_date' => array('type' => 'datetime', 'format' => 'd-m-Y', 'required' => true),
		'end_date' => array('type' => 'datetime', 'format' => 'd-m-Y', 'required' => true)
	);
}