<?php

declare(strict_types=1);

namespace ColissimoTracking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillInformationResult StructType
 * Meta information extracted from the WSDL
 * - type: tns:skybillInformationResult
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SkybillInformationResult extends AbstractStructBase
{
    /**
     * The errorCode
     * @var int|null
     */
    protected ?int $errorCode = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The eventCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eventCode = null;
    /**
     * The eventDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eventDate = null;
    /**
     * The eventLibelle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eventLibelle = null;
    /**
     * The eventSite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eventSite = null;
    /**
     * The recipientCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientCity = null;
    /**
     * The recipientCountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientCountryCode = null;
    /**
     * The recipientZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientZipCode = null;
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $skybillNumber = null;
    /**
     * Constructor method for skybillInformationResult
     * @uses SkybillInformationResult::setErrorCode()
     * @uses SkybillInformationResult::setErrorMessage()
     * @uses SkybillInformationResult::setEventCode()
     * @uses SkybillInformationResult::setEventDate()
     * @uses SkybillInformationResult::setEventLibelle()
     * @uses SkybillInformationResult::setEventSite()
     * @uses SkybillInformationResult::setRecipientCity()
     * @uses SkybillInformationResult::setRecipientCountryCode()
     * @uses SkybillInformationResult::setRecipientZipCode()
     * @uses SkybillInformationResult::setSkybillNumber()
     * @param int $errorCode
     * @param string $errorMessage
     * @param string $eventCode
     * @param string $eventDate
     * @param string $eventLibelle
     * @param string $eventSite
     * @param string $recipientCity
     * @param string $recipientCountryCode
     * @param string $recipientZipCode
     * @param string $skybillNumber
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?string $eventCode = null, ?string $eventDate = null, ?string $eventLibelle = null, ?string $eventSite = null, ?string $recipientCity = null, ?string $recipientCountryCode = null, ?string $recipientZipCode = null, ?string $skybillNumber = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setEventCode($eventCode)
            ->setEventDate($eventDate)
            ->setEventLibelle($eventLibelle)
            ->setEventSite($eventSite)
            ->setRecipientCity($recipientCity)
            ->setRecipientCountryCode($recipientCountryCode)
            ->setRecipientZipCode($recipientZipCode)
            ->setSkybillNumber($skybillNumber);
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get eventCode value
     * @return string|null
     */
    public function getEventCode(): ?string
    {
        return $this->eventCode;
    }
    /**
     * Set eventCode value
     * @param string $eventCode
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setEventCode(?string $eventCode = null): self
    {
        // validation for constraint: string
        if (!is_null($eventCode) && !is_string($eventCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventCode, true), gettype($eventCode)), __LINE__);
        }
        $this->eventCode = $eventCode;
        
        return $this;
    }
    /**
     * Get eventDate value
     * @return string|null
     */
    public function getEventDate(): ?string
    {
        return $this->eventDate;
    }
    /**
     * Set eventDate value
     * @param string $eventDate
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setEventDate(?string $eventDate = null): self
    {
        // validation for constraint: string
        if (!is_null($eventDate) && !is_string($eventDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventDate, true), gettype($eventDate)), __LINE__);
        }
        $this->eventDate = $eventDate;
        
        return $this;
    }
    /**
     * Get eventLibelle value
     * @return string|null
     */
    public function getEventLibelle(): ?string
    {
        return $this->eventLibelle;
    }
    /**
     * Set eventLibelle value
     * @param string $eventLibelle
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setEventLibelle(?string $eventLibelle = null): self
    {
        // validation for constraint: string
        if (!is_null($eventLibelle) && !is_string($eventLibelle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventLibelle, true), gettype($eventLibelle)), __LINE__);
        }
        $this->eventLibelle = $eventLibelle;
        
        return $this;
    }
    /**
     * Get eventSite value
     * @return string|null
     */
    public function getEventSite(): ?string
    {
        return $this->eventSite;
    }
    /**
     * Set eventSite value
     * @param string $eventSite
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setEventSite(?string $eventSite = null): self
    {
        // validation for constraint: string
        if (!is_null($eventSite) && !is_string($eventSite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventSite, true), gettype($eventSite)), __LINE__);
        }
        $this->eventSite = $eventSite;
        
        return $this;
    }
    /**
     * Get recipientCity value
     * @return string|null
     */
    public function getRecipientCity(): ?string
    {
        return $this->recipientCity;
    }
    /**
     * Set recipientCity value
     * @param string $recipientCity
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setRecipientCity(?string $recipientCity = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCity) && !is_string($recipientCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCity, true), gettype($recipientCity)), __LINE__);
        }
        $this->recipientCity = $recipientCity;
        
        return $this;
    }
    /**
     * Get recipientCountryCode value
     * @return string|null
     */
    public function getRecipientCountryCode(): ?string
    {
        return $this->recipientCountryCode;
    }
    /**
     * Set recipientCountryCode value
     * @param string $recipientCountryCode
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setRecipientCountryCode(?string $recipientCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCountryCode) && !is_string($recipientCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCountryCode, true), gettype($recipientCountryCode)), __LINE__);
        }
        $this->recipientCountryCode = $recipientCountryCode;
        
        return $this;
    }
    /**
     * Get recipientZipCode value
     * @return string|null
     */
    public function getRecipientZipCode(): ?string
    {
        return $this->recipientZipCode;
    }
    /**
     * Set recipientZipCode value
     * @param string $recipientZipCode
     * @return \ColissimoTracking\StructType\SkybillInformationResult
     */
    public function setRecipientZipCode(?string $recipientZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientZipCode) && !is_string($recipientZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientZipCode, true), gettype($recipientZipCode)), __LINE__);
        }
        $this->recipientZipCode = $recipientZipCode;
        
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
     * @return \ColissimoTracking\StructType\SkybillInformationResult
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
}
