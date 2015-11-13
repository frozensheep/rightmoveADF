<?php
/**
*	This file contains the Price Qualifiers Enum class.
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
*	Price Qualifiers Enum Class
*
*	Class for the different price qualifiers.
*
*	@package		Frozensheep\RightmoveADF\Values
*
*/
class PriceQualifiers extends Enum {

	const Default = 0;
	const POA = 1;
	const GuidePrice = 2;
	const FixedPrice = 3;
	const OffersInExcessOf = 4;
	const OIRO = 5;
	const SaleByTender = 6;
	const From = 7;
	const SharedOwnership = 9;
	const OffersOver = 10;
	const PartBuyRent = 11;
	const SharedEquity = 12;
	const ComingSoon = 16;
}