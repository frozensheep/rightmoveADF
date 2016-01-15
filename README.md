# RightmoveADF

PHP library for the Rightmove Real Time Datafeed.

[![Latest Stable Version](https://img.shields.io/packagist/v/frozensheep/rightmove-ADF.svg?style=flat-square)](https://packagist.org/packages/frozensheep/rightmove-adf)
[![Build Status](https://img.shields.io/travis/frozensheep/rightmoveADF/master.svg?style=flat-square)](https://travis-ci.org/frozensheep/rightmoveADF)
[![Coverage Status](https://coveralls.io/repos/frozensheep/rightmoveADF/badge.svg?branch=master&service=github)](https://coveralls.io/github/frozensheep/rightmoveADF?branch=master)
[![MIT License](https://img.shields.io/packagist/l/frozensheep/rightmove-ADF.svg?style=flat-square)](https://github.com/frozensheep/rightmoveADF/blob/master/LICENSE)
[![PHP 5.4](https://img.shields.io/badge/php-5.4-8892BF.svg?style=flat-square)](https://php.net/)
[![PHP 5.5](https://img.shields.io/badge/php-5.5-8892BF.svg?style=flat-square)](https://php.net/)
[![PHP 5.6](https://img.shields.io/badge/php-5.6-8892BF.svg?style=flat-square)](https://php.net/)
[![PHP 7](https://img.shields.io/badge/php-7-8892BF.svg?style=flat-square)](https://php.net/)


## Install

To install with Composer:

```sh
composer require frozensheep/rightmove-adf
```

Or add to a composer.json file:

```json
"require": {
	"frozensheep/rightmove-adf" : "1.*"
}
```

## Usage

All 13 of the v1.2.1 API endpoints are supported.

- SendProperty [[Example](https://github.com/frozensheep/rightmoveADF/blob/master/examples/sendProperty.php)]
- RemoveProperty [[Example](https://github.com/frozensheep/rightmoveADF/blob/master/examples/removeProperty.php)]
- GetBranchPropertyList [[Example](https://github.com/frozensheep/rightmoveADF/blob/master/examples/getBranchPropertyList.php)]
- AddPremiumListing [[Example](https://github.com/frozensheep/rightmoveADF/blob/master/examples/addPremiumListing.php)]
- AddFeaturedProperty [[Example](https://github.com/frozensheep/rightmoveADF/blob/master/examples/addFeaturedProperty.php)]
- RemoveFeaturedProperty [[Example](https://github.com/frozensheep/rightmoveADF/blob/master/examples/removeFeaturedProperty.php)]
- GetPropertyPerformance [[Example](https://github.com/frozensheep/rightmoveADF/blob/master/examples/getPropertyPerformance.php)]
- GetBranchPerformance [[Example](https://github.com/frozensheep/rightmoveADF/blob/master/examples/getBranchPerformance.php)]
- GetBrandEmails [[Example](https://github.com/frozensheep/rightmoveADF/blob/master/examples/getBrandEmails.php)]
- GetBranchEmails [[Example](https://github.com/frozensheep/rightmoveADF/blob/master/examples/getBranchEmails.php)]
- GetBrandPhoneLeads [[Example](https://github.com/frozensheep/rightmoveADF/blob/master/examples/getBrandPhoneLeads.php)]
- GetBranchPhoneLeads [[Example](https://github.com/frozensheep/rightmoveADF/blob/master/examples/getBranchPhoneLeads.php)]
- GetPropertyEmails [[Example](https://github.com/frozensheep/rightmoveADF/blob/master/examples/getPropertyEmails.php)]

```php
<?php
use Frozensheep\RightmoveADF\RightmoveADF;

//create the RightmoveADF object
$objRightmoveADF = new RightmoveADF(CERT_FILE, CERT_PASS, RightmoveADF::TEST);
//$objRightmoveADF = new RightmoveADF(CERT_FILE, CERT_PASS, RightmoveADF::LIVE);

//create a request
$objRequest = $objRightmoveADF->createRequest(RightmoveADF::GetBranchPropertyList);

//set the details for the request
$objRequest->network->network_id = NETWORK_ID;
$objRequest->branch->branch_id = BRANCH_ID;

//send the request
$objResponse = $objRightmoveADF->send($objRequest);

if($objResponse->success){
	...
}else{
	print_r($objResponse->errors);
}
```

## Todo

- Add in option to set verbose mode on the request to help track errors with certificates.

## Known Issues
None.

Please submit any to the [Github repo](https://github.com/frozensheep/rightmoveADF/issues).