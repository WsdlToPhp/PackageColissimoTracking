<?php

namespace ColissimoTracking\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Track ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Track extends SoapClientBase
{
    /**
     * Method to call the operation originally named track
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoTracking\StructType\Track $parameters
     * @return \ColissimoTracking\StructType\TrackResponse|bool
     */
    public function track(\ColissimoTracking\StructType\Track $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->track($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ColissimoTracking\StructType\TrackResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
