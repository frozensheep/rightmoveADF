<?php
/**
*	This file contains the Export Period Time Group model class.
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
*	Export Period Time Group Class
*
*	Class to handle Export Period Time group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class ExportPeriodTime implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'start_date_time' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'required' => true),
		'end_date_time' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'required' => true)
	);
}