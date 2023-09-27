<?php
/**
 *	This file contains the Sizing Group model class.
 *
 *	@package	Frozensheep\RightmoveADF
 *	@author		Jacob Wyke <jacob@frozensheep.com>
 *	@license	MIT
 *
 */

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Values\Accessibilities;

/**
 *	Sizing Group Class
 *
 *	Class to handle sizing group.
 *
 *	@package	Frozensheep\RightmoveADF
 *
 */
class Sizing implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'minimum' => array('type' => 'number', 'min' => 0),
		'maximum' => array('type' => 'number', 'min' => 0),
		'area_unit' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\AreaUnits'),
	);
}