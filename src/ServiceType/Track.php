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
            $this->setResult($this->getSoapClient()->__soapCall('track', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
}
