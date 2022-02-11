<?php

declare(strict_types=1);

namespace ColissimoTracking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $accountNumber = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $skybillNumber = null;
    /**
     * The apiKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $apiKey = null;
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
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $skybillNumber = null, ?string $apiKey = null)
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
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \ColissimoTracking\StructType\Track
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \ColissimoTracking\StructType\Track
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get skybillNumber value
     * @return string|null
     */
    public function getSkybillNumber(): ?string
    {
        return $this->skybillNumber;
    }
    /**
     * Set skybillNumber value
     * @param string $skybillNumber
     * @return \ColissimoTracking\StructType\Track
     */
    public function setSkybillNumber(?string $skybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;
        
        return $this;
    }
    /**
     * Get apiKey value
     * @return string|null
     */
    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }
    /**
     * Set apiKey value
     * @param string $apiKey
     * @return \ColissimoTracking\StructType\Track
     */
    public function setApiKey(?string $apiKey = null): self
    {
        // validation for constraint: string
        if (!is_null($apiKey) && !is_string($apiKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiKey, true), gettype($apiKey)), __LINE__);
        }
        $this->apiKey = $apiKey;
        
        return $this;
    }
}
