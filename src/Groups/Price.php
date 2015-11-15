<?php
/**
*	This file contains the Price Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Values\PriceQualifiers;
use Frozensheep\RightmoveADF\Values\RentFrequencies;
use Frozensheep\RightmoveADF\Values\TenureTypes;

/**
*	Price Group Class
*
*	Class to handle Price group.
*
*	@package	Frozensheep\RightmoveADF\Groups
*
*/
class Price implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'price' => array('type' => 'number', 'required' => true, 'min' => 1),
		'price_qualifier' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\PriceQualifiers'),
		'deposit' => array('type' => 'number'),
		'administration_fee' => array('type' => 'string', 'max' => 4000),
		'rent_frequency' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\RentFrequencies'),
		'tenure_type' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\TenureTypes'),
		'auction' => array('type' => 'boolean'),
		'tenure_unexpired_years' => array('type' => 'int'),
		'price_per_unit_area' => array('type' => 'number')
	);
}