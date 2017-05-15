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
*	@package	Frozensheep\RightmoveADF
*
*/
class OverseasPrice implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'price' => array('type' => 'number', 'required' => true, 'min' => 1),
		'os_price_qualifier' => array('type' => 'enum', 'class' => 'Frozensheep\RightmoveADF\Values\PriceQualifiers')
	);
}