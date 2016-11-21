<?php
/**
*	Send Property Example
*
*	@package	Frozensheep\RightmoveADF
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

require_once(__DIR__.'/../vendor/autoload.php');

use Frozensheep\RightmoveADF\RightmoveADF;

//include the config file
require_once('config.php');

//create the RightmoveADF object
$objRightmoveADF = new RightmoveADF(CERT_FILE, CERT_PASS, RightmoveADF::TEST);

//create a request
$objRequest = $objRightmoveADF->createRequest(RightmoveADF::SendProperty);

//set the details for the request
$objRequest->network->network_id = NETWORK_ID;
$objRequest->branch->branch_id = BRANCH_ID;
$objRequest->branch->channel = Frozensheep\RightmoveADF\Values\Channels::Lettings;
//$objRequest->branch->overseas = false;
$objRequest->property->agent_ref = PROPERTY_REF;

//
//property details
//
$objRequest->property->published = true;
$objRequest->property->property_type = Frozensheep\RightmoveADF\Values\PropertyTypes::GroundFloorFlat;
$objRequest->property->status = Frozensheep\RightmoveADF\Values\Statuses::Available;
//$objRequest->property->new_home = false;
//$objRequest->property->student_property = true;
//$objRequest->property->house_flat_share = false;
//$objRequest->property->create_date = 'last Monday';
//$objRequest->property->update_date = 'now';
//$objRequest->property->date_available = 'next Tuesday';
//$objRequest->property->contract_months = 12;
//$objRequest->property->minimum_term = 6;
//$objRequest->property->let_type = Frozensheep\RightmoveADF\Values\LetTypes::LongTerm;

//
//address details
//
$objRequest->property->address->house_name_number = 'Old Trafford';
$objRequest->property->address->address_2 = 'Sir Matt Busby Way';
$objRequest->property->address->address_3 = '';
$objRequest->property->address->address_4 = '';
$objRequest->property->address->town = 'Manchester';
$objRequest->property->address->postcode_1 = 'M16';
$objRequest->property->address->postcode_2 = '0RA';
$objRequest->property->address->display_address = 'Sir Matt Busby Way';
//$objRequest->property->address->latitude = 53.462989;
//$objRequest->property->address->longitude = -2.291651;
//$objRequest->property->address->pov_latitude = 53.463438;
//$objRequest->property->address->pov_longitude = -2.2891147;
//$objRequest->property->address->pov_pitch = 100.0;
//$objRequest->property->address->pov_heading = 257.0;
//$objRequest->property->address->pov_zoom = 1;

//
//price details
//
$objRequest->property->price_information->price = 700.00;
//$objRequest->property->price_information->price_qualifier = Frozensheep\RightmoveADF\Values\PriceQualifiers::Defaults;
//$objRequest->property->price_information->deposit = 1100;
//$objRequest->property->price_information->administration_fee = 'Admin fee is equal to one weeks rent per person. Tenancy resigns are one week rent per person. All prices are exclusive of VAT.';
//$objRequest->property->price_information->rent_frequency = Frozensheep\RightmoveADF\Values\RentFrequencies::Monthly;
//$objRequest->property->price_information->tenure_type = Frozensheep\RightmoveADF\Values\TenureTypes::Freehold;
//$objRequest->property->price_information->auction = true;
//$objRequest->property->price_information->tenure_unexpired_years = 75;
//$objRequest->property->price_information->price_per_unit_area = 375;
//$objRequest->property->price_information->price_per_unit_per_annum = 375;

//
//general details
//
$objRequest->property->details->summary = 'This is the property summary';
$objRequest->property->details->description = 'This is the full property description';
//$objRequest->property->details->features()[] = 'Feature 1';
//$objRequest->property->details->features()[] = 'Feature 2';
//$objRequest->property->details->features()[] = 'Feature 3...can have up to 10.';
$objRequest->property->details->bedrooms = 2;
//$objRequest->property->details->bathrooms = 2;
//$objRequest->property->details->reception_rooms = 1;
//$objRequest->property->details->parking()[] = Frozensheep\RightmoveADF\Values\Parkings::Allocated;
//$objRequest->property->details->parking()[] = Frozensheep\RightmoveADF\Values\Parkings::OnStreet;
//$objRequest->property->details->outside_space()[] = Frozensheep\RightmoveADF\Values\OutsideSpaces::CommunalGarden;
//$objRequest->property->details->outside_space()[] = Frozensheep\RightmoveADF\Values\OutsideSpaces::Terrace;
//$objRequest->property->details->year_built = 1909;
//$objRequest->property->details->internal_area = 1500;
//$objRequest->property->details->internal_area_unit = Frozensheep\RightmoveADF\Values\AreaUnits::SqFt;
//$objRequest->property->details->land_area = 4000;
//$objRequest->property->details->land_area_unit = Frozensheep\RightmoveADF\Values\AreaUnits::SqFt;
//$objRequest->property->details->minimum = 20;
//$objRequest->property->details->maximum = 100;
//$objRequest->property->details->area_unit = Frozensheep\RightmoveADF\Values\AreaUnits::SqFt;
//$objRequest->property->details->floors = 3;
//$objRequest->property->details->entrance_floor = Frozensheep\RightmoveADF\Values\EntranceFloors::GroundFloor;
//$objRequest->property->details->condition = Frozensheep\RightmoveADF\Values\Conditions::Good;
//$objRequest->property->details->accessibility()[] = Frozensheep\RightmoveADF\Values\Accessibilites::LiftAccess;
//$objRequest->property->details->accessibility()[] = Frozensheep\RightmoveADF\Values\Accessibilites::WideDoorways;
//$objRequest->property->details->heating()[] = Frozensheep\RightmoveADF\Values\Heatings::AirConditioning;
//$objRequest->property->details->heating()[] = Frozensheep\RightmoveADF\Values\Heatings::Gas;
//$objRequest->property->details->heating()[] = Frozensheep\RightmoveADF\Values\Heatings::EcoFriendly;
//$objRequest->property->details->furnished_type = Frozensheep\RightmoveADF\Values\Furnishings::PartFurnished;
//$objRequest->property->details->pets_allowed = true;
//$objRequest->property->details->smokers_considered = true;
//$objRequest->property->details->housing_benefit_considered = true;
//$objRequest->property->details->sharers_considered = true;
//$objRequest->property->details->burglar_alarm = true;
//$objRequest->property->details->washing_machine = true;
//$objRequest->property->details->dishwasher = true;
//$objRequest->property->details->all_bills_inc = false;
//$objRequest->property->details->water_bill_inc = false;
//$objRequest->property->details->gas_bill_inc = false;
//$objRequest->property->details->electricity_bill_inc = false;
//$objRequest->property->details->oil_bill_inc = false;
//$objRequest->property->details->council_tax_inc = false;
//$objRequest->property->details->tv_licence_inc = false;
//$objRequest->property->details->sat_cable_tv_bill_inc = false;
//$objRequest->property->details->internet_bill_inc = false;
//$objRequest->property->details->business_for_sale = true;
//$objRequest->property->details->comm_use_class()[] = Frozensheep\RightmoveADF\Values\CommercialUseClasses::A1;
//$objRequest->property->details->comm_use_class()[] = Frozensheep\RightmoveADF\Values\CommercialUseClasses::A2;

//
//room definitions (up to 99)
//
$objLivingRoom = $objRequest->property->details->rooms()->create();
$objLivingRoom->room_name = 'Living Room';
//$objLivingRoom->room_description = 'A stylish modern layout with original polished wooden floors. South facing sash windows.';
//$objLivingRoom->room_length = 4.7;
//$objLivingRoom->room_width = 3.3;
//$objLivingRoom->room_dimension_unit = Frozensheep\RightmoveADF\Values\DimensionUnits::Metres;
//$objLivingRoom->room_dimension_text = 'Chimney breast reduces part of width to 2.9m.';
//$objLivingRoom->room_photo_urls()[] = 'http://lorempixel.com/800/600/';
//$objLivingRoom->room_photo_urls()[] = 'http://lorempixel.com/800/600/';

$objKitchen = $objRequest->property->details->rooms()->create();
$objKitchen->room_name = 'Kitchen';

$objDiningRoom = $objRequest->property->details->rooms()->create();
$objDiningRoom->room_name = 'Dining Room';

//
//media definitions (up to 999)
//
$objMedia1 = $objRequest->property->media()->create();
$objMedia1->media_type = Frozensheep\RightmoveADF\Values\MediaTypes::Image;
$objMedia1->media_url = 'http://lorempixel.com/800/600/city/1';
$objMedia1->caption = 'Front of house';
$objMedia1->sort_order = 1;
$objMedia1->media_update_date = 'now';

$objMedia2 = $objRequest->property->media()->create();
$objMedia2->media_type = Frozensheep\RightmoveADF\Values\MediaTypes::Image;
$objMedia2->media_url = 'http://lorempixel.com/800/600/city/2';

$objMedia3 = $objRequest->property->media()->create();
$objMedia3->media_type = Frozensheep\RightmoveADF\Values\MediaTypes::Image;
$objMedia3->media_url = 'http://lorempixel.com/800/600/city/3';

//
//principal (optional)
//
$objRequest->property->principal->principal_email_address = 'jacob@frozensheep.com';
$objRequest->property->principal->auto_email_when_live = true;
$objRequest->property->principal->auto_email_updates = true;

//send the request
$objResponse = $objRightmoveADF->send($objRequest);

print_r($objResponse);