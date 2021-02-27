<?php
/**
 * InboundGuidance
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Evers\SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Evers\SellingPartnerApi\Model\FbaInbound;
use \Evers\SellingPartnerApi\ObjectSerializer;
use \Evers\SellingPartnerApi\Model\ModelInterface;

/**
 * InboundGuidance Class Doc Comment
 *
 * @category Class
 * @description Specific inbound guidance for an item.
 * @package  Evers\SellingPartnerApi
 * @group 
 */
class InboundGuidance
{
    /**
     * Possible values of this enum
     */
    const INBOUND_NOT_RECOMMENDED = 'InboundNotRecommended';
    const INBOUND_OK = 'InboundOK';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INBOUND_NOT_RECOMMENDED,
            self::INBOUND_OK,
        ];
    }
}

