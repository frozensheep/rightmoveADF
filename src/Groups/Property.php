<?php
/**
*	This file contains the Property Group model class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Groups\Address;
use Frozensheep\RightmoveADF\Groups\Price;
use Frozensheep\RightmoveADF\Groups\Details;
use Frozensheep\RightmoveADF\Groups\Principal;
use Frozensheep\RightmoveADF\Values\PropertyTypes;
use Frozensheep\RightmoveADF\Values\Statuses;
use Frozensheep\RightmoveADF\Values\LetTypes;

/**
*	Property Group Class
*
*	Class to handle Property group.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class Property implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'agent_ref' => array('type' => 'string', 'required' => true, 'max' => 80),
		'published' => array('type' => 'boolean', 'required' => true),
		'property_type' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\PropertyTypes', 'required' => true),
		'status' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\Statuses', 'required' => true),
		'new_home' => array('type' => 'boolean'),
		'student_property' => array('type' => 'boolean'),
		'house_flat_share' => array('type' => 'boolean'),
		'create_date' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'autoinit' => false),
		'update_date' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'autoinit' => false),
		'date_available' => array('type' => 'datetime', 'format' => 'd-m-Y', 'autoinit' => false),
		'contract_months' => array('type' => 'int'),
		'minimum_term' => array('type' => 'int'),
		'let_type' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\LetTypes'),
		'address' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Address', 'required' => true),
		'price_information' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Price', 'required' => true),
		'details' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Details', 'required' => true),
		'media' => array('type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Groups\Media', 'max' => 999),
		'principal' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Principal')
	);
}