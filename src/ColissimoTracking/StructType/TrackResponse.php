<?php

declare(strict_types=1);

namespace ColissimoTracking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ColissimoTracking\StructType\SkybillInformationResult|null
     */
    protected ?\ColissimoTracking\StructType\SkybillInformationResult $return = null;
    /**
     * Constructor method for trackResponse
     * @uses TrackResponse::setReturn()
     * @param \ColissimoTracking\StructType\SkybillInformationResult $return
     */
    public function __construct(?\ColissimoTracking\StructType\SkybillInformationResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ColissimoTracking\StructType\SkybillInformationResult|null
     */
    public function getReturn(): ?\ColissimoTracking\StructType\SkybillInformationResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ColissimoTracking\StructType\SkybillInformationResult $return
     * @return \ColissimoTracking\StructType\TrackResponse
     */
    public function setReturn(?\ColissimoTracking\StructType\SkybillInformationResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
