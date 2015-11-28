<?php
/**
*	This file contains the Export Period Group model class.
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
*	Export Period Group Class
*
*	Class to handle Export Period group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class ExportPeriod implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'start_date' => array('type' => 'datetime', 'format' => 'd-m-Y', 'required' => true),
		'end_date' => array('type' => 'datetime', 'format' => 'd-m-Y', 'required' => true)
	);
}