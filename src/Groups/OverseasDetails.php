<?php
/**
*	This file contains the Details Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Values\Parkings;
use Frozensheep\RightmoveADF\Values\OutsideSpaces;
use Frozensheep\RightmoveADF\Values\AreaUnits;
use Frozensheep\RightmoveADF\Values\EntranceFloors;
use Frozensheep\RightmoveADF\Values\Conditions;
use Frozensheep\RightmoveADF\Values\Accessibilities;
use Frozensheep\RightmoveADF\Values\Heatings;
use Frozensheep\RightmoveADF\Values\Furnishings;
use Frozensheep\RightmoveADF\Values\CommercialuseClasses;
use Frozensheep\RightmoveADF\Groups\Room;

/**
*	Details Group Class
*
*	Class to handle Details group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class OverseasDetails implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'summary' => array('type' => 'string', 'required' => true, 'max' => 1000),
		'description' => array('type' => 'string', 'required' => true, 'max' => 32000),
		'features' => array('type' => 'objectarray', 'class' => 'Frozensheep\Synthesize\Type\StringObject', 'max' => 10),
		'bedrooms' => array('type' => 'int', 'required' => true, 'min' => 0),
		'bathrooms' => array('type' => 'int', 'min' => 0),
		'reception_rooms' => array('type' => 'int', 'min' => 0),
		'parking' => array('type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Values\Parkings'),
		'outside_space' => array('type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Values\OutsideSpaces'),
		'year_built' => array('type' => 'int'),
		'internal_area' => array('type' => 'number'),
		'internal_area_unit' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\AreaUnits'),
		'land_area' => array('type' => 'number'),
		'land_area_unit' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\AreaUnits'),
		'floors' => array('type' => 'number')
	);
}