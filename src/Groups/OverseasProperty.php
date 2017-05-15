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
class OverseasProperty implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'agent_ref' => array('type' => 'string', 'required' => true, 'max' => 80),
		'published' => array('type' => 'boolean', 'required' => true),
		'property_type' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\PropertyTypes', 'required' => true),
		'os_status' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\Statuses', 'required' => true),
		'new_home' => array('type' => 'boolean'),
		'address' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\OverseasAddress', 'required' => true),
		'price_information' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\OverseasPrice', 'required' => true),
		'details' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\OverseasDetails', 'required' => true),
		'media' => array('type' => 'objectarray', 'class' => 'Frozensheep\RightmoveADF\Groups\Media', 'max' => 999),
		'create_date' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'autoinit' => false),
		'update_date' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'autoinit' => false)
	);
}