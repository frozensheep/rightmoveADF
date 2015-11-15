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
*	@package	Frozensheep\RightmoveADF\Groups
*
*/
class Details implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'summary' => array('type' => 'string', 'required' => true, 'max' => 1000),
		'description' => array('type' => 'string', 'required' => true, 'max' => 32000),
		'features' => array('type' => 'objectarray', 'class' => 'Frozensheep\Synthesize\Type\String', 'max' => 10),
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
		'floors' => array('type' => 'int'),
		'entrance_floor' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\EntranceFloors'),
		'condition' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\Conditions'),
		'accessibility' => array('type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Values\Accessibilites'),
		'heating' => array('type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Values\Heatings'),
		'furnished_type' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\Furnishings'),
		'pets_allowed' => array('type' => 'boolean'),
		'smokers_considered' => array('type' => 'boolean'),
		'housing_benefit_considered' => array('type' => 'boolean'),
		'sharers_considered' => array('type' => 'boolean'),
		'burglar_alarm' => array('type' => 'boolean'),
		'washing_machine' => array('type' => 'boolean'),
		'dishwasher' => array('type' => 'boolean'),
		'all_bills_inc' => array('type' => 'boolean'),
		'water_bill_inc' => array('type' => 'boolean'),
		'gas_bill_inc' => array('type' => 'boolean'),
		'electricity_bill_inc' => array('type' => 'boolean'),
		'oil_bill_inc' => array('type' => 'boolean'),
		'council_tax_inc' => array('type' => 'boolean'),
		'tv_licence_inc' => array('type' => 'boolean'),
		'sat_cable_tv_bill_inc' => array('type' => 'boolean'),
		'internet_bill_inc' => array('type' => 'boolean'),
		'business_for_sale' => array('type' => 'boolean'),
		'comm_use_class' => array('type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Values\CommercialuseClasses'),
		'rooms' => array('type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Groups\Room', 'max' => 99)
	);
}