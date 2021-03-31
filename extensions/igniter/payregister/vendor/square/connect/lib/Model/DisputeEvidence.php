<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * DisputeEvidence Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class DisputeEvidence implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'evidence_id' => 'string',
        'dispute_id' => 'string',
        'uploaded_at' => 'string',
        'evidence_type' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'evidence_id' => 'evidence_id',
        'dispute_id' => 'dispute_id',
        'uploaded_at' => 'uploaded_at',
        'evidence_type' => 'evidence_type'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'evidence_id' => 'setEvidenceId',
        'dispute_id' => 'setDisputeId',
        'uploaded_at' => 'setUploadedAt',
        'evidence_type' => 'setEvidenceType'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'evidence_id' => 'getEvidenceId',
        'dispute_id' => 'getDisputeId',
        'uploaded_at' => 'getUploadedAt',
        'evidence_type' => 'getEvidenceType'
    );
  
    /**
      * $evidence_id The Square-generated ID of the evidence.
      * @var string
      */
    protected $evidence_id;
    /**
      * $dispute_id The ID of the dispute the evidence is associated with.
      * @var string
      */
    protected $dispute_id;
    /**
      * $uploaded_at The time when the next action is due, in RFC 3339 format.
      * @var string
      */
    protected $uploaded_at;
    /**
      * $evidence_type The type of the evidence. See [DisputeEvidenceType](#type-disputeevidencetype) for possible values
      * @var string
      */
    protected $evidence_type;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["evidence_id"])) {
              $this->evidence_id = $data["evidence_id"];
            } else {
              $this->evidence_id = null;
            }
            if (isset($data["dispute_id"])) {
              $this->dispute_id = $data["dispute_id"];
            } else {
              $this->dispute_id = null;
            }
            if (isset($data["uploaded_at"])) {
              $this->uploaded_at = $data["uploaded_at"];
            } else {
              $this->uploaded_at = null;
            }
            if (isset($data["evidence_type"])) {
              $this->evidence_type = $data["evidence_type"];
            } else {
              $this->evidence_type = null;
            }
        }
    }
    /**
     * Gets evidence_id
     * @return string
     */
    public function getEvidenceId()
    {
        return $this->evidence_id;
    }
  
    /**
     * Sets evidence_id
     * @param string $evidence_id The Square-generated ID of the evidence.
     * @return $this
     */
    public function setEvidenceId($evidence_id)
    {
        $this->evidence_id = $evidence_id;
        return $this;
    }
    /**
     * Gets dispute_id
     * @return string
     */
    public function getDisputeId()
    {
        return $this->dispute_id;
    }
  
    /**
     * Sets dispute_id
     * @param string $dispute_id The ID of the dispute the evidence is associated with.
     * @return $this
     */
    public function setDisputeId($dispute_id)
    {
        $this->dispute_id = $dispute_id;
        return $this;
    }
    /**
     * Gets uploaded_at
     * @return string
     */
    public function getUploadedAt()
    {
        return $this->uploaded_at;
    }
  
    /**
     * Sets uploaded_at
     * @param string $uploaded_at The time when the next action is due, in RFC 3339 format.
     * @return $this
     */
    public function setUploadedAt($uploaded_at)
    {
        $this->uploaded_at = $uploaded_at;
        return $this;
    }
    /**
     * Gets evidence_type
     * @return string
     */
    public function getEvidenceType()
    {
        return $this->evidence_type;
    }
  
    /**
     * Sets evidence_type
     * @param string $evidence_type The type of the evidence. See [DisputeEvidenceType](#type-disputeevidencetype) for possible values
     * @return $this
     */
    public function setEvidenceType($evidence_type)
    {
        $this->evidence_type = $evidence_type;
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
