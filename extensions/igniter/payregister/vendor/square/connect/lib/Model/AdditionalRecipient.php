<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * AdditionalRecipient Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class AdditionalRecipient implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'location_id' => 'string',
        'description' => 'string',
        'amount_money' => '\SquareConnect\Model\Money',
        'receivable_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'location_id' => 'location_id',
        'description' => 'description',
        'amount_money' => 'amount_money',
        'receivable_id' => 'receivable_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'location_id' => 'setLocationId',
        'description' => 'setDescription',
        'amount_money' => 'setAmountMoney',
        'receivable_id' => 'setReceivableId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'location_id' => 'getLocationId',
        'description' => 'getDescription',
        'amount_money' => 'getAmountMoney',
        'receivable_id' => 'getReceivableId'
    );
  
    /**
      * $location_id The location ID for a recipient (other than the merchant) receiving a portion of this tender.
      * @var string
      */
    protected $location_id;
    /**
      * $description The description of the additional recipient.
      * @var string
      */
    protected $description;
    /**
      * $amount_money The amount of money distributed to the recipient.
      * @var \SquareConnect\Model\Money
      */
    protected $amount_money;
    /**
      * $receivable_id The unique ID for this `AdditionalRecipientReceivable`, assigned by the server.
      * @var string
      */
    protected $receivable_id;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["location_id"])) {
              $this->location_id = $data["location_id"];
            } else {
              $this->location_id = null;
            }
            if (isset($data["description"])) {
              $this->description = $data["description"];
            } else {
              $this->description = null;
            }
            if (isset($data["amount_money"])) {
              $this->amount_money = $data["amount_money"];
            } else {
              $this->amount_money = null;
            }
            if (isset($data["receivable_id"])) {
              $this->receivable_id = $data["receivable_id"];
            } else {
              $this->receivable_id = null;
            }
        }
    }
    /**
     * Gets location_id
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }
  
    /**
     * Sets location_id
     * @param string $location_id The location ID for a recipient (other than the merchant) receiving a portion of this tender.
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->location_id = $location_id;
        return $this;
    }
    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
  
    /**
     * Sets description
     * @param string $description The description of the additional recipient.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Gets amount_money
     * @return \SquareConnect\Model\Money
     */
    public function getAmountMoney()
    {
        return $this->amount_money;
    }
  
    /**
     * Sets amount_money
     * @param \SquareConnect\Model\Money $amount_money The amount of money distributed to the recipient.
     * @return $this
     */
    public function setAmountMoney($amount_money)
    {
        $this->amount_money = $amount_money;
        return $this;
    }
    /**
     * Gets receivable_id
     * @return string
     */
    public function getReceivableId()
    {
        return $this->receivable_id;
    }
  
    /**
     * Sets receivable_id
     * @param string $receivable_id The unique ID for this `AdditionalRecipientReceivable`, assigned by the server.
     * @return $this
     */
    public function setReceivableId($receivable_id)
    {
        $this->receivable_id = $receivable_id;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
