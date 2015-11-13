<?php
/**
*	This file contains the Price Qualifiers Enum class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF\Values;

use Frozensheep\RightmoveADF\Values\ValuesBase;

/**
*	Price Qualifiers Enum Class
*
*	Class for the different price qualifiers.
*
*	@package	Frozensheep\RightmoveADF\Values
*
*/
class PriceQualifiers extends ValuesBase {

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