<?php
/**
*	This file contains the RightmoveADF class.
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\RightmoveADF;

/**
*	RightmoveADF Class
*
*	Class for the RightmoveADF.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class RightmoveADF {

	const TEST = 0;
	const LIVE = 1;

	const SendProperty = 1;
	const RemoveProperty = 2;
	const GetBranchPropertyList = 3;
	const AddPremiumListing = 4;
	const AddFeraturedProperty = 5;
	const RemoveFeaturedProperty = 6;
	const GetPropertyPerformance = 7;
	const GetBranchPerformance = 8;
	const GetBrandEmails = 9;
	const GetBranchEmails = 10;
	const GetBrandPhoneLeads = 11;
	const GetBranchPhoneLeads = 12;
	const GetPropertyEmail = 13;

	public function __constructor($strPEMFile, $strPEMKeyFile, $numPlatform = RightmoveADF::LIVE){

	}

	public function createRequest(){

	}

	public function send(){

	}
}