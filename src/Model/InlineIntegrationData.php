<?php
/**
 * InlineIntegrationData
 *
 * PHP version 5
 *
 * @category Class
 * @package  SignRequest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SignRequest API
 *
 * API for SignRequest.com
 * OpenAPI spec version: v1
 * Contact: tech-support@signrequest.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.11
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SignRequest\Model;

use \ArrayAccess;
use \SignRequest\ObjectSerializer;

/**
 * InlineIntegrationData Class Doc Comment
 *
 * @category Class
 * @package  SignRequest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineIntegrationData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InlineIntegrationData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'integration' => 'string',
        'integration_data' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'integration' => null,
        'integration_data' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'integration' => 'integration',
        'integration_data' => 'integration_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integration' => 'setIntegration',
        'integration_data' => 'setIntegrationData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integration' => 'getIntegration',
        'integration_data' => 'getIntegrationData'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const INTEGRATION_MFILES = 'mfiles';
    const INTEGRATION_SALESFORCE = 'salesforce';
    const INTEGRATION_FORMDESK = 'formdesk';
    const INTEGRATION_ZAPIER = 'zapier';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntegrationAllowableValues()
    {
        return [
            self::INTEGRATION_MFILES,
            self::INTEGRATION_SALESFORCE,
            self::INTEGRATION_FORMDESK,
            self::INTEGRATION_ZAPIER,
        ];
    }
    

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
        $this->container['integration'] = isset($data['integration']) ? $data['integration'] : null;
        $this->container['integration_data'] = isset($data['integration_data']) ? $data['integration_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getIntegrationAllowableValues();
        if (!is_null($this->container['integration']) && !in_array($this->container['integration'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'integration', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets integration
     *
     * @return string
     */
    public function getIntegration()
    {
        return $this->container['integration'];
    }

    /**
     * Sets integration
     *
     * @param string $integration integration
     *
     * @return $this
     */
    public function setIntegration($integration)
    {
        $allowedValues = $this->getIntegrationAllowableValues();
        if (!is_null($integration) && !in_array($integration, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'integration', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['integration'] = $integration;

        return $this;
    }

    /**
     * Gets integration_data
     *
     * @return object
     */
    public function getIntegrationData()
    {
        return $this->container['integration_data'];
    }

    /**
     * Sets integration_data
     *
     * @param object $integration_data integration_data
     *
     * @return $this
     */
    public function setIntegrationData($integration_data)
    {
        $this->container['integration_data'] = $integration_data;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


