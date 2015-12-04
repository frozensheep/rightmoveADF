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

use Frozensheep\Synthesize\Synthesizer;
use Frozensheep\RightmoveADF\Exception\UnknownRequestTypeException;
use Frozensheep\RightmoveADF\Curl;
use Frozensheep\RightmoveADF\Request\SendProperty;
use Frozensheep\RightmoveADF\Request\RemoveProperty;
use Frozensheep\RightmoveADF\Request\GetBranchPropertyList;
use Frozensheep\RightmoveADF\Request\AddPremiumListing;
use Frozensheep\RightmoveADF\Request\AddFeaturedProperty;
use Frozensheep\RightmoveADF\Request\RemoveFeaturedProperty;
use Frozensheep\RightmoveADF\Request\GetPropertyPerformance;
use Frozensheep\RightmoveADF\Request\GetBranchPerformance;
use Frozensheep\RightmoveADF\Request\GetBrandEmails;
use Frozensheep\RightmoveADF\Request\GetBranchEmails;
use Frozensheep\RightmoveADF\Request\GetBrandPhoneLeads;
use Frozensheep\RightmoveADF\Request\GetBranchPhoneLeads;
use Frozensheep\RightmoveADF\Request\GetPropertyEmail;

/**
*	RightmoveADF Class
*
*	Class for the RightmoveADF.
*
*	@package	Frozensheep\RightmoveADF
*
*/
class RightmoveADF {

	use Synthesizer;

	const TEST = 0;
	const LIVE = 1;

	const SendProperty = 1;
	const RemoveProperty = 2;
	const GetBranchPropertyList = 3;
	const AddPremiumListing = 4;
	const AddFeaturedProperty = 5;
	const RemoveFeaturedProperty = 6;
	const GetPropertyPerformance = 7;
	const GetBranchPerformance = 8;
	const GetBrandEmails = 9;
	const GetBranchEmails = 10;
	const GetBrandPhoneLeads = 11;
	const GetBranchPhoneLeads = 12;
	const GetPropertyEmail = 13;

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = array(
		'cert_file' => array('type' => 'string'),
		'cert_pass' => array('type' => 'string'),
		'environment' => array('type' => 'int', 'min' => 0, 'max' => 1, 'default' => RightmoveADF::TEST)
	);

	/**
	*	Class Constructor
	*
	*	Class constructure which accepts the certificate file, password and enviroment.
	*	@param string $strCertFile The certificate file.
	*	@param string $strCertPass The certificate password.
	*	@param int $numEnvironment The environment to run in.
	*	@return self
	*/
	public function __construct($strCertFile, $strCertPass, $numEnvironment = RightmoveADF::TEST){
		$this->cert_file = $strCertFile;
		$this->cert_pass = $strCertPass;
		$this->environment = $numEnvironment;
	}

	/**
	*	Create Request Method
	*
	*	Returns the request object for the given request type.
	*	@param int $numRequestType The request type.
	*	@return object
	*/
	public static function createRequest($numRequestType){
		switch($numRequestType){
			case RightmoveADF::SendProperty:
				return new SendProperty();
				break;
			case RightmoveADF::RemoveProperty:
				return new RemoveProperty();
				break;
			case RightmoveADF::GetBranchPropertyList:
				return new GetBranchPropertyList();
				break;
			case RightmoveADF::AddPremiumListing:
				return new AddPremiumListing();
				break;
			case RightmoveADF::AddFeaturedProperty:
				return new AddFeaturedProperty();
				break;
			case RightmoveADF::RemoveFeaturedProperty:
				return new RemoveFeaturedProperty();
				break;
			case RightmoveADF::GetPropertyPerformance:
				return new GetPropertyPerformance();
				break;
			case RightmoveADF::GetBranchPerformance:
				return new GetBranchPerformance();
				break;
			case RightmoveADF::GetBrandEmails:
				return new GetBrandEmails();
				break;
			case RightmoveADF::GetBranchEmails:
				return new GetBranchEmails();
				break;
			case RightmoveADF::GetBrandPhoneLeads:
				return new GetBrandPhoneLeads();
				break;
			case RightmoveADF::GetBranchPhoneLeads:
				return new GetBranchPhoneLeads();
				break;
			case RightmoveADF::GetPropertyEmail:
				return new GetPropertyEmail();
				break;
			default:
				throw new UnknownRequestTypeException();
				break;
		}
	}

	/**
	*	Create Request Method
	*
	*	Returns the request object for the given request type.
	*	@param int $numRequestType The request type.
	*	@return object
	*/
	public function send($objRequest, $strURLOverride = ''){
		$strURL = ($strURLOverride) ? $strURLOverride : $objRequest->getURL($this->environment);

		return Curl::send(json_encode($objRequest), $strURL, $this->cert_file, $this->cert_pass);
	}
}