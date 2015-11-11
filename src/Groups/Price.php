<?php
/**
*	This file contains the Price Group model class.
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
*	Price Group Class
*
*	Class to handle Price group.
*
*	@package		Frozensheep\RightmoveADF\Groups
*
*/
class Price implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'price' => array('type' => 'number', 'required' => true, 'min' => 1),
		'price_qualifier' => array('type' => 'int'),
		'deposit' => array('type' => 'number'),
		'administration_fee' => array('type' => 'string', 'max' => 4000),
		'rent_frequency' => array('type' => 'int'),
		'tenure_type' => array('type' => 'int'),
		'auction' => array('type' => 'boolean'),
		'tenure_unexpired_years' => array('type' => 'int'),
		'price_per_unit_area' => array('type' => 'number')
	);
}