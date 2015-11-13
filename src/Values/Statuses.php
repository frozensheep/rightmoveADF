<?php
/**
*	This file contains the Statuses Enum class.
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
*	Statuses Enum Class
*
*	Class for the different statuses.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class Statuses extends Enum {

	const Available = 1;
	const SSTC = 2;
	const SSTCM = 3;
	const UnderOffer = 4;
	const Reserved = 5;
	const LetAgreed = 6;
}