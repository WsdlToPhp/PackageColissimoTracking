<?php

namespace ColissimoTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackResponse StructType
 * Meta informations extracted from the WSDL
 * - type: trackResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TrackResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoTracking\StructType\SkybillInformationResult
     */
    public $return;
    /**
     * Constructor method for trackResponse
     * @uses TrackResponse::setReturn()
     * @param \ColissimoTracking\StructType\SkybillInformationResult $return
     */
    public function __construct(\ColissimoTracking\StructType\SkybillInformationResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ColissimoTracking\StructType\SkybillInformationResult|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ColissimoTracking\StructType\SkybillInformationResult $return
     * @return \ColissimoTracking\StructType\TrackResponse
     */
    public function setReturn(\ColissimoTracking\StructType\SkybillInformationResult $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoTracking\StructType\TrackResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
