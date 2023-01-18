<?php
/**
 * ChargeRefundEvent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SellingPartnerApi\Model\FinancesV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ChargeRefundEvent Class Doc Comment
 *
 * @category Class
 * @description An event related to charge refund.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ChargeRefundEvent extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChargeRefundEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'posted_date' => 'string',
        'reason_code' => 'string',
        'reason_code_description' => 'string',
        'charge_refund_transactions' => '\SellingPartnerApi\Model\FinancesV0\ChargeRefundTransaction'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'posted_date' => null,
        'reason_code' => null,
        'reason_code_description' => null,
        'charge_refund_transactions' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'posted_date' => 'PostedDate',
        'reason_code' => 'ReasonCode',
        'reason_code_description' => 'ReasonCodeDescription',
        'charge_refund_transactions' => 'ChargeRefundTransactions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'posted_date' => 'setPostedDate',
        'reason_code' => 'setReasonCode',
        'reason_code_description' => 'setReasonCodeDescription',
        'charge_refund_transactions' => 'setChargeRefundTransactions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'posted_date' => 'getPostedDate',
        'reason_code' => 'getReasonCode',
        'reason_code_description' => 'getReasonCodeDescription',
        'charge_refund_transactions' => 'getChargeRefundTransactions'
    ];


    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['reason_code'] = $data['reason_code'] ?? null;
        $this->container['reason_code_description'] = $data['reason_code_description'] ?? null;
        $this->container['charge_refund_transactions'] = $data['charge_refund_transactions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }


    /**
     * Gets posted_date
     *
     * @return string|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param string|null $posted_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }
    /**
     * Gets reason_code
     *
     * @return string|null
     */
    public function getReasonCode()
    {
        return $this->container['reason_code'];
    }

    /**
     * Sets reason_code
     *
     * @param string|null $reason_code The reason given for a charge refund. Example: `SubscriptionFeeCorrection`
     *
     * @return self
     */
    public function setReasonCode($reason_code)
    {
        $this->container['reason_code'] = $reason_code;

        return $this;
    }
    /**
     * Gets reason_code_description
     *
     * @return string|null
     */
    public function getReasonCodeDescription()
    {
        return $this->container['reason_code_description'];
    }

    /**
     * Sets reason_code_description
     *
     * @param string|null $reason_code_description A description of the Reason Code.  Example: `SubscriptionFeeCorrection`
     *
     * @return self
     */
    public function setReasonCodeDescription($reason_code_description)
    {
        $this->container['reason_code_description'] = $reason_code_description;

        return $this;
    }
    /**
     * Gets charge_refund_transactions
     *
     * @return \SellingPartnerApi\Model\FinancesV0\ChargeRefundTransaction|null
     */
    public function getChargeRefundTransactions()
    {
        return $this->container['charge_refund_transactions'];
    }

    /**
     * Sets charge_refund_transactions
     *
     * @param \SellingPartnerApi\Model\FinancesV0\ChargeRefundTransaction|null $charge_refund_transactions charge_refund_transactions
     *
     * @return self
     */
    public function setChargeRefundTransactions($charge_refund_transactions)
    {
        $this->container['charge_refund_transactions'] = $charge_refund_transactions;

        return $this;
    }
}

