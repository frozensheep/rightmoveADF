<?php
/**
*	This file contains the Outside Spaces Enum class.
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

namespace Frozensheep\RightmoveADF\Values;

use MyCLabs\Enum\Enum;

/**
*	Outside Spaces Enum Class
*
*	Class for the different outside spaces.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class OutsideSpaces extends Enum {

	const BackGarden = 29;
	const CommunalGarden = 30;
	const EnclosedGarden = 31;
	const FrontGarden = 32;
	const PrivateGarden = 33;
	const RearGarden = 34;
	const Terrace = 35;
	const Patio = 36;
}