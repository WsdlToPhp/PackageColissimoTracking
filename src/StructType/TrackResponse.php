<?php

namespace ColissimoTracking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TrackResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
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
}
