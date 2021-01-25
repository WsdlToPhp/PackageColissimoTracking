<?php

namespace ColissimoTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for track StructType
 * Meta information extracted from the WSDL
 * - type: tns:track
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Track extends AbstractStructBase
{
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $accountNumber;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $password;
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $skybillNumber;
    /**
     * The apiKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $apiKey;
    /**
     * Constructor method for track
     * @uses Track::setAccountNumber()
     * @uses Track::setPassword()
     * @uses Track::setSkybillNumber()
     * @uses Track::setApiKey()
     * @param string $accountNumber
     * @param string $password
     * @param string $skybillNumber
     * @param string $apiKey
     */
    public function __construct($accountNumber = null, $password = null, $skybillNumber = null, $apiKey = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setSkybillNumber($skybillNumber)
            ->setApiKey($apiKey);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \ColissimoTracking\StructType\Track
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \ColissimoTracking\StructType\Track
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get skybillNumber value
     * @return string|null
     */
    public function getSkybillNumber()
    {
        return $this->skybillNumber;
    }
    /**
     * Set skybillNumber value
     * @param string $skybillNumber
     * @return \ColissimoTracking\StructType\Track
     */
    public function setSkybillNumber($skybillNumber = null)
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;
        return $this;
    }
    /**
     * Get apiKey value
     * @return string|null
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }
    /**
     * Set apiKey value
     * @param string $apiKey
     * @return \ColissimoTracking\StructType\Track
     */
    public function setApiKey($apiKey = null)
    {
        // validation for constraint: string
        if (!is_null($apiKey) && !is_string($apiKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiKey, true), gettype($apiKey)), __LINE__);
        }
        $this->apiKey = $apiKey;
        return $this;
    }
}
