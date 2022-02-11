<?php

declare(strict_types=1);

namespace ColissimoTracking;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'track' => '\\ColissimoTracking\\StructType\\Track',
            'trackResponse' => '\\ColissimoTracking\\StructType\\TrackResponse',
            'skybillInformationResult' => '\\ColissimoTracking\\StructType\\SkybillInformationResult',
        ];
    }
}
