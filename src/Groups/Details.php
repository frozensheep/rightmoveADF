<?php
/**
*	This file contains the Details Group model class.
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
*	Details Group Class
*
*	Class to handle Details group.
*
*	@package		Frozensheep\RightmoveADF\Groups
*
*/
class Details implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'summary' => array('type' => 'string', 'required' => true, 'max' => 1000),
		'description' => array('type' => 'string', 'required' => true, 'max' => 32000),
		'features' => array('type' => 'dictionary'),
		'bedrooms' => array('type' => 'int', 'required' => true, 'min' => 0),
		'bathrooms' => array('type' => 'int', 'min' => 0),
		'reception_rooms' => array('type' => 'int', 'min' => 0),
		'parking' => array('type' => 'dictionary'),
		'outside_space' => array('type' => 'dictionary'),
		'year_built' => array('type' => 'int'),
		'internal_area' => array('type' => 'number'),
		'internal_area_unit' => array('type' => 'int'),
		'land_area' => array('type' => 'number'),
		'land_area_unit' => array('type' => 'int'),
		'floors' => array('type' => 'int'),
		'entrance_floor' => array('type' => 'int'),
		'condition' => array('type' => 'int'),
		'accessibility' => array('type' => 'dictionary'),
		'heating' => array('type' => 'dictionary'),
		'furnished_type' => array('type' => 'int'),
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
		'comm_use_class' => array('type' => 'dictionary'),
		'rooms' => array('type' => 'dictionary', 'max' => 99)
	);
}