<?php
/**
*	This file contains the Property Group model class.
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
use Frozensheep\RightmoveADF\Groups\Address;
use Frozensheep\RightmoveADF\Groups\Price;
use Frozensheep\RightmoveADF\Groups\Details;
use Frozensheep\RightmoveADF\Groups\Principal;

/**
*	Property Group Class
*
*	Class to handle Property group.
*
*	@package		Frozensheep\RightmoveADF\Groups
*
*/
class Property implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'agent_ref' => array('type' => 'string', 'required' => true, 'max' => 80),
		'published' => array('type' => 'boolean', 'required' => true),
		'property_type' => array('type' => 'int', 'required' => true),
		'status' => array('type' => 'int', 'required' => true),
		'new_home' => array('type' => 'boolean'),
		'student_property' => array('type' => 'boolean'),
		'house_flat_share' => array('type' => 'boolean'),
		'create_date' => array('type' => 'datetime', 'format' => 'd-m-Y G:i:s'),
		'update_date' => array('type' => 'datetime', 'format' => 'd-m-Y G:i:s'),
		'date_available' => array('type' => 'datetime', 'format' => 'd-m-Y'),
		'contract_months' => array('type' => 'int'),
		'minimum_term' => array('type' => 'int'),
		'let_type' => array('type' => 'int'),
		'address' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Address', 'required' => true),
		'price_information' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Price', 'required' => true),
		'details' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Details', 'required' => true),
		'media' => array('type' => 'dictionary', 'max' => 999),
		'principal' => array('type' => 'object', 'class' => 'Frozensheep\RightmoveADF\Groups\Principal'),
	);
}